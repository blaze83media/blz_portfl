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
 * @Route("/projectmodal2")
 */
class IndexProjects2Controller extends AbstractController
{
    //method for 'all projects'

    /**
     * @Route("/projectmodal2")
     */
        public function index(ProjectsRepository $projectsRepository): Response
    {
        return $this->render('crud/projects_tt2.html.twig', [
            'projects2' => $projectsRepository->findBy(['Title'=>'Javascript']),
           
        ]);
    }



        //method for showing each project on a modal

    /**
     * @Route("/{id}", name="projectmodal2x", methods={"GET"})
     */
    public function showmodal(Projects $project): Response
    {
        return $this->render('crud/projectmodal2.html.twig', [
            'project2' => $project,
        ]);
    }


}