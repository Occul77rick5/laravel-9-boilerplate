<?php

namespace Database\Seeders;

use App\Models\User;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Illuminate\Database\Seeder;

class BouncerSeeder extends Seeder
{
    public function run()
    {
        Bouncer::allow('admin')->to('ban-users');
    }
}
