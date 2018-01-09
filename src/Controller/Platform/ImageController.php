<?php

namespace App\Controller\Platform;

use App\Entity\Platform\Image;
use App\Form\Platform\ImageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RealPropertyTypeController
 *
 * @Route("image")
 * @package App\Controller\RealProperty
 */
class ImageController extends Controller
{
    /**
     * @Route("/", name="image_index")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $images = $em->getRepository(Image::class)->findAll();

        return $this->render('Platform/Image/index.html.twig', [
            'images' => $images
        ]);
    }

    /**
     * Creates a new RealPropertyType entity
     *
     * @Route("/new", name="image_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function newAction(Request $request) {
        $image = new Image();
        $form = $this->createForm(ImageType::class, $image);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();

            return $this->redirectToRoute('image_index');
        }

        return $this->render('Platform/Image/new.html.twig', [
            'image' => $image,
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
