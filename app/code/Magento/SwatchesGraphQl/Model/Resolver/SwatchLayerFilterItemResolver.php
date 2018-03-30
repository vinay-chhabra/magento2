<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types = 1);

namespace Magento\SwatchesGraphQl\Model\Resolver;

use Magento\Framework\GraphQl\Config\Data\TypeResolverInterface;

/**
 * {@inheritdoc}
 */
class SwatchLayerFilterItemResolver implements TypeResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function resolveType(array $data) : ?string
    {
        if (isset($data['swatch_data'])) {
            return 'SwatchLayerFilterItem';
        }
        return null;
    }
}
