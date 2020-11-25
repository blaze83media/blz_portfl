<?php

namespace App\Form;

use App\Entity\About;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\TextareaType; 
use Symfony\Component\Form\Extension\Core\Type\FileType; 

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class AboutType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Title1', TextType::class, ['attr'=> ['placeholder'=>'Title 1', 'class'=>'form-control'] ])
            ->add('Body1', TextareaType::class, ['attr'=> ['placeholder'=>'Body 1', 'class'=>'form-control'] ])
            ->add('Title2', TextType::class, ['attr'=> ['placeholder'=>'Title 2', 'class'=>'form-control'] ])
            ->add('Body2', TextareaType::class, ['attr'=> ['placeholder'=>'Body 2', 'class'=>'form-control'] ])
            ->add('Title3', TextType::class, ['attr'=> ['placeholder'=>'Title 3', 'class'=>'form-control'] ])
            ->add('Body3', TextareaType::class, ['attr'=> ['placeholder'=>'Body 3', 'class'=>'form-control'] ])
            ->add('ImageName', FileType::class, ['data_class' => null], ['attr'=> ['class'=>'form-control']])
            ->add('ImageTitle', TextType::class, ['attr'=> ['placeholder'=>'Image Title', 'class'=>'form-control'] ])
            ->add('ImageBody', TextareaType::class, ['attr'=> ['placeholder'=>'Image Body', 'class'=>'form-control'] ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => About::class,
        ]);
    }
}
