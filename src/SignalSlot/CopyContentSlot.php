<?php

/**
 * This file is part of the eZ Publish Kernel package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\PlatformHttpCacheBundle\SignalSlot;

use eZ\Publish\Core\SignalSlot\Signal;

/**
 * A slot handling CopyContentSignal.
 */
class CopyContentSlot extends AbstractContentSlot
{
    /**
     * @param \eZ\Publish\Core\SignalSlot\Signal\ContentService\CopyContentSignal $signal
     */
    protected function generateTags(Signal $signal)
    {
        return ['content-' . $signal->dstContentId, 'location-' . $signal->dstParentLocationId, 'path-' . $signal->dstParentLocationId];
    }

    protected function supports(Signal $signal)
    {
        return $signal instanceof Signal\ContentService\CopyContentSignal;
    }
}
