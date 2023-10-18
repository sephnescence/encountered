<?php

namespace Tests;
use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Nuwave\Lighthouse\Testing\RefreshesSchemaCache;
// use Nuwave\Lighthouse\Testing\TestsSubscriptions;

abstract class GraphQLTestCase extends TestCase
{
    use CreatesApplication;
    use MakesGraphQLRequests;
    use RefreshesSchemaCache; // Speeds up tests
    // use TestsSubscriptions; // Unsure if needed yet
}
