<?php

namespace Tests\Feature\Encountered\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\GraphQLTestCase;

class UsersQueryTest extends GraphQLTestCase
{
    use RefreshDatabase;

    public function testUsersQuery(): void
    {
        $usersCount = 30;

        User::factory()->count($usersCount)->create();

        $response = $this->graphQL(/** @lang GraphQL */ '
            query listAllUsers {
                users {
                    id
                }
            }
        ');

        $response->assertJsonCount($usersCount, 'data.users');
    }
}
