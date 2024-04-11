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
    
    function testContext()  {
        Log::info('Hello Info', ["user" => "rena"]);
        assertTrue(true);
    }

    function testWithContext()  { 
        Log::withContext(["user" => "rena"]);
        Log::info("Hello Info");
        Log::error("Hello Warning");

        assertTrue(true);
    }

    function testWithChannel() {
        $slackLogger = Log::channel('slack');
        $slackLogger->error('Hello Slack');

        assertTrue(true); 
    }

    function testFileHandler() {
        $fileLogger = Log::channel('file');
        $fileLogger->info('Hello World');
        $fileLogger->warning('Hello World');
        $fileLogger->error('Hello World');
        $fileLogger->critical('Hello World');

        assertTrue(true);
    }
}
