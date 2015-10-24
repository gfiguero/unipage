<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LinkType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'label' => 'link_name',
            ))
            ->add('address', null, array(
                'label' => 'link_address',
            ))
            ->add('active', null, array(
                'label' => 'link_active',
                'required' => false,
                'attr'  => array( 'labeled' => true, 'class' => 'switch' ),
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Link'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_link';
    }
}
