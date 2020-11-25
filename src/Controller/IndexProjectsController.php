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
 * @Route("/projectmodal")
 */
class IndexProjectsController extends AbstractController
{
    //method for 'all projects'

    /**
     * @Route("/projectmodal")
     */
        public function index(ProjectsRepository $projectsRepository): Response
    {
        return $this->render('crud/projects.html.twig', [
            'projects' => $projectsRepository->findAll(),
           
        ]);
    }


    //method for showing each project on a modal

    /**
     * @Route("/{id}", name="projectmodal", methods={"GET"})
     */
    public function showmodal(Projects $project): Response
    {
        return $this->render('crud/projectmodal.html.twig', [
            'project' => $project,
        ]);
    }



}