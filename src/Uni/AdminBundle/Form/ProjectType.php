<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array(
                'label' => 'project_title',
            ))
            ->add('content', null, array(
                'label' => 'project_content',
                'required' => false,
                'attr'  =>  array( 'class' =>  'tinymce', 'data-theme' => 'advanced' ),
            ))
            ->add('published', null, array(
                'label' => 'project_published',
                'required' => false,
                'attr'  => array( 'labeled' => true, 'class' => 'switch' ),
            ))
            ->add('photos', 'bootstrap_collection', array(
                'label'                 =>  'project_photos',
                'type'                  =>  new ProjectPhotoType(),
                'allow_add'             =>  true,
                'allow_delete'          =>  true,
                'add_button_text'       =>  'project_photo_add',
                'delete_button_text'    =>  'project_photo_delete',
                'sub_widget_col'        =>  6,
                'button_col'            =>  6
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_project';
    }
}
