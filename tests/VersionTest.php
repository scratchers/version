<?php

namespace jpuck\version\tests;

use PHPUnit\Framework\TestCase;
use jpuck\version\Version;

class VersionTest extends TestCase
{
    public function test_can_instantiate_object()
    {
        $this->assertInstanceOf(Version::class, new Version);
    }

    public function test_can_get_version_number()
    {
        $this->assertSame('1.0.0', Fixtures\Version::VERSION);
    }
}
