<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ProductBundle\Factory\Variant;

use WellCommerce\Bundle\DoctrineBundle\Factory\EntityFactory;
use WellCommerce\Bundle\ProductBundle\Entity\Variant\OptionInterface;

/**
 * Class OptionFactory
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class OptionFactory extends EntityFactory
{
    public function create() : OptionInterface
    {
        /** @var  $option OptionInterface */
        $option = $this->init();

        return $option;
    }
}
