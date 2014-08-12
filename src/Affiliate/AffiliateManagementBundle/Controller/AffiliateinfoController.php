<?php

namespace Affiliate\AffiliateManagementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Affiliate\AffiliateManagementBundle\Entity\Affiliateinfo;
use Affiliate\AffiliateManagementBundle\Form\AffiliateinfoType;

/**
 * Affiliateinfo controller.
 *
 */
class AffiliateinfoController extends Controller
{

    /**
     * Lists all Affiliateinfo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:Affiliateinfo')->findAll();

        return $this->render('AffiliateAffiliateManagementBundle:Affiliateinfo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Affiliateinfo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Affiliateinfo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affiliateinfo_show', array('id' => $entity->getId())));
        }

        return $this->render('AffiliateAffiliateManagementBundle:Affiliateinfo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Affiliateinfo entity.
     *
     * @param Affiliateinfo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Affiliateinfo $entity)
    {
        $form = $this->createForm(new AffiliateinfoType(), $entity, array(
            'action' => $this->generateUrl('affiliateinfo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Affiliateinfo entity.
     *
     */
    public function newAction()
    {
        $entity = new Affiliateinfo();
        $form   = $this->createCreateForm($entity);

        return $this->render('AffiliateAffiliateManagementBundle:Affiliateinfo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Affiliateinfo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Affiliateinfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affiliateinfo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AffiliateAffiliateManagementBundle:Affiliateinfo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Affiliateinfo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Affiliateinfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affiliateinfo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AffiliateAffiliateManagementBundle:Affiliateinfo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Affiliateinfo entity.
    *
    * @param Affiliateinfo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Affiliateinfo $entity)
    {
        $form = $this->createForm(new AffiliateinfoType(), $entity, array(
            'action' => $this->generateUrl('affiliateinfo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Affiliateinfo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Affiliateinfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affiliateinfo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('affiliateinfo_edit', array('id' => $id)));
        }

        return $this->render('AffiliateAffiliateManagementBundle:Affiliateinfo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Affiliateinfo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Affiliateinfo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Affiliateinfo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('affiliateinfo'));
    }

    /**
     * Creates a form to delete a Affiliateinfo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('affiliateinfo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
