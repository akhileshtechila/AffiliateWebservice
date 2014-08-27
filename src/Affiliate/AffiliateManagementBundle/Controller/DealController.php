<?php

namespace Affiliate\AffiliateManagementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Affiliate\AffiliateManagementBundle\Entity\Deal;
use Affiliate\AffiliateManagementBundle\Form\DealType;

/**
 * Deal controller.
 *
 */
class DealController extends Controller
{

    /**
     * Lists all Deal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:Deal')->findAll();

        return $this->render('AffiliateAffiliateManagementBundle:Deal:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Deal entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Deal();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('deal_show', array('id' => $entity->getId())));
        }

        return $this->render('AffiliateAffiliateManagementBundle:Deal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Deal entity.
     *
     * @param Deal $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Deal $entity)
    {
        $form = $this->createForm(new DealType(), $entity, array(
            'action' => $this->generateUrl('deal_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Deal entity.
     *
     */
    public function newAction()
    {
        $entity = new Deal();
        $form   = $this->createCreateForm($entity);

        return $this->render('AffiliateAffiliateManagementBundle:Deal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Deal entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Deal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Deal entity.');
        }

      

        return $this->render('AffiliateAffiliateManagementBundle:Deal:show.html.twig', array(
            'entity'      => $entity,
           
        ));
    }

    /**
     * Displays a form to edit an existing Deal entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Deal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Deal entity.');
        }

        $editForm = $this->createEditForm($entity);
      

        return $this->render('AffiliateAffiliateManagementBundle:Deal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
         
        ));
    }

    /**
    * Creates a form to edit a Deal entity.
    *
    * @param Deal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Deal $entity)
    {
        $form = $this->createForm(new DealType(), $entity, array(
            'action' => $this->generateUrl('deal_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Deal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Deal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Deal entity.');
        }

       
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('deal_edit', array('id' => $id)));
        }

        return $this->render('AffiliateAffiliateManagementBundle:Deal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            
        ));
    }
    /**
     * Deletes a Deal entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {       
            $em = $this->getDoctrine()->getManager();
            if($id !=""){
            $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Deal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Deal entity.');
            }

            $em->remove($entity);
            $em->flush();
            }

        return $this->redirect($this->generateUrl('deal'));
    }

    /**
     * Creates a form to delete a Deal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deal_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }*/
}
