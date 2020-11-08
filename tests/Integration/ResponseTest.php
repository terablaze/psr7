<?php

namespace Tests\TeraBlaze\Psr7\Integration;

use Http\Psr7Test\ResponseIntegrationTest;
use TeraBlaze\Psr7\Response;

class ResponseTest extends ResponseIntegrationTest
{
    public function createSubject()
    {
        return new Response();
    }
}
