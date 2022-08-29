<?php

namespace SlashEquip\LaravelSegment;
  
use SlashEquip\LaravelSegment\Contracts\CanBeIdentifiedForSegment;
use Illuminate\Support\Facades\Session;

class AnonymousSegmentUser implements CanBeIdentifiedForSegment
{
    public function getSegmentIdentifier(): string
    {
        return Session::getId();
    }
};
