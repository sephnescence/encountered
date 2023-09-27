# Make a new User Lighthouse model and provide basic CRUD

## This file is a total lie right now. Ignore the advice within

1. First we can run a simple artisan command to do some boilerplate for us

    ```bash
    sail artisan lighthouse:query user
    ```

1. We can make the create endpoint with

    ```bash
    sail artisan lighthouse:mutation createUser
    ```
