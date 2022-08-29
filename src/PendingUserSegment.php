<?php

namespace SlashEquip\LaravelSegment;

use SlashEquip\LaravelSegment\Contracts\CanBeIdentifiedForSegment;

class PendingUserSegment
{
    private SegmentService $service;

    private CanBeIdentifiedForSegment $user;

    public function __construct(SegmentService $service, CanBeIdentifiedForSegment $user)
    {
        $this->service = $service;
        $this->user = $user;
    }

    public function track(string $event, ?array $eventData = null): void
    {
        $this->service->push(
            new SimpleSegmentEvent($this->user, $event, $eventData)
        );
    }
        
    public function group(string $groupId, ?array $traits = null): void
    {
        $this->service->push(
            new SimpleSegmentGroup($this->user, $groupId, $traits)
        );
    }

    public function identify(?array $identifyData = null): void
    {
        $this->service->push(
            new SimpleSegmentIdentify($this->user, $identifyData)
        );
    }
}
