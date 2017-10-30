<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 10/30/17
 * Time: 8:37 AM
 */

namespace AppBundle\Forms\Signup;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ColleagueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("hpr",HiddenType::class)
            ->add("userId", HiddenType::class)
            ->add("name", TextType::class)
            ->add("email", TextType::class)
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ColleagueDTO::class
        ]);
    }
}