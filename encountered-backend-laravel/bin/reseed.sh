#!/bin/bash

# For now this bash script MUST be run from the encountered-backend-laravel directory
vendor/bin/sail artisan migrate:fresh --seed
vendor/bin/sail artisan app:encountered:inject-initial-admin