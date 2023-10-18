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

1. `cd encountered-backend-laravel`
1. Copy `auth.json.example` to `auth.json` first, and update it with your nova credentials
1. You can install the vendor folder locally with the composer docker container. It might ask for credentials to install nova if the above step doesn't work. Do not accept the offer to store the credentials in `/tmp/auth.json`

   ```bash
   docker run --rm --interactive --tty --volume $PWD:/app composer install
   ```

1. If the above didn't work, try referring to https://hub.docker.com/_/composer to see if the container has moved or similar
1. Copy `.env.example` to `.env` and fill out appropriate details
1. `docker run --rm --interactive --tty --volume $PWD:/app composer update` for good measure
1. `APP_KEY` may not exist yet, but you'll be able to generate one soon
1. Run `./vendor/bin/sail build`. This should work without issue. This can take a few minutes. BTTODO - Is it even necessary though?
1. Run `npm install`
1. Run `sail up` to start the backend. You should get a message saying `INFO Server running on [http://0.0.0.0:80]`. Don't click it yet
1. Run `npm run dev` to start the frontend
1. Now head to the site. There's an issue with loading assets on 0.0.0.0. You'll have better luck going to `http://localhost` instead. For whatever reason Nova works just fine on 0.0.0.0
1. Click `[Generate app key]` if prompted to
1. Run `./vendor/bin/sail artisan migrate:fresh`
1. Run `./vendor/bin/sail artisan db:seed`
1. Run `./vendor/bin/sail artisan app:encountered:inject-initial-admin`
1. You can verify the `Architecture` running on your machine with `docker image inspect <id>`. Search for `Architecture`. The selenium container is a good one to check, as by default the seleniarm package is in `docker-compose.yml`. If you've got any `amd64` architecture images on an `x86` machine and vice versa, it's a good idea to make a `docker-compose.override.yml` file and override the image. For example

   ```yaml
   services:
     selenium:
       image: selenium/standalone-chrome
   ```

Notes

1. You may rename the following files to append `.backup` so they can be ignored by git
   1. Your `.env`
   1. Your `auth.json`
   1. Your `docker-composer.override.yml.backup`
