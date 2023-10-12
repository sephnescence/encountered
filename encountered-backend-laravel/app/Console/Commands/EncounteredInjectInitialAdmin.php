<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class EncounteredInjectInitialAdmin extends Command
{
    /**
     * @var string
     */
    protected $signature = 'app:encountered:inject-initial-admin';

    /**
     * @var string
     */
    protected $description = 'Insert the initial admin user into the database. Email "admin@example.com" | Password "password".';

    public function handle()
    {
        DB::statement(
            <<<SQL
                INSERT INTO users (role_id,"name",email,email_verified_at,"password",remember_token,created_at,updated_at,deleted_at) VALUES
                ('487f28cf-09ea-4de1-9592-45cc78177b70','Admin','admin@example.com',NULL,'\$2y\$10\$HLJS5ksuI4Tve1YV1k0vy.xUBXHRAHQBFyJ9Sc5I.MYglcqfVLkFK',NULL,'2023-10-12 14:43:41.000','2023-10-12 14:43:41.000',NULL);
            SQL
        );
    }
}
