<?php

namespace Affiliate\AffiliateManagementBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Affiliate\AffiliateManagementBundle\Entity\AffiliateDeal;
use Affiliate\AffiliateManagementBundle\Form\AffiliateDealType;

/**
 * AffiliateDeal controller.
 *
 */
class AffiliateDealController extends Controller
{

    /**
     * Lists all AffiliateDeal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliateDeal')->findAll();

        return $this->render('AffiliateAffiliateManagementBundle:AffiliateDeal:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AffiliateDeal entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AffiliateDeal();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affiliatedeal_show', array('id' => $entity->getId())));
        }

        return $this->render('AffiliateAffiliateManagementBundle:AffiliateDeal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a AffiliateDeal entity.
     *
     * @param AffiliateDeal $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AffiliateDeal $entity)
    {
        $form = $this->createForm(new AffiliateDealType(), $entity, array(
            'action' => $this->generateUrl('affiliatedeal_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AffiliateDeal entity.
     *
     */
    public function newAction()
    {
        $entity = new AffiliateDeal();
        $form   = $this->createCreateForm($entity);

        return $this->render('AffiliateAffiliateManagementBundle:AffiliateDeal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AffiliateDeal entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliateDeal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffiliateDeal entity.');
        }

        return $this->render('AffiliateAffiliateManagementBundle:AffiliateDeal:show.html.twig', array(
            'entity'      => $entity,
          
        ));
    }

    /**
     * Displays a form to edit an existing AffiliateDeal entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliateDeal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffiliateDeal entity.');
        }

        $editForm = $this->createEditForm($entity);
       

        return $this->render('AffiliateAffiliateManagementBundle:AffiliateDeal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
           
        ));
    }

    /**
    * Creates a form to edit a AffiliateDeal entity.
    *
    * @param AffiliateDeal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AffiliateDeal $entity)
    {
        $form = $this->createForm(new AffiliateDealType(), $entity, array(
            'action' => $this->generateUrl('affiliatedeal_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AffiliateDeal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliateDeal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffiliateDeal entity.');
        }
      
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('affiliatedeal_edit', array('id' => $id)));
        }

        return $this->render('AffiliateAffiliateManagementBundle:AffiliateDeal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
           
        ));
    }
    /**
     * Deletes a AffiliateDeal entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {     

       if($id != ""){
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliateDeal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AffiliateDeal entity.');
            }

            $em->remove($entity);
            $em->flush();
       }

        return $this->redirect($this->generateUrl('affiliatedeal'));
    }

    /**
     * Creates a form to delete a AffiliateDeal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
   /* private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('affiliatedeal_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }*/
}
