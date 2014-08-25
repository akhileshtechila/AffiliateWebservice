<?php

namespace Affiliate\AffiliateManagementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Affiliate\AffiliateManagementBundle\Entity\Membersinfo;
use Affiliate\AffiliateManagementBundle\Form\MembersinfoType;

/**
 * Membersinfo controller.
 *
 */
class MembersinfoController extends Controller
{

    /**
     * Lists all Membersinfo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:Membersinfo')->findAll();

        return $this->render('AffiliateAffiliateManagementBundle:Membersinfo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Membersinfo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Membersinfo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('membersinfo_show', array('id' => $entity->getId())));
        }

        return $this->render('AffiliateAffiliateManagementBundle:Membersinfo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Membersinfo entity.
     *
     * @param Membersinfo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Membersinfo $entity)
    {
        $form = $this->createForm(new MembersinfoType(), $entity, array(
            'action' => $this->generateUrl('membersinfo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Membersinfo entity.
     *
     */
    public function newAction()
    {
        $entity = new Membersinfo();
        $form   = $this->createCreateForm($entity);

        return $this->render('AffiliateAffiliateManagementBundle:Membersinfo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Membersinfo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Membersinfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Membersinfo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AffiliateAffiliateManagementBundle:Membersinfo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Membersinfo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Membersinfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Membersinfo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AffiliateAffiliateManagementBundle:Membersinfo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Membersinfo entity.
    *
    * @param Membersinfo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Membersinfo $entity)
    {
        $form = $this->createForm(new MembersinfoType(), $entity, array(
            'action' => $this->generateUrl('membersinfo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Membersinfo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Membersinfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Membersinfo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('membersinfo_edit', array('id' => $id)));
        }

        return $this->render('AffiliateAffiliateManagementBundle:Membersinfo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Membersinfo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Membersinfo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Membersinfo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('membersinfo'));
    }

    /**
     * Creates a form to delete a Membersinfo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('membersinfo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
