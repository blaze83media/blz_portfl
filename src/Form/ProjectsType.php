<?php

namespace App\Form;

use App\Entity\Projects;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\TextareaType; 
use Symfony\Component\Form\Extension\Core\Type\FileType; 

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProjectsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Title', TextType::class, ['attr'=> ['placeholder'=>'Title', 'class'=>'form-control'] ])
            ->add('Body', TextareaType::class, ['attr'=> ['placeholder'=>'Body', 'class'=>'form-control'] ])
            ->add('ProjectGroup', TextType::class, ['attr'=> ['placeholder'=>'Enter web link', 'class'=>'form-control'] ])
            ->add('ImageName', FileType::class, ['data_class' => null], ['attr'=> ['class'=>'form-control']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Projects::class,
        ]);
    }
}
