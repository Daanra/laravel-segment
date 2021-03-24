<?php

namespace Octohook\LaravelSegment\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static SegmentPayloadType TRACK()
 * @method static SegmentPayloadType IDENTIFY()
 */
class SegmentPayloadType extends Enum
{
    private const TRACK = 'track';
    private const IDENTIFY = 'identify';
}