<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\TopImageRepository;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\TopImage;
use App\Controller\Form\AdminTopImageType;


class IndexTopImageController extends AbstractController
{

     /**
     * @Route("/admintop", name="admin_topimage")
     */
    public function show(TopImageRepository $TopImageRepository)
    {
        $gtdata = $TopImageRepository->find(1);

        if (!$gtdata) {
            throw $this->createNotFoundException(
                'No such content in #'
            );
        }

        return $this->render('crud/topimage.html.twig', [
            'controller_name' => 'IndexTopImageController',
            'caption1' => $gtdata->getCaption1(),
            'caption2' => $gtdata->getCaption2(),
            'caption3' => $gtdata->getCaption3(),
            'imageNameCaption' => $gtdata->getImageName(),
        ]);
        //return new Response('Read: '.$gtdata->getCaption3());
    }



  
    public function showmodalimage(TopImageRepository $TopImageRepository)
    {
        $gtdata = $TopImageRepository->find(1);

        if (!$gtdata) {
            throw $this->createNotFoundException(
                'No such content in #'
            );
        }

        return $this->render('crud/welcome_modal.html.twig', [
            'controller_name' => 'IndexTopImageController',
            'imageNameCaption' => $gtdata->getImageName(),
        ]);
        //return new Response('Read: '.$gtdata->getCaption3());
    }




}