<?php

namespace Affiliate\AffiliateManagementBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Affiliate\AffiliateManagementBundle\Entity\Userinfo;
use Affiliate\AffiliateManagementBundle\Form\UserinfoType;

/**
 * Userinfo controller.
 *
 */
class UserinfoController extends Controller
{

    /**
     * Lists all Userinfo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:Userinfo')->findAll();

        return $this->render('AffiliateAffiliateManagementBundle:Userinfo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Userinfo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Userinfo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('userinfo_show', array('id' => $entity->getId())));
        }

        return $this->render('AffiliateAffiliateManagementBundle:Userinfo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Userinfo entity.
     *
     * @param Userinfo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Userinfo $entity)
    {
        $form = $this->createForm(new UserinfoType(), $entity, array(
            'action' => $this->generateUrl('userinfo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Userinfo entity.
     *
     */
    public function newAction()
    {
        $entity = new Userinfo();
        $form   = $this->createCreateForm($entity);

        return $this->render('AffiliateAffiliateManagementBundle:Userinfo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Userinfo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Userinfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Userinfo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AffiliateAffiliateManagementBundle:Userinfo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Userinfo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Userinfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Userinfo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AffiliateAffiliateManagementBundle:Userinfo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Userinfo entity.
    *
    * @param Userinfo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Userinfo $entity)
    {
        $form = $this->createForm(new UserinfoType(), $entity, array(
            'action' => $this->generateUrl('userinfo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Userinfo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Userinfo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Userinfo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('userinfo_edit', array('id' => $id)));
        }

        return $this->render('AffiliateAffiliateManagementBundle:Userinfo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Userinfo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AffiliateAffiliateManagementBundle:Userinfo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Userinfo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('userinfo'));
    }

    /**
     * Creates a form to delete a Userinfo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userinfo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
