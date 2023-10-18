<?php

namespace Tests\Feature\Encountered\Users;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\GraphQLTestCase;

class UpdateUserMutationTest extends GraphQLTestCase
{
    use RefreshDatabase;

    public function testUpdateUserMutation(): void
    {
        Carbon::setTestNow('2023-01-01 00:00:00');

        $userId = User::factory()->create(['name' => 'Test User'])->id;

        $updateUserResponse = $this->graphQL(/** @lang GraphQL */ '
            mutation updateUser($id: ID!, $name: String!, $password: String!) {
                updateUser(id: $id, name: $name, password: $password) {
                    name
                }
            }
        ', [
            'id' => $userId,
            'name' => 'Updated User',
            'password' => 'password',
        ]);

        $updateUserResponse->assertJson([
            'data' => [
                'updateUser' => [
                    'name' => 'Updated User',
                ],
            ],
        ]);

        $findUserResponse = $this->graphQL(/** @lang GraphQL */ '
            query findUser($id: ID!) {
                user(id: $id) {
                    name
                }
            }
        ', [
            'id' => $userId,
        ]);

        $findUserResponse->assertJson([
            'data' => [
                'user' => [
                    'name' => 'Updated User',
                ],
            ],
        ]);
    }
}
