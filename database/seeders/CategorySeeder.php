<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Category(['name'=>'Family']);
        $c->save();

        $c = new Category(['name'=>'Friend']);
        $c->save();

        $c = new Category(['name'=>'Work']);
        $c->save();
    }
}
