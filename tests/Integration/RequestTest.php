<?php

namespace Tests\TeraBlaze\Psr7\Integration;

use Http\Psr7Test\RequestIntegrationTest;
use TeraBlaze\Psr7\Request;

class RequestTest extends RequestIntegrationTest
{
    public function createSubject()
    {
        return new Request('GET', '/');
    }
}
