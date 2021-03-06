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

use Novactive\Bundle\FormBuilderBundle\Entity\Field;
use Novactive\Bundle\FormBuilderBundle\Form\Type\ChoiceReceiverType;

class ChoiceReceiver extends Choice
{
    public function getEntityClass(): string
    {
        return Field\ChoiceReceiver::class;
    }

    protected function getChoiceTypeFormType(): string
    {
        return ChoiceReceiverType::class;
    }
}
