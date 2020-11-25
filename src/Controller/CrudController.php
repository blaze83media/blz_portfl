<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Crud;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Repository\CrudRepository;

use Doctrine\ORM\EntityManagerInterface;

class CrudController extends AbstractController
{
    /**
     * @Route("/test1", name="crud")
     */
    public function index(): Response
    {
        $kb = ['Timer way', 'fdfff', 're33'];
        $fname = 'Aghogho';
        $lname = 'Obuks';

        return $this->render('crud/index.html.twig', [
            'controller_name' => 'CrudController',

            'ans' => $kb,
            'fnm' => $fname,
            'lnm' => $lname,
        ]);
    }



     /**
     * @Route("/test2", name="testL")
     */
    public function test()
    {
        return new Response('This is mine!');
    }




}
