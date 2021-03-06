<?php

namespace App\Form;



use App\Entity\Lieu;
use App\Entity\Site;
use App\Entity\Ville;
use App\Entity\Sortie;


use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',)
            ->add('dateHeureDebut')
            ->add('duree')
            ->add('dateLimiteInscription')
            ->add('nbInscriptionMax');






        $builder->add('infosSortie', TextareaType::class, [
        'required' => false,
            'label' => 'Description',
            'attr' => ['maxlength' => 1000, 'placeHolder' => 'Description'],
        ]);


        $builder->add('dateHeureDebut', DateTimeType::class, [
            'date_label' => 'Starts On'
            // this is actually the default format for single_text
            //'format' => 'yyyy-MM-dd H:i:s'
        ]);

        $builder->add('dateLimiteInscription', DateTimeType::class, [
            'date_label' => 'Starts On'
            //'widget' => 'single_text',
            // this is actually the default format for single_text
            //'format' => 'yyyy-MM-dd'
        ]);


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}

