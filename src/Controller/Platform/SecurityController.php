<?php

namespace App\Controller\Platform;

use App\Entity\Platform\User;
use App\Form\Platform\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * SecurityController
 *
 * @Route("/")
 */
class SecurityController extends Controller {
    /**
     * @Route("/login", name="login")
     *
     * @param AuthenticationUtils $authUtils
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(AuthenticationUtils $authUtils) {
        $loginForm = $this->createFormBuilder()
            ->setAction($this->generateUrl('login'))
            ->setMethod('POST')
            ->add('username', TextType::class, [
                'label' => 'Username',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Password',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Log In',
                'attr' => [
                    'class' => 'btn btn-sm btn-primary col-6 mx-auto',
                    'style' => 'display: block;'
                ]
            ])
            ->getForm();

        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('Platform/login.html.twig', [
            'login_form'    => $loginForm->createView(),
            'last_username' => $lastUsername,
            'error'         => $error
        ]);
    }

    /**
     * @Route("/registration", name="registration")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registrationAction(Request $request) {
        /**
         * Create a new blank user and process the form
         */
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * Encode the new user's password
             */
            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            /**
             * Set user as active
             */
            $user->setEnabled(TRUE);

            /**
             * Assign ROLE_USER role
             */
            $user->addRole('ROLE_USER');

            /**
             * Set date of creation and assume that this user just has also been changed
             */
            $dateOfCreation = new \DateTime('NOW');
            $user->setDateOfCreation($dateOfCreation);
            $user->setDateOfChange($dateOfCreation);

            /**
             * Save
             */
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('login');
        }

        return $this->render('Platform/registration.html.twig', [
            'user' => $user,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/login_check", name="login_check")
     *
    public function checkAction() {
//        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }*/

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction() {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
}
