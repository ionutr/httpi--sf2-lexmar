<?php

namespace Httpi\Maritime\Bundle\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LexiconType extends AbstractType
{
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

    public function getName()
    {
        return 'lexicon';
    }
}