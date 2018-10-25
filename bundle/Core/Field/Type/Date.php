<?php
/**
 * NovaFormBuilder Bundle.
 *
 * @package   Novactive\Bundle\FormBuilderBundle
 *
 * @author    Novactive <s.morel@novactive.com>
 * @copyright 2018 Novactive
 * @license   https://github.com/Novactive/NovaFormBuilderBundle/blob/master/LICENSE MIT Licence
 */

declare(strict_types=1);

namespace Novactive\Bundle\FormBuilderBundle\Core\Field\Type;

use Novactive\Bundle\FormBuilderBundle\Core\Field\FieldType;
use Novactive\Bundle\FormBuilderBundle\Entity\Field;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormInterface;

class Date extends FieldType
{
    public function getEntityClass(): string
    {
        return Field\Date::class;
    }

    /**
     * @param Field\Date $field
     */
    public function mapFieldEditForm(FormInterface $fieldForm, Field $field): void
    {
        $fieldForm
            ->add(
                'defaultValue',
                ChoiceType::class,
                [
                    'required' => true,
                    'label'    => 'field.date.default_value',
                    'choices'  => ['empty', 'current date'],
                ]
            );
    }

    /**
     * @param Field\Date $field
     */
    public function mapFieldCollectForm(FormInterface $fieldForm, Field $field): void
    {
        $fieldForm
            ->add(
                'value',
                DateType::class,
                [
                    'required' => $field->isRequired(),
                    'label'    => $field->getName(),
                ]
            );
    }
}