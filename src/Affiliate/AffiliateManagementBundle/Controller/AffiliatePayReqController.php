<?php

namespace Affiliate\AffiliateManagementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq;
use Affiliate\AffiliateManagementBundle\Form\AffiliatePayReqType;

/**
 * AffiliatePayReq controller.
 *
 */
class AffiliatePayReqController extends Controller
{

    /**
     * Lists all AffiliatePayReq entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliatePayReq')->findAll();

        return $this->render('AffiliateAffiliateManagementBundle:AffiliatePayReq:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AffiliatePayReq entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AffiliatePayReq();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affiliatepayreq_show', array('id' => $entity->getId())));
        }

        return $this->render('AffiliateAffiliateManagementBundle:AffiliatePayReq:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a AffiliatePayReq entity.
     *
     * @param AffiliatePayReq $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AffiliatePayReq $entity)
    {
        $form = $this->createForm(new AffiliatePayReqType(), $entity, array(
            'action' => $this->generateUrl('affiliatepayreq_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AffiliatePayReq entity.
     *
     */
    public function newAction()
    {
        $entity = new AffiliatePayReq();
        $form   = $this->createCreateForm($entity);

        return $this->render('AffiliateAffiliateManagementBundle:AffiliatePayReq:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AffiliatePayReq entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliatePayReq')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffiliatePayReq entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AffiliateAffiliateManagementBundle:AffiliatePayReq:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing AffiliatePayReq entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliatePayReq')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffiliatePayReq entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AffiliateAffiliateManagementBundle:AffiliatePayReq:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AffiliatePayReq entity.
    *
    * @param AffiliatePayReq $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AffiliatePayReq $entity)
    {
        $form = $this->createForm(new AffiliatePayReqType(), $entity, array(
            'action' => $this->generateUrl('affiliatepayreq_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AffiliatePayReq entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliatePayReq')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffiliatePayReq entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('affiliatepayreq_edit', array('id' => $id)));
        }

        return $this->render('AffiliateAffiliateManagementBundle:AffiliatePayReq:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AffiliatePayReq entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliatePayReq')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AffiliatePayReq entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('affiliatepayreq'));
    }

    /**
     * Creates a form to delete a AffiliatePayReq entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('affiliatepayreq_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
