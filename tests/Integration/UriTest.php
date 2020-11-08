<?php

namespace Tests\TeraBlaze\Psr7\Integration;

use Http\Psr7Test\UriIntegrationTest;
use TeraBlaze\Psr7\Uri;

class UriTest extends UriIntegrationTest
{
    public function createUri($uri)
    {
        return new Uri($uri);
    }
}
