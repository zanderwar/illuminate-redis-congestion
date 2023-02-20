<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        for ($i = 0; $i < 10000; $i++) {
            $cacheKey = 'my-dynamic-cache-key-'.substr(md5(microtime(true) . rand(10000,50000)), 0, 4);

            Cache::tags('my-tagged-cache')->put($cacheKey, 'Test', ttl: 30);
        }
    }
}
