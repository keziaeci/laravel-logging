<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function PHPUnit\Framework\assertTrue;

class LoggingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testLog(): void
    {
        Log::info('Hello Info');
        Log::warning("Hello Warning");
        Log::error("Hello Error");
        Log::critical("Hello Critical");

        assertTrue(true);
    }
}
