<?php

namespace App\Controller\Form;

use App\Entity\TopImage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\FileType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AdminTopImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
        ->add('caption_1', TextType::class, ['attr'=> ['placeholder'=>'Caption 1 ', 'class'=>'form-control'] ])
        ->add('caption_2', TextType::class, ['attr'=> ['placeholder'=>'Caption 2', 'class'=>'form-control'] ])
        ->add('caption_3', TextType::class, ['attr'=> ['placeholder'=>'Caption 3', 'class'=>'form-control'] ])
        ->add('imageName', FileType::class, ['attr'=> ['placeholder'=>'Image Name', 'class'=>'form-control', 'required' => false,] ])
        ->add('save', SubmitType::class, ['attr'=> ['class'=>'btn btn-primary'] ]) 
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TopImage::class,
        ]);
    }

}