<?php

namespace Novactive\Bundle\FormBuilderBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParagraphType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'disabled' => true,
            'required' => false,
            'mapped'   => false,
        ]);
    }

    public function getName()
    {
        return 'paragraph';
    }
}
