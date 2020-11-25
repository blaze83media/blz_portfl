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
 * @Route("/projectmodal3")
 */
class IndexProjects3Controller extends AbstractController
{
    //method for 'all projects'

    /**
     * @Route("/projectmodal3")
     */
        public function index(ProjectsRepository $projectsRepository): Response
    {
        return $this->render('crud/projects_tt3.html.twig', [
            'projects3' => $projectsRepository->findBy(['Title'=>'React']),
           
        ]);
    }



        //method for showing each project on a modal

    /**
     * @Route("/{id}", name="projectmodal3x", methods={"GET"})
     */
    public function showmodal(Projects $project): Response
    {
        return $this->render('crud/projectmodal3.html.twig', [
            'project3' => $project,
        ]);
    }


}