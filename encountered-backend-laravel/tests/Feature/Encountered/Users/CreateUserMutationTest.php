<?php

namespace Tests\Feature\Encountered\Users;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\GraphQLTestCase;

class CreateUserMutationTest extends GraphQLTestCase
{
    use RefreshDatabase;

    public function testCreateUserMutation(): void
    {
        $testNow = '2023-01-01 00:00:00';
        Carbon::setTestNow($testNow);

        $userName = 'Test User';
        $userEmail = 'email@example.com';

        $response = $this->graphQL(/** @lang GraphQL */ '
            mutation createUser($name: String!, $email: String!, $password: String!) {
                createUser(name: $name, email: $email, password: $password) {
                    name
                    created_at
                    email
                }
            }
        ', [
            'name' => $userName,
            'email' => $userEmail,
            'password' => 'password',
        ]);

        $response->assertJson([
            'data' => [
                'createUser' => [
                    'name' => $userName,
                    'email' => $userEmail,
                    'created_at' => $testNow,
                ],
            ],
        ]);
    }
}
