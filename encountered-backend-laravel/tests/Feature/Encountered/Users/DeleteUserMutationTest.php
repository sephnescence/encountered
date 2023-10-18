<?php

namespace Tests\Feature\Encountered\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\GraphQLTestCase;

class DeleteUserMutationTest extends GraphQLTestCase
{
    use RefreshDatabase;

    public function testDeleteUserMutation(): void
    {
        $userId = User::factory()->create(['name' => 'Test User'])->id;

        $deleteUserResponse = $this->graphQL(/** @lang GraphQL */ '
            mutation deleteUser($id: ID!) {
                deleteUser(id: $id) {
                    name
                }
            }
        ', [
            'id' => $userId,
        ]);

        $deleteUserResponse->assertJson([
            'data' => [
                'deleteUser' => [
                    'name' => 'Test User',
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
                'user' => null,
            ],
        ]);
    }
}
