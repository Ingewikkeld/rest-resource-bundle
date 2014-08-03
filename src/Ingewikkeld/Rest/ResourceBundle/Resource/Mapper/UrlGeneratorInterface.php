<?php
/**
 * Symfony REST Edition.
 *
 * @link      https://github.com/Ingewikkeld/symfony-rest-edition
 * @copyright Copyright (c) 2013-2014 Ingewikkeld<info@ingewikkeld.net>
 * @license   https://github.com/Ingewikkeld/symfony-rest-edition/blob/master/LICENSE MIT License
 */

namespace Ingewikkeld\Rest\ResourceBundle\Resource\Mapper;

use Hal\Resource as HalResource;
use Hal\Resource;

interface UrlGeneratorInterface
{
    /**
     * @return string
     */
    public function generateBrowseUrl();

    /**
     * @param HalResource|string|integer $resourceOrIdentifier
     *
     * @return string
     */
    public function generateReadUrl($resourceOrIdentifier);
}
