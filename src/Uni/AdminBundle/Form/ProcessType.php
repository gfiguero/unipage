<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProcessType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array(
                'label' =>  'process_title',
            ))
            ->add('name', null, array(
                'label' =>  'process_name',
            ))
            ->add('abstract', null, array(
                'label' =>  'process_abstract',
            ))
            ->add('content', null, array(
                'label' =>  'process_content',
            ))
            ->add('rank', null, array(
                'label' =>  'process_rank',
            ))
            ->add('published', null, array(
                'label' =>  'process_published',
                'required' => false,
                'attr'  => array(
                    'labeled' => true,
                ),
            ))
            ->add('path', 'hidden', array(
                'label' =>  'process_path',
                'attr' => array('preview' => true),
                'required' => false,
            ))
            ->add('file', 'file', array(
                'label' =>  'process_file',
                'required' => false,
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Process'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_process';
    }
}
