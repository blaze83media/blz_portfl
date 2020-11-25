<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Contact;
use App\Controller\Form\PostMsgType;


class FormController extends AbstractController
{
    /**
     * @Route("/", name="contact_form")
     */
    public function submitMsg(Request $request)
    {
        
        $msg = new Contact(); 


        $form = $this->createForm(PostMsgType::class, $msg, [
            'action' => $this->generateUrl('contact_form'),
            'method' => 'POST'

        ]
    );

        $form -> handleRequest($request);
        if ($form -> isSubmitted() && $form -> isValid() )
        {
            //var_dump($msg); die;  //this checksfor errors
            //this saves to the db
            $em = $this->getDoctrine() -> getManager();
            $em -> persist($msg);
            $em -> flush();
        }

        return $this->render('crud/index.html.twig', [
            'form_var' => $form->createView(),
        ]);
    }
}




