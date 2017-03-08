<?php

namespace Uni\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uni\AdminBundle\Entity\ProjectPhoto;
use Uni\AdminBundle\Form\ProjectPhotoType;

/**
 * ProjectPhoto controller.
 *
 */
class ProjectPhotoController extends Controller
{

    /**
     * Lists all ProjectPhoto entities.
     *
     */
    public function indexAction(Request $request)
    {
        $sort = $request->query->get('sort');
        $direction = $request->query->get('direction');
        $em = $this->getDoctrine()->getManager();
        if($sort) $entities = $em->getRepository('UniAdminBundle:ProjectPhoto')->findBy(array(), array($sort => $direction));
        else $entities = $em->getRepository('UniAdminBundle:ProjectPhoto')->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->getInt('page', 1), 10);

        return $this->render('UniAdminBundle:ProjectPhoto:index.html.twig', array(
            'pagination' => $pagination,
            'direction'  => $direction,
            'sort'       => $sort,
        ));
    }
    /**
     * Creates a new ProjectPhoto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ProjectPhoto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'success', 'ProjectPhoto has been created.' );    
            return $this->redirect($this->generateUrl('projectphoto'));
        }

        return $this->render('UniAdminBundle:ProjectPhoto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ProjectPhoto entity.
     *
     * @param ProjectPhoto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ProjectPhoto $entity)
    {
        $form = $this->createForm(new ProjectPhotoType(), $entity, array(
            'action' => $this->generateUrl('projectphoto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'create', 'attr' => array('icon' => 'save')));

        return $form;
    }

    /**
     * Displays a form to create a new ProjectPhoto entity.
     *
     */
    public function newAction()
    {
        $entity = new ProjectPhoto();
        $form   = $this->createCreateForm($entity);

        return $this->render('UniAdminBundle:ProjectPhoto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ProjectPhoto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UniAdminBundle:ProjectPhoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('The ProjectPhoto cannot be found.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UniAdminBundle:ProjectPhoto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ProjectPhoto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UniAdminBundle:ProjectPhoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('The ProjectPhoto cannot be found.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('UniAdminBundle:ProjectPhoto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ProjectPhoto entity.
    *
    * @param ProjectPhoto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ProjectPhoto $entity)
    {
        $form = $this->createForm(new ProjectPhotoType(), $entity, array(
            'action' => $this->generateUrl('projectphoto_update', array('id' => $entity->getId())),
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
     * Edits an existing ProjectPhoto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UniAdminBundle:ProjectPhoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('The ProjectPhoto cannot be found.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'success', 'ProjectPhoto has been updated.' );
            return $this->redirect($this->generateUrl('projectphoto'));
        }

        return $this->render('UniAdminBundle:ProjectPhoto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }
    /**
     * Deletes a ProjectPhoto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $deleteForm = $this->createDeleteForm($id);
        $deleteForm->handleRequest($request);

        if ($deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UniAdminBundle:ProjectPhoto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('The ProjectPhoto cannot be found.');
            }

            $em->remove($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'danger', 'ProjectPhoto has been deleted.' );
        }

        return $this->redirect($this->generateUrl('projectphoto'));
    }

    /**
     * Creates a form to delete a ProjectPhoto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projectphoto_delete', array('id' => $id)))
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
