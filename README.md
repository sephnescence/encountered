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
