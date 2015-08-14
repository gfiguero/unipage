<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MemberType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', null, array(
                'label' =>  'firstname',
            ))
            ->add('lastname', null, array(
                'label' =>  'lastname',
            ))
            ->add('email', null, array(
                'label' =>  'email',
            ))
            ->add('phonenumber', null, array(
                'label' =>  'phonenumber',
            ))
            ->add('birthdate', 'birthday', array(
                'label' =>  'birthdate',
            ))
            ->add('admissiondate', null, array(
                'label' =>  'admissiondate',
            ))
            ->add('active', null, array(
                'label' =>  'active',
            ))
            ->add('file_photo', 'file', array(
                'required'  =>  false,
                'label'     =>  'file_photo',
            ))
            ->add('role', 'entity', array(
                'label' =>  'role',
                'property'  =>  'name',
                'class'     =>  'UniAdminBundle:Role',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Member'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_member';
    }
}
