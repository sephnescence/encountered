<?php

namespace Tests\Feature\Encountered\Users;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\GraphQLTestCase;

class UsersPaginatedQueryTest extends GraphQLTestCase
{
    use RefreshDatabase;

    public function testUsersPaginated(): void
    {
        Carbon::setTestNow('2023-01-01 00:00:00');

        User::factory()->create(['name' => 'Test User']);

        $response = $this->graphQL(/** @lang GraphQL */ '
            query listAllUsersWithPagination($first: Int!, $page: Int!) {
                usersPaginated(first: $first, page: $page) {
                    data {
                        name
                    }
                    paginatorInfo {
                        total
                    }
                }
            }
        ', [
            'first' => 10,
            'page' => 1,
        ]);

        $response->assertJson([
            'data' => [
                'usersPaginated' => [
                    'data' => [
                        [
                            'name' => 'Test User',
                        ],
                    ],
                    'paginatorInfo' => [
                        'total' => 1,
                    ],
                ],
            ],
        ]);
    }
}
