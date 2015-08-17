<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HistoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('history_title', null, array(
                'label' =>  'history_title',
            ))
            ->add('history_content', null, array(
                'label' =>  'history_content',
            ))
            ->add('history_date', null, array(
                'label' =>  'history_date',
            ))
            ->add('history_published', null, array(
                'label' =>  'history_published',
            ))
            ->add('history_photo_path', null, array(
                'label' =>  'history_photo_path',
            ))
            ->add('history_photo_file', null, array(
                'label' =>  'history_photo_file',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\History'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_history';
    }
}
