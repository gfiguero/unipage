<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FrontpageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('frontpage_title', null, array(
                'label' =>  'frontpage_title',
            ))
            ->add('frontpage_subtitle', null, array(
                'label' =>  'frontpage_subtitle',
            ))
            ->add('frontpage_email', null, array(
                'label' =>  'frontpage_email',
            ))
            ->add('frontpage_phonenumber', null, array(
                'label' =>  'frontpage_phonenumber',
            ))
            ->add('frontpage_mission', null, array(
                'label' =>  'frontpage_mission',
            ))
            ->add('frontpage_vision', null, array(
                'label' =>  'frontpage_vision',
            ))
            ->add('frontpage_active', null, array(
                'label' =>  'frontpage_active',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Frontpage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_frontpage';
    }
}
