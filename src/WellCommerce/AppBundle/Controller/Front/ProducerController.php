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

use WellCommerce\AppBundle\Entity\ProducerInterface;
use WellCommerce\AppBundle\Service\Breadcrumb\BreadcrumbItem;
use WellCommerce\CoreBundle\Controller\Front\AbstractFrontController;

/**
 * Class ProducerController
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ProducerController extends AbstractFrontController
{
    public function indexAction(ProducerInterface $producer)
    {
        $this->addBreadCrumbItem(new BreadcrumbItem([
            'name' => $producer->translate()->getName(),
        ]));

        $this->manager->getProducerContext()->setCurrentProducer($producer);

        return $this->displayTemplate('index', [
            'producer' => $producer,
        ]);
    }
}
