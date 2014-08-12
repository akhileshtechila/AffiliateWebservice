<?php

namespace Affiliate\AffiliateManagementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Affiliate\AffiliateManagementBundle\Entity\AdminPayReq;
use Affiliate\AffiliateManagementBundle\Form\AdminPayReqType;

/**
 * AdminPayReq controller.
 *
 */
class AdminPayReqController extends Controller
{

    /**
     * Lists all AdminPayReq entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:AdminPayReq')->findAll();

        return $this->render('AffiliateAffiliateManagementBundle:AdminPayReq:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AdminPayReq entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AdminPayReq();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminpayreq_show', array('id' => $entity->getId())));
        }

        return $this->render('AffiliateAffiliateManagementBundle:AdminPayReq:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a AdminPayReq entity.
     *
     * @param AdminPayReq $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AdminPayReq $entity)
    {
        $form = $this->createForm(new AdminPayReqType(), $entity, array(
            'action' => $this->generateUrl('adminpayreq_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AdminPayReq entity.
     *
     */
    public function newAction()
    {
        $entity = new AdminPayReq();
        $form   = $this->createCreateForm($entity);

        return $this->render('AffiliateAffiliateManagementBundle:AdminPayReq:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AdminPayReq entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AdminPayReq')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AdminPayReq entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AffiliateAffiliateManagementBundle:AdminPayReq:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing AdminPayReq entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AdminPayReq')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AdminPayReq entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AffiliateAffiliateManagementBundle:AdminPayReq:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AdminPayReq entity.
    *
    * @param AdminPayReq $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AdminPayReq $entity)
    {
        $form = $this->createForm(new AdminPayReqType(), $entity, array(
            'action' => $this->generateUrl('adminpayreq_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AdminPayReq entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AdminPayReq')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AdminPayReq entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('adminpayreq_edit', array('id' => $id)));
        }

        return $this->render('AffiliateAffiliateManagementBundle:AdminPayReq:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AdminPayReq entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AdminPayReq')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AdminPayReq entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminpayreq'));
    }

    /**
     * Creates a form to delete a AdminPayReq entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminpayreq_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
