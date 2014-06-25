<?php
/**
 * Symfony REST Edition.
 *
 * @link      https://github.com/Ingewikkeld/symfony-rest-edition
 * @copyright Copyright (c) 2013-2014 Ingewikkeld<info@ingewikkeld.net>
 * @license   https://github.com/Ingewikkeld/symfony-rest-edition/blob/master/LICENSE MIT License
 */

namespace Ingewikkeld\Rest\ResourceBundle\Resource;

use Symfony\Component\Form\FormBuilderInterface;

interface FormTypeInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options);

    public function getName();
}
