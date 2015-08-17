<?php

namespace Uni\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uni\AdminBundle\Entity\FrontpagePhoto;
use Uni\AdminBundle\Form\FrontpagePhotoType;

/**
 * FrontpagePhoto controller.
 *
 */
class FrontpagePhotoController extends Controller
{

    /**
     * Lists all FrontpagePhoto entities.
     *
     */
    public function indexAction(Request $request)
    {
        $sort = $request->query->get('sort');
        $direction = $request->query->get('direction');
        $em = $this->getDoctrine()->getManager();
        if($sort) $entities = $em->getRepository('UniAdminBundle:FrontpagePhoto')->findBy(array(), array($sort => $direction));
        else $entities = $em->getRepository('UniAdminBundle:FrontpagePhoto')->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->getInt('page', 1), 10);

        return $this->render('UniAdminBundle:FrontpagePhoto:index.html.twig', array(
            'pagination' => $pagination,
            'direction'  => $direction,
            'sort'       => $sort,
        ));
    }
    /**
     * Creates a new FrontpagePhoto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FrontpagePhoto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'success', 'FrontpagePhoto has been created.' );    
            return $this->redirect($this->generateUrl('frontpagephoto'));
        }

        return $this->render('UniAdminBundle:FrontpagePhoto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FrontpagePhoto entity.
     *
     * @param FrontpagePhoto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FrontpagePhoto $entity)
    {
        $form = $this->createForm(new FrontpagePhotoType(), $entity, array(
            'action' => $this->generateUrl('frontpagephoto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'create', 'attr' => array('icon' => 'save' )));

        return $form;
    }

    /**
     * Displays a form to create a new FrontpagePhoto entity.
     *
     */
    public function newAction()
    {
        $entity = new FrontpagePhoto();
        $form   = $this->createCreateForm($entity);

        return $this->render('UniAdminBundle:FrontpagePhoto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FrontpagePhoto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UniAdminBundle:FrontpagePhoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('The FrontpagePhoto cannot be found.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UniAdminBundle:FrontpagePhoto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FrontpagePhoto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UniAdminBundle:FrontpagePhoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('The FrontpagePhoto cannot be found.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('UniAdminBundle:FrontpagePhoto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FrontpagePhoto entity.
    *
    * @param FrontpagePhoto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FrontpagePhoto $entity)
    {
        $form = $this->createForm(new FrontpagePhotoType(), $entity, array(
            'action' => $this->generateUrl('frontpagephoto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('actions', 'form_actions', [
            'buttons' => [
                'submit' => ['type' => 'submit', 'options' => ['label' => 'save', 'attr' => array('icon' => 'save', 'class' => 'btn-primary')]],
            ]
        ]);

        return $form;
    }
    /**
     * Edits an existing FrontpagePhoto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UniAdminBundle:FrontpagePhoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('The FrontpagePhoto cannot be found.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'success', 'FrontpagePhoto has been updated.' );
            return $this->redirect($this->generateUrl('frontpagephoto'));
        }

        return $this->render('UniAdminBundle:FrontpagePhoto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }
    /**
     * Deletes a FrontpagePhoto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $deleteForm = $this->createDeleteForm($id);
        $deleteForm->handleRequest($request);

        if ($deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UniAdminBundle:FrontpagePhoto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('The FrontpagePhoto cannot be found.');
            }

            $em->remove($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'danger', 'FrontpagePhoto has been deleted.' );
        }

        return $this->redirect($this->generateUrl('frontpagephoto'));
    }

    /**
     * Creates a form to delete a FrontpagePhoto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('frontpagephoto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('actions', 'form_actions', [
                'buttons' => [
                    'cancel' => ['type' => 'button', 'options' => ['label' => 'cancel', 'attr' => array('icon' => 'remove', 'class' => 'btn-default', 'data-dismiss' => 'modal')]],
                    'delete' => ['type' => 'submit', 'options' => ['label' => 'confirm', 'attr' => array('icon' => 'trash-o', 'class' => 'btn-danger')]],
                ]
            ])
            ->getForm()
        ;
    }

}
