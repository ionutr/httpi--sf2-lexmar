<?php

namespace Httpi\Maritime\Bundle\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GlossaryType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $submitLabel = 'Create';
        if ((int)$options['data']->getId() > 0) {
            $submitLabel = 'Update';
        }

        $builder->add('abbr', 'text', array(
                'attr' => array(
                    'size' => 98,
                    'class' => 'input text'
                )
            ))
            ->add('value', 'textarea', array(
                    'attr' => array(
                        'cols' => 100,
                        'rows' => 10,
                        'class' => 'input textarea'
                    )
                ))
            ->add('isVerified', 'checkbox', array(
                    "required" => false,
                    'attr' => array(
                        'class' => 'input checkbox'
                    )
                ))
            ->add('isPublished', 'checkbox', array(
                    "required" => false,
                    'attr' => array(
                        'class' => 'input checkbox'
                    )
                ))
            ->add($submitLabel, 'submit');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Httpi\Maritime\Bundle\CoreBundle\Entity\Glossary'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'httpi_maritime_bundle_corebundle_glossary';
    }
}
