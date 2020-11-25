<?php

namespace App\Controller\AdminForms;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\TopImageRepository;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\TopImage;
use App\Controller\Form\AdminTopImageType;


class TopImage2Controller extends AbstractController
{

     /**
     * @Route("/admin/topimage", name="admin_showX")
     */
    public function show(TopImageRepository $TopImageRepository)
    {
        $gtdata = $TopImageRepository->find(1);

        if (!$gtdata) {
            throw $this->createNotFoundException(
                'No such content in #'
            );
        }

        return $this->render('admin/admin_topimage.html.twig', [
            'controller_name' => 'TopImageController',
            'caption1' => $gtdata->getCaption1(),
            'caption2' => $gtdata->getCaption2(),
            'caption3' => $gtdata->getCaption3(),
            'imageNameCaption' => $gtdata->getImageName(),
        ]);
        //return new Response('Read: '.$gtdata->getCaption3());
    }






    /**
     * @Route("/admin/form1",  name="topimage_form")
     */
    public function submitMsg(Request $request)
    {
        
        $msg = new TopImage(); 


        $form = $this->createForm(AdminTopImageType::class, $msg, [
            'action' => $this->generateUrl('topimage_form'),
            'method' => 'POST'

        ]
    );

        $form -> handleRequest($request);
        if ($form -> isSubmitted() && $form -> isValid() )
        {
            $file = $msg -> getImageName();
            $newfileName = md5(uniqid()).'.'.$file -> guessExtension();
            //open sevice.yaml & add this code under parameter, upload_directory: '%kernel.project_dir%/public/uploads'
            //open Entity\TopImage.php and delete the 'string' in getImage() and setImage()
            $file -> move($this->getParameter('upload_directory'), $newfileName);
            $msg -> setImageName($newfileName);

            //return new Response("Top image was successfully uploaded.");
            //var_dump($msg); die;  //this checksfor errors
            //this saves to the db
            $em = $this->getDoctrine() -> getManager();
            $em -> persist($msg);
            $em -> flush();
        }

        return $this->render('admin/admin_topimageform1.html.twig', [
          'formQ' => $form->createView(),
        ]);
        //return new Response("Top image was successfully uploaded.");
    }


    /**
     * @Route("/admin", name="admin_main")
     */
    public function showmain(TopImageRepository $TopImageRepository)
    {
        $gtdata = $TopImageRepository->find(2);

        if (!$gtdata) {
            throw $this->createNotFoundException(
                'No such content in #'
            );
        }

        return $this->render('admin/admin_contentmgt.html.twig', [
            'controller_name' => 'TopImageController',
          
        ]);
        //return new Response('Read: '.$gtdata->getCaption3());
    }


}




