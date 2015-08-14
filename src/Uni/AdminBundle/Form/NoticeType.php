<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NoticeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array(
                'label' =>  'title',
            ))
            ->add('content', null, array(
                'label' =>  'content',
            ))
            ->add('published', null, array(
                'label' =>  'published',
            ))
            ->add('photos', 'bootstrap_collection', array(
                'type'                  =>  new NoticePhotoType(),
                'allow_add'             =>  true,
                'allow_delete'          =>  true,
                'add_button_text'       =>  'Agregar Foto',
                'delete_button_text'    =>  'Eliminar Foto',
                'sub_widget_col'        =>  3,
                'button_col'            =>  2
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Notice'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_notice';
    }
}
