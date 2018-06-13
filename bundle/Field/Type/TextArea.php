<?php
/**
 * @copyright Novactive
 * Date: 12/06/18
 */

namespace Novactive\Bundle\FormBuilderBundle\Field\Type;

use Novactive\Bundle\FormBuilderBundle\Entity\Field;
use Novactive\Bundle\FormBuilderBundle\Field\FieldType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormInterface;

class TextArea extends FieldType
{
    public function getEntity(): Field
    {
        return new Field\TextArea();
    }

    /**
     * @param Field $field
     *
     * @return bool
     */
    public function accept(Field $field): bool
    {
        return $field instanceof Field\TextArea;
    }

    /**
     * @inheritDoc
     */
    public function mapFieldEditForm(FormInterface $fieldForm, Field $field): void
    {
        $fieldForm
            ->add(
                'minLength',
                IntegerType::class,
                [
                    'required' => false,
                    'label'    => 'novaformbuilder_field.textarea.min_length',
                    'attr'     => ['min' => 0],
                    'empty_data' => 0,
                ]
            )
            ->add(
                'maxLength',
                IntegerType::class,
                [
                    'required' => false,
                    'label'    => 'novaformbuilder_field.textarea.max_length',
                    'attr'     => ['min' => 0],
                    'empty_data' => 0,
                ]
            );
    }

    /**
     * @inheritDoc
     */
    public function mapFieldCollectForm(FormInterface $fieldForm, Field $field): void
    {
        // TODO: Implement mapFieldCollectForm() method.
    }
}
