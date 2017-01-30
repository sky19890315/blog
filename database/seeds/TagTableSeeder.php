<?php
/**
 * Created by PhpStorm.
 * User: s
 * Date: 17-1-30
 * Time: 上午11:14
 */

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Seed the tags table
     */
    public function run()
    {
        Tag::truncate();

        factory(Tag::class, 5)->create();
    }
}