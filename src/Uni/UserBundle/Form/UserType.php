<?php

namespace Uni\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', null, array(
                'label' =>  'user_firstname',
            ))
            ->add('lastname', null, array(
                'label' =>  'user_lastname',
            ))
            ->add('username', null, array(
                'label' =>  'user_username',
            ))
            ->add('email', null, array(
                'label' =>  'user_email',
            ))
            ->add('enabled', null, array(
                'label' =>  'user_enabled',
                'attr' => array(
                    'labeled' => true,
                ),
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
//    public function getParent()
//    {
//        return 'fos_user_registration';
//    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_userbundle_user_registration';
    }
}
