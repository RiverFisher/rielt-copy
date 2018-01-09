<?php

namespace App\Controller\RealProperty;

use App\Entity\RealProperty\RealPropertyType;
use App\Form\RealProperty\RealPropertyTypeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RealPropertyTypeController
 *
 * @Route("real_property")
 * @package App\Controller\RealProperty
 */
class RealPropertyTypeController extends Controller
{
    /**
     * @Route("/type", name="real_property_type_index")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository(RealPropertyType::class)->findAll();

        return $this->render('RealProperty/RealPropertyType/index.html.twig', [
            'types' => $types
        ]);
    }

    /**
     * Creates a new RealPropertyType entity
     *
     * @Route("/type/new", name="real_property_type_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function newAction(Request $request) {
        $type = new RealPropertyType();
        $form = $this->createForm(RealPropertyTypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($type);
            $em->flush();

            return $this->redirectToRoute('real_property_type_index');
        }

        return $this->render('RealProperty/RealPropertyType/new.html.twig', [
            'type'  => $type,
            'form'  => $form->createView(),
        ]);
    }

    /**
     * Displays a form to edit an existing RealPropertyType entity
     *
     * @Route("/type/{id}/edit", name="real_property_type_edit")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param RealPropertyType $type
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function editAction(Request $request, RealPropertyType $type)
    {
        $deleteForm = $this->createDeleteForm($type);

        $form = $this->createForm(RealPropertyTypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            /**
             * Set date of change
             */
            $type->setDateOfChange(new \DateTime('NOW'));

            $em->persist($type);
            $em->flush();

            return $this->redirectToRoute('real_property_type_index');
        }

        return $this->render('RealProperty/RealPropertyType/edit.html.twig', [
            'type' => $type,
            'form' => $form->createView(),
            'delete_form' => $deleteForm->createView()
        ]);
    }

    /**
     * Deletes a RealPropertyType entity
     *
     * @Route("/type/{id}", name="real_property_type_delete")
     * @Method("DELETE")
     * @param Request $request
     * @param RealPropertyType $type
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, RealPropertyType $type)
    {
        $form = $this->createDeleteForm($type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($type);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a RealPropertyType entity
     *
     * @param RealPropertyType $type
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(RealPropertyType $type)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', [
                'id' => $type->getId()]))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
