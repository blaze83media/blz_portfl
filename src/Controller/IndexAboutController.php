<?php

namespace App\Controller;

use App\Entity\About;
use App\Form\AboutType;
use App\Repository\AboutRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IndexAboutController extends AbstractController
{

     /**
     * @Route("/about", name="admin_about11", methods={"GET"})
     */
    public function show(AboutRepository $AboutRepository)
    {
        $getdata = $AboutRepository->find(1);

        if (!$getdata) {
            throw $this->createNotFoundException(
                'No such content in #'
            );
        }

        return $this->render('crud/about.html.twig', [
            'controller_name' => 'IndexAboutController',
            'title1' => $getdata->getTitle1(),
            'body1' => $getdata->getBody1(),
            'title2' => $getdata->getTitle2(),
            'body2' => $getdata->getBody2(),
            'title3' => $getdata->getTitle3(),
            'body3' => $getdata->getBody3(),
            'imageName' => $getdata->getImageName(),
            'imageTitle' => $getdata->getImageTitle(),
            'imageBody' => $getdata->getImageBody(),
        ]);
            
    }
}
