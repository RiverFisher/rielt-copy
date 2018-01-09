<?php

namespace App\Controller\Platform;

use App\Entity\Platform\Container;
use App\Entity\Platform\Image;
use App\Form\Platform\ContainerType;
use App\Form\Platform\ImageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RealPropertyTypeController
 *
 * @Route("container")
 * @package App\Controller\RealProperty
 */
class ContainerController extends Controller
{
    /**
     * @Route("/", name="container_index")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $containers = $em->getRepository(Container::class)->findAll();

        return $this->render('Platform/Container/index.html.twig', [
            'containers' => $containers
        ]);
    }

    /**
     * Creates a new RealPropertyType entity
     *
     * @Route("/new", name="container_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function new(Request $request) {
        $container = new Container();
        $form = $this->createForm(ContainerType::class, $container);
        $form->handleRequest($request);

        dump($form->getData());

        dump($container);
        dump($container->getContainerImages());
        dump($request->get('containerImages'));

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($container);
            $em->flush();

            return $this->redirectToRoute('container_index');
        }

        return $this->render('Platform/Container/new.html.twig', [
            'container' => $container,
            'form'  => $form->createView(),
        ]);
    }

    /**
     * Displays a form to edit an existing RealPropertyType entity
     *
     * @Route("/{id}/edit", name="image_edit")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param Image $image
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function editAction(Request $request, Image $image)
    {
        $deleteForm = $this->createDeleteForm($image);

        $form = $this->createForm(ImageType::class, $image);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            /**
             * Set date of change
             */
            $image->setDateOfChange(new \DateTime('NOW'));

            $em->persist($image);
            $em->flush();

            return $this->redirectToRoute('image_index');
        }

        return $this->render('Platform/Image/edit.html.twig', [
            'image' => $image,
            'form' => $form->createView(),
            'delete_form' => $deleteForm->createView()
        ]);
    }

    /**
     * Deletes a RealPropertyType entity
     *
     * @Route("/{id}", name="image_delete")
     * @Method("DELETE")
     * @param Request $request
     * @param Image $image
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, Image $image)
    {
        $form = $this->createDeleteForm($image);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();
        }

        return $this->redirectToRoute('image_index');
    }

    /**
     * Creates a form to delete a RealPropertyType entity
     *
     * @param Image $image
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(Image $image)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('image_delete', [
                'id' => $image->getId()]))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
