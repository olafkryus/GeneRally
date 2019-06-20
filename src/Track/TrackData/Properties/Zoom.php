<?php
declare(strict_types=1);

namespace Kryus\GeneRally\Track\TrackData\Properties;

use Kryus\Binary\DataType\Byte;

class Zoom
{
    /** @var int */
    private $value;

    public function __construct(Byte $value)
    {
        $this->value = $value->toInt();
    }

    public function __toString()
    {
        return (string)$this->value;
    }
}