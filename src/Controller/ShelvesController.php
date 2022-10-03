<?php

namespace App\Controller;

use App\Entity\Shelves;
use App\Form\ShelvesType;
use App\Repository\ShelvesRepository;
use App\Services\ForbiddenLink;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/shelves")
 */
class ShelvesController extends AbstractController
{
    /**
     * @Route("/", name="app_shelves_index", methods={"GET"})
     */
    public function index(ShelvesRepository $shelvesRepository): Response
    {
        return $this->render('shelves/index.html.twig', [
            'shelves' => $shelvesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_shelves_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ShelvesRepository $shelvesRepository, ForbiddenLink $forbiddenLink): Response
    {
        $shelf = new Shelves();
        $form = $this->createForm(ShelvesType::class, $shelf, ['action' => $this->generateUrl('app_shelves_new')]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $request->files->get('shelves')['img_file'];
            $up_dir = $this->getParameter('uploads_directory');
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $filesystem = new Filesystem();
            $filesystem->copy($file, $up_dir.'/'.$filename);
            $shelf->setFileName($filename);
            $shelvesRepository->add($shelf);

            $this->addFlash(
               'info',
               'Successfully Added'
            );

            return $this->redirectToRoute('app_shelves_index', [], Response::HTTP_SEE_OTHER);
        }
        $forbiddenLinkResult = $forbiddenLink->getContents('www.xxx.coms');
        // print_r($form->createView());
        return $this->render('shelves/new.html.twig', [
            'shelf' => $shelf,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="app_shelves_show", methods={"GET"})
     */
    public function show(Shelves $shelf): Response
    {
        return $this->render('shelves/show.html.twig', [
            'shelf' => $shelf,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_shelves_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Shelves $shelf, ShelvesRepository $shelvesRepository): Response
    {
        $form = $this->createForm(ShelvesType::class, $shelf);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $request->files->get('shelves')['img_file'];
            $up_dir = $this->getParameter('uploads_directory');
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $filesystem = new Filesystem();
            $filesystem->copy($file, $up_dir.'/'.$filename);
            $shelf->setFileName($filename);
            $shelvesRepository->add($shelf);
            $this->addFlash(
               'info',
               'Updated Successfully'
            );

            return $this->redirectToRoute('app_shelves_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('shelves/edit.html.twig', [
            'shelf' => $shelf,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_shelves_delete", methods={"POST"})
     */
    public function delete(Request $request, Shelves $shelf, ShelvesRepository $shelvesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$shelf->getId(), $request->request->get('_token'))) {
            $shelvesRepository->remove($shelf);
        }

        return $this->redirectToRoute('app_shelves_index', [], Response::HTTP_SEE_OTHER);
    }
}
