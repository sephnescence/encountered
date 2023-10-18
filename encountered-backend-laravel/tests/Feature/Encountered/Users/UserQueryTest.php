<?php

namespace Tests\Feature\Encountered\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\GraphQLTestCase;

class UserQueryTest extends GraphQLTestCase
{
    use RefreshDatabase;

    public function testUserQuery(): void
    {
        $userId = User::factory()->create(['name' => 'Test User'])->id;

        $response = $this->graphQL(/** @lang GraphQL */ '
            query findUser($id: ID!) {
                user(id: $id) {
                    id
                }
            }
        ', [
            'id' => $userId,
        ]);

        $response->assertJson([
            'data' => [
                'user' => [
                    'id' => $userId,
                ],
            ],
        ]);
    }
}
