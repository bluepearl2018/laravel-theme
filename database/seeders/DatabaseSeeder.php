<?php

namespace Eutranet\Theme\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use DB;
use Eutranet\Frontend\Models\ArticleCategory;
use Eutranet\Frontend\Models\Article;
use Eutranet\Frontend\Models\PageCategory;
use Eutranet\Frontend\Models\Page;
use Eutranet\Frontend\Models\Slide;
use Eutranet\Frontend\Models\Tag;
use Schema;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('install_statuses') &&
            DB::table('install_statuses')
                ->where('package_name', 'theme')->get()->first() === null) {
            DB::table('install_statuses')->insert(
                [
                    'package_name' => 'theme',
                    'installed' => 'false',
                    'created_at' => Carbon::now()
                ]
            );
        }
    }
}
