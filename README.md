# encountered

Where have I encountered this (voice) actor before? I constantly ask myself this when playing a game, watching anime, movies, etc. Actors are in a lot of things, so I only want to cross reference what I have seen before

This will also be a monolithic repository

## Plans

1. Create a Laravel app, ideally in Laravel 10, with Lighthouse, likely opting to avoid federation for now
1. Create a TypeScript React app to facilitate logging in via Google. Might still need to support username/password authentication
1. Since this is a monorepo, I'm free to use both Playwright and Cypress in my testing

## Future plans

1. Bring in federation. It would be interesting to explore a second Laravel app that served images
1. Update the frontend to use the new location instead

---

Dive in with: cd encountered-backend-laravel && ./vendor/bin/sail up

---

Getting started on your first install

1. You'll need to install composer locally
1. We need to generate an `auth.json` file with `composer config http-basic.nova.laravel.com <email> <token>`
1. Ensure composer is installed locally on your host. BTTODO - It's a good idea to make a composer container
1. Copy `.env.example` to `.env` and fill out appropriate details
1. Run `composer update`. This will populate the vendor folder. If `auth.json` has been made correctly, it won't ask you to log in to Nova
1. Run `sail build`. This should work without issue. This can take a few minutes. BTTODO - Is it even necessary though?
1. Run `npm install`
1. Run `sail up` to start the backend
1. Run `npm run dev` to start the frontend
1. Run `sail artisan migrate:fresh`
1. Run `sail artisan db:seed`
1. Run `sail artisan app:encountered:inject-initial-admin`
1. You will need to create an admin account. This can be done with the following SQL

   ```SQL
   INSERT INTO public.users (role_id,"name",email,email_verified_at,"password",remember_token,created_at,updated_at,deleted_at) VALUES
   ('487f28cf-09ea-4de1-9592-45cc78177b70','Admin','admin@example.com',NULL,'$2y$10$HLJS5ksuI4Tve1YV1k0vy.xUBXHRAHQBFyJ9Sc5I.MYglcqfVLkFK',NULL,'2023-10-12 14:43:41.000','2023-10-12 14:43:41.000',NULL);
   ```

Notes

1. You may move your `.env` and `auth.json` files to `.env.backup` and `auth.json.backup` so that they can be ignored by git
