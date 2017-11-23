<?php

use PHPUnit\Framework\TestCase;
use jpuck\version\Version;

class VersionTest extends TestCase
{
    public function test_can_instantiate_object()
    {
        $this->assertInstanceOf(Version::class, new Version);
    }
}
