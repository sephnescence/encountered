<?php

namespace Tests\Feature\Encountered;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RunsInExampleFolderTest extends TestCase
{
    use RefreshDatabase;

    public function testRunsInEncounteredFolder(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
