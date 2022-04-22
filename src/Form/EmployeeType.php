<?php

namespace App\Form;

use App\Entity\Employee;
use App\Entity\Departement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EmployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('LastName', TextType::class, ['attr' => ['class' => 'col-sm-2 col-form-label']])
            ->add('FirstName', TextType::class, ['attr' => ['class' => 'col-sm-2 col-form-label']])
            ->add('arrivalDate')
            ->add('Department', EntityType::class, [
                'mapped' => false,
                'class' => Departement::class,
                'choice_label' => 'departmentName',
                'placeholder' => 'Pick one department',
                'label' => 'department',
                'attr' => ['class' => ' dropdown-toggle']
            ])
            ->add('Equipment')
            ->add('Submit', SubmitType::class)
            
            ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}
