<?php

namespace Tests\Api;

use Tests\TestCase;

class ApiTest extends TestCase
{
    public function testGetMember()
    {
        $response = $this->get('/api/member');
        $response->assertStatus(200);
        $response->assertJson(['id' => 1, 'name' => 'guobin']);
    }
}
