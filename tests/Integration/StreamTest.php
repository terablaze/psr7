<?php

namespace Tests\TeraBlaze\Psr7\Integration;

use Http\Psr7Test\StreamIntegrationTest;
use TeraBlaze\Psr7\Stream;

class StreamTest extends StreamIntegrationTest
{
    public function createStream($data)
    {
        return Stream::create($data);
    }
}
