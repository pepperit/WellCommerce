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

namespace WellCommerce\AppBundle\Controller\Front;

use WellCommerce\CoreBundle\Controller\Front\AbstractFrontController;

/**
 * Class ClientSettingsController
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ClientSettingsController extends AbstractFrontController
{
    public function indexAction()
    {
        return $this->displayTemplate('index');
    }
}
