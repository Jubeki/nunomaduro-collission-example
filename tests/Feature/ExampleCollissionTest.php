<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Exception;
use Tests\TestCase;

class ExampleCollissionTest extends TestCase
{
    /** @dataProvider provideX */
    public function test_x(int $x): void
    {
        $this->assertTrue(true);
    }

    public function provideX(): array
    {
        return [
            [1],
            [2],
            [3],
        ];
    }

    /** @dataProvider provideY */
    public function test_y(int $y): void
    {
        $this->assertTrue(true);
    }

    public static function provideY(): array
    {
        throw new Exception('A meaning full error is displayed');
    }
}
