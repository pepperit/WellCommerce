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

namespace WellCommerce\Bundle\CmsBundle\Layout;

use WellCommerce\Bundle\FormBundle\Builder\FormBuilderInterface;
use WellCommerce\Bundle\FormBundle\Elements\FormInterface;
use WellCommerce\Bundle\LayoutBundle\Configurator\AbstractLayoutBoxConfigurator;
use WellCommerce\Bundle\LayoutBundle\Configurator\LayoutBoxConfiguratorInterface;

/**
 * Class PageBoxConfigurator
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class PageBoxConfigurator extends AbstractLayoutBoxConfigurator implements LayoutBoxConfiguratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function addFormFields(FormBuilderInterface $builder, FormInterface $form, $defaults)
    {
        $fieldset = $this->getFieldset($builder, $form);

        $fieldset->addChild($builder->getElement('tip', [
            'tip' => '<p>' . $this->trans('page.box.help') . '</p>'
        ]));
    }
}
