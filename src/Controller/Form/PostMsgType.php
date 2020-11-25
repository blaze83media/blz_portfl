<?php

namespace App\Controller\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class PostMsgType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
        ->add('senderName', TextType::class, ['attr'=> ['placeholder'=>'Enter your Name', 'class'=>'form-control'] ])
        ->add('senderEmail', EmailType::class, ['attr'=> ['placeholder'=>'Enter your Email', 'class'=>'form-control'] ])
        ->add('subject', TextType::class, ['attr'=> ['placeholder'=>'Enter Subject', 'class'=>'form-control'] ])
        ->add('message', TextareaType::class, ['attr'=> ['placeholder'=>'Enter your Message', 'class'=>'form-control'] ])
        ->add('save', SubmitType::class, ['attr'=> ['class'=>'btn btn-primary'] ]) 
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }

}