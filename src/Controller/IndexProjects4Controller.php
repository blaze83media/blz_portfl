<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Form\ProjectsType;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/projectmodal4")
 */
class IndexProjects4Controller extends AbstractController
{
    //method for 'all projects'

    /**
     * @Route("/projectmodal4")
     */
        public function index(ProjectsRepository $projectsRepository): Response
    {
        return $this->render('crud/projects_tt4.html.twig', [
            'projects4' => $projectsRepository->findBy(['Title'=>'Vue']),
           
        ]);
    }



        //method for showing each project on a modal

    /**
     * @Route("/{id}", name="projectmodal4x", methods={"GET"})
     */
    public function showmodal(Projects $project): Response
    {
        return $this->render('crud/projectmodal4.html.twig', [
            'project4' => $project,
        ]);
    }


}