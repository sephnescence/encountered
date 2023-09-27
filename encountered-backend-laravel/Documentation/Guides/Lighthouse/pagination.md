# Adding a GraphQL endpoint with pagination

We need to create a query with the `@paginated` annotation in `schema.graphql`

```graphql
type Query {
    usersPaginated: [User!]! @paginate
}
```

This allows us to run the following query

```graphql
query listAllUsersWithPagination {
    usersPaginated(first: 5, page: 2) {
        data {
            id
            name
            email
            created_at
            updated_at
        }
        paginatorInfo {
            count
            currentPage
            firstItem
            hasMorePages
            lastItem
            lastPage
            perPage
            total
        }
    }
}
```

and we'll see these results for example

```json
{
    "data": {
        "usersPaginated": {
            "data": [
                {
                    "id": "6",
                    "name": "Prof. Mavis Windler",
                    "email": "lola81@example.com",
                    "created_at": "2023-09-27 03:48:47",
                    "updated_at": "2023-09-27 03:48:47"
                },
                {
                    "id": "7",
                    "name": "Columbus Hamill",
                    "email": "genoveva83@example.org",
                    "created_at": "2023-09-27 03:48:47",
                    "updated_at": "2023-09-27 03:48:47"
                },
                {
                    "id": "8",
                    "name": "Carmela Satterfield",
                    "email": "johns.annamae@example.org",
                    "created_at": "2023-09-27 03:48:47",
                    "updated_at": "2023-09-27 03:48:47"
                },
                {
                    "id": "9",
                    "name": "Anissa Runolfsdottir",
                    "email": "ashlynn.leffler@example.com",
                    "created_at": "2023-09-27 03:48:47",
                    "updated_at": "2023-09-27 03:48:47"
                },
                {
                    "id": "10",
                    "name": "Mrs. Cathy Cartwright II",
                    "email": "phuel@example.org",
                    "created_at": "2023-09-27 03:48:47",
                    "updated_at": "2023-09-27 03:48:47"
                }
            ],
            "paginatorInfo": {
                "count": 5,
                "currentPage": 2,
                "firstItem": 6,
                "hasMorePages": false,
                "lastItem": 10,
                "lastPage": 2,
                "perPage": 5,
                "total": 10
            }
        }
    }
}
```

## Notes

1. You'll notice that `firstItem` and `lastItem` refer to the `id`s of the first and last user returned in _this page_ of results. It does not contain a reference of the first and last ids overall
1. Apparently `paginatorInfo` doesn't have a neat count of pages for you, so there will likely be some custom behaviour that needs to be added to the annotation's behaviour, a new one added entirely, or this logic will be handled on the frontend
1. I don't know how to order by anything at the moment. It would appear to be ordering by id or created_at for now. Knowing Laravel, it's ordering by created_at
