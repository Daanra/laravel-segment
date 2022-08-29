<?php

namespace SlashEquip\LaravelSegment;

use SlashEquip\LaravelSegment\Contracts\CanBeIdentifiedForSegment;
use SlashEquip\LaravelSegment\Contracts\CanBeSentToSegment;
use SlashEquip\LaravelSegment\Enums\SegmentPayloadType;
use SlashEquip\LaravelSegment\ValueObjects\SegmentPayload;

class SimpleSegmentGroup implements CanBeSentToSegment
{
    public function __construct(
        private CanBeIdentifiedForSegment $user,
        private string $groupId,
        private ?array $traits = null
    ) {
    }

    public function toSegment(): SegmentPayload
    {
        $payload = new SegmentPayload(
            $this->user,
            SegmentPayloadType::GROUP(),
            $this->traits
        );

        $payload->setGroupId($this->groupId);

        return $payload;
    }
}
