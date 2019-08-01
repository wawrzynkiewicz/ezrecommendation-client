<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzRecommendationClient\Value;

class RecommendationItem
{
    /** @var int */
    public $itemId;

    /** @var int */
    public $itemType;

    /** @var int */
    public $relevance;

    /** @var string */
    public $clickRecommended;

    /** @var string */
    public $rendered;

    /** @var string */
    public $intro;

    /** @var string */
    public $image;

    /** @var string */
    public $title;

    /** @var string */
    public $uri;

    public function __clone()
    {
    }
}