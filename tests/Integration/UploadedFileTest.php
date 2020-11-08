<?php

namespace Tests\TeraBlaze\Psr7\Integration;

use Http\Psr7Test\UploadedFileIntegrationTest;
use TeraBlaze\Psr7\Factory\Psr17Factory;
use TeraBlaze\Psr7\Stream;

class UploadedFileTest extends UploadedFileIntegrationTest
{
    public function createSubject()
    {
        return (new Psr17Factory())->createUploadedFile(Stream::create('writing to tempfile'));
    }
}
