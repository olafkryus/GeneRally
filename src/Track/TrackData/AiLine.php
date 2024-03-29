<?php
declare(strict_types=1);

namespace Kryus\GeneRally\Track\TrackData;

use Kryus\GeneRally\Track\TrackData\AiLine\Node;

class AiLine
{
    /** @var Node[] */
    private $knots;

    /**
     * @param Node[] $knots
     */
    public function __construct(array $knots)
    {
        $this->knots = $knots;
    }
}