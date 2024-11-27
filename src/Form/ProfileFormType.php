<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $imageConstraints = [
            new Image([
                'maxSize' => '2M'
            ])
        ];
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('imageFile', FileType::class, [
                'mapped' => false,
                'label' => false,
                'required' => false,
                'constraints' => $imageConstraints
            ])
            ->add('imageFileName', HiddenType::class, [
                'mapped' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => true, 'allow_extra_fields' => true,
            'data_class' => User::class,
        ]);
    }
}
