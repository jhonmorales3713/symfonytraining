<?php

namespace App\Form;

use App\Entity\Shelves;
use App\Entity\Genre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ShelvesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options):void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'placeholder' => 'Enter Title',
                    'class' => 'form-control',
                ],
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Enter Description',
                    'class' => 'form-control',
                ],
            ])
            ->add('genre', EntityType::class, [
                'class' => 'App\Entity\Genre',
                'mapped' =>false,
                'placeholder' => 'Select Genre',
                // 'attr' => [
                //     'id' => 'shelves_genre',
                //     'class' => 'form-control',
                // ],
            ])
            ->add('img_file', FileType::class, [
                // 'class' => 'App\Entity\Genre',
                'mapped' => false,
                'label' => 'Select a file',
                'required' =>true,
                // 'attr' => [
                //     'placeholder' => 'Select Genre',
                //     'class' => 'form-control'

                // ]
            ])
        ;
        // $builder->get('genre')->addEventListener(
        //     FormEvents:: PRE_SET_DATA,
        //     function (FormEvent $event){
        //         $form = $event->getForm();
        //         $form->getParent()->add('subGenre', EntityType::class,[
        //             'class' => 'App\Entity\SubGenre',
        //             'placeholder' => 'Select a sub-genre',
        //             'choices' => null,
        //             // 'attr' => [
        //             //     'class' => 'form-control',
        //             // ],
        //         ]);
        //     }
        // );

        $builder->get('genre')->addEventListener(
            FormEvents:: POST_SUBMIT,
            function (FormEvent $event){

                $form = $event->getForm();
                $form->getParent()->add('subGenre', EntityType::class,[
                    'class' => 'App\Entity\SubGenre',
                    'placeholder' => 'Select a sub-genre',
                    'choices' => $form->getData()->getSubGenres(),
                    // 'attr' => [
                    //     'class' => 'form-control',
                    // ],
                ]);
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Shelves::class,
        ]);
    }
}
