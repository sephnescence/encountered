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
