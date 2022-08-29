<?php

namespace SlashEquip\LaravelSegment\Enums;

use MyCLabs\Enum\Enum;

/**
 * @psalm-immutable
 * @method static SegmentPayloadType TRACK()
 * @method static SegmentPayloadType IDENTIFY()
 * @method static SegmentPayloadType GROUP()
 */
class SegmentPayloadType extends Enum
{
    private const TRACK = 'track';
    private const IDENTIFY = 'identify';
    private const GROUP = 'group';
}
