<?php
namespace dow\components\awards;

use dow\interfaces\awards\IAward;
use extas\components\Item;
use extas\components\players\THasPlayer;
use extas\components\samples\THasSample;
use extas\components\THasCreatedAt;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use extas\components\THasUpdatedAt;

/**
 * Award class
 *
 * @author jeyroik@gmail.com
 */
class Award extends Item implements IAward
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasSample;
    use THasPlayer;
    use THasCreatedAt;
    use THasUpdatedAt;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
