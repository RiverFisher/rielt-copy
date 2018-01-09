<?php

namespace App\Controller\RealProperty;

use App\Entity\RealProperty\RealProperty;
use App\Form\RealProperty\RealPropertyType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RealPropertyController
 *
 * @Route("real_property")
 * @package App\Controller\RealProperty
 */
class RealPropertyController extends Controller
{
    /**
     * @Route("/", name="real_property_index")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $realProperties = $em->getRepository(RealProperty::class)->findAll();

        return $this->render('RealProperty/RealProperty/index.html.twig', [
            'realProperties' => $realProperties
        ]);
    }

    /**
     * Creates a new real property entity
     *
     * @Route("/new", name="real_property_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function new(Request $request) {
        $realProperty = new RealProperty();
        $form = $this->createForm(RealPropertyType::class, $realProperty);
        $form->handleRequest($request);

//        dump($form->getData());
//
//        dump($realProperty);
//        dump($realProperty->getImages());
//        dump($request->get('images'));

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($realProperty);
            $em->flush();

            return $this->redirectToRoute('real_property_index');
        }

        return $this->render('RealProperty/RealProperty/new.html.twig', [
            'realProperty'  => $realProperty,
            'form'          => $form->createView(),
        ]);
    }

    /**
     * Finds and displays a real property entity
     *
     * @Route("/{id}", requirements={"id" = "\d+"}, name="tournament_show")
     * @Method("GET")
     * @param Request $request
     * @param RealProperty $realProperty
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function show(Request $request, RealProperty $realProperty) {
        $em = $this->getDoctrine()->getManager();

        $isTransferenceAllowed = FALSE;

        return $this->render('@SocialNetworkTournaments/tournament/show.html.twig', [
            'is_transference_allowed' => FALSE,
//                'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * Displays a form to edit an existing real property entity
     *
     * @Route("/{id}/edit", name="real_property_edit")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param RealProperty $realProperty
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function edit(Request $request, RealProperty $realProperty)
    {
        $errorMessage = NULL;
        $deleteForm = $this->createDeleteForm($realProperty);

        $editForm = $this
            ->createForm(RealPropertyType::class, $realProperty);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            /**
             * Set date of change
             */
            $realProperty->setDateOfChange(new \DateTime('NOW'));

            $this->getDoctrine()->getManager()->persist($realProperty);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_show', ['id' => $realProperty->getId()]);
        }

        return $this->render('@ManagementAdmin/user/edit.html.twig', [
            'currentPlainPassword' => $request,
            'realProperty' => $realProperty,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'error_message' => $errorMessage
        ]);
    }

    /**
     * Deletes a real property entity
     *
     * @Route("/{id}", requirements={"id" = "\d+"}, name="user_delete")
     * @Method("DELETE")
     * @param Request $request
     * @param RealProperty $realProperty
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function delete(Request $request, RealProperty $realProperty)
    {
        $form = $this->createDeleteForm($realProperty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($realProperty);
            $em->flush();
        }

        return $this->redirectToRoute('real_property_index');
    }

    /**
     * Creates a form to delete a RealProperty entity
     *
     * @param RealProperty $realProperty
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(RealProperty $realProperty)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('real_property_delete', [
                'id' => $realProperty->getId()]))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
