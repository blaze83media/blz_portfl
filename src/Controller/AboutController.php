<?php

namespace App\Controller;

use App\Entity\About;
use App\Form\AboutType;
use App\Repository\AboutRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/admin/about")
     */
class AboutController extends AbstractController
{
    /**
     * @Route("/", name="about_index", methods={"GET"})
     */
    public function index(AboutRepository $aboutRepository): Response
    {
        return $this->render('admin_about/about2.html.twig', [
            'abouts' => $aboutRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="about_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $about = new About();
        $form = $this->createForm(AboutType::class, $about);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $about -> getImageName();
            $newfileName = md5(uniqid()).'.'.$file -> guessExtension();
            //open service.yaml & add this code under parameter, upload_directory: '%kernel.project_dir%/public/uploads'
            //open Entity\About.php and delete the 'string' in getImage() and setImage()
            $file -> move($this->getParameter('upload_directory'), $newfileName);
            $about -> setImageName($newfileName);


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($about);
            $entityManager->flush();

            return $this->redirectToRoute('about_index');
        }

        return $this->render('admin_about/new.html.twig', [
            'about' => $about,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="about_show", methods={"GET"})
     */
    public function show(About $about): Response
    {
        return $this->render('admin_about/show.html.twig', [
            'about' => $about,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="about_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, About $about): Response
    {   
        $form = $this->createForm(AboutType::class, $about);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $about -> getImageName();
            $newfileName = md5(uniqid()).'.'.$file -> guessExtension();
            //open service.yaml & add this code under parameter, upload_directory: '%kernel.project_dir%/public/uploads'
            $file -> move($this->getParameter('upload_directory'), $newfileName);
            $about -> setImageName($newfileName);


            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('about_index');
        }

        return $this->render('admin_about/edit.html.twig', [
            'about' => $about,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="about_delete", methods={"DELETE"})
     */
    public function delete(Request $request, About $about): Response
    {
        if ($this->isCsrfTokenValid('delete'.$about->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($about);
            $entityManager->flush();
        }

        return $this->redirectToRoute('about_index');
    }
}
