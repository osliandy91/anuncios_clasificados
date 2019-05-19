<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Anuncio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Anuncio controller.
 *
 */
class AnuncioController extends Controller
{
    /**
     * Lists all anuncio entities.
     *
     */
    public function indexAction()
    {


        return $this->render('@App/Default/index.html.twig');
    }

    public function listAction($category)
    {
        $repository = $this->getDoctrine()
            ->getRepository(Anuncio::class);


        $query = $repository->createQueryBuilder('p')
            ->where('p.category = :category')
            ->setParameter('category', $category)
            ->getQuery();

        $anuncios = $query->getResult();


        return $this->render('@App/anuncio/list.html.twig', array('anuncios' => $anuncios));
    }





    /**
     * Creates a new anuncio entity.
     *
     */
    public function newAction(Request $request)
    {
        $anuncio = new Anuncio();
        $form = $this->createForm('AppBundle\Form\AnuncioType', $anuncio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anuncio);
            $em->flush();

            return $this->redirectToRoute('anuncio_show', array('category' => $anuncio->getId()));
        }

        return $this->render('@App/anuncio/new.html.twig', array(
            'anuncio' => $anuncio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anuncio entity.
     *
     */
    public function showAction(Anuncio $anuncio)
    {
        $deleteForm = $this->createDeleteForm($anuncio);

        return $this->render('@App/anuncio/show.html.twig', array(
            'anuncio' => $anuncio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anuncio entity.
     *
     */
    public function editAction(Request $request, Anuncio $anuncio)
    {
        $deleteForm = $this->createDeleteForm($anuncio);
        $editForm = $this->createForm('AppBundle\Form\AnuncioType', $anuncio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('anuncio_edit', array('id' => $anuncio->getId()));
        }

        return $this->render('anuncio/edit.html.twig', array(
            'anuncio' => $anuncio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a anuncio entity.
     *
     */
    public function deleteAction(Request $request, Anuncio $anuncio)
    {
        $form = $this->createDeleteForm($anuncio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($anuncio);
            $em->flush();
        }

        return $this->redirectToRoute('anuncio_index');
    }

    /**
     * Creates a form to delete a anuncio entity.
     *
     * @param Anuncio $anuncio The anuncio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Anuncio $anuncio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anuncio_delete', array('id' => $anuncio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
