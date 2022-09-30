<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'martien',
            'username' => 'tien',
            'email' => 'martien@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();
        // User::create([
        //     'name' => 'irfan',
        //     'email' => 'irfan@gamil.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque autem animi id dolore? Veniam illum, numquam corporis repudiandae consequuntur dolorum commodi praesentium laboriosam quisquam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas a quo delectus necessitatibus cupiditate veniam distinctio dicta. Et iste provident odit cum exercitationem est culpa, sint aperiam beatae eum, ullam, minus ducimus? Labore, maxime corporis? Laborum a debitis nam iste quia, ullam suscipit vero tempore? Officia eaque laborum nesciunt perferendis quis! Sint nam eius incidunt pariatur,</p> <p> earum ab consectetur ipsa dolores quibusdam veritatis, ex temporibus qui aliquam sapiente eum labore molestiae, obcaecati quae laboriosam perspiciatis cumque! Recusandae quod nostrum incidunt, molestiae natus architecto voluptate corporis velit eligendi aliquam esse reiciendis repellendus repudiandae animi labore voluptatem.</p> <p>Iusto ab commodi quisquam nobis adipisci nemo natus sint inventore ratione, odio nisi praesentium nam molestias fugiat ipsum, nesciunt sunt ad. Error nostrum iusto distinctio earum, rem alias. Recusandae sequi fuga molestiae architecto adipisci inventore repellendus illo dolor nesciunt modi distinctio impedit nihil, eius voluptate explicabo aut omnis tempora, eos, voluptatem consequatur quam. Cumque, quisquam.</p>',
        //     'category_id' => '1',
        //     'user_id' => '1',
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque autem animi id dolore? Veniam illum, numquam corporis repudiandae consequuntur dolorum commodi praesentium laboriosam quisquam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas a quo delectus necessitatibus cupiditate veniam distinctio dicta. Et iste provident odit cum exercitationem est culpa, sint aperiam beatae eum, ullam, minus ducimus? Labore, maxime corporis? Laborum a debitis nam iste quia, ullam suscipit vero tempore? Officia eaque laborum nesciunt perferendis quis! Sint nam eius incidunt pariatur,</p> <p> earum ab consectetur ipsa dolores quibusdam veritatis, ex temporibus qui aliquam sapiente eum labore molestiae, obcaecati quae laboriosam perspiciatis cumque! Recusandae quod nostrum incidunt, molestiae natus architecto voluptate corporis velit eligendi aliquam esse reiciendis repellendus repudiandae animi labore voluptatem.</p> <p>Iusto ab commodi quisquam nobis adipisci nemo natus sint inventore ratione, odio nisi praesentium nam molestias fugiat ipsum, nesciunt sunt ad. Error nostrum iusto distinctio earum, rem alias. Recusandae sequi fuga molestiae architecto adipisci inventore repellendus illo dolor nesciunt modi distinctio impedit nihil, eius voluptate explicabo aut omnis tempora, eos, voluptatem consequatur quam. Cumque, quisquam.</p>',
        //     'category_id' => '1',
        //     'user_id' => '1',
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque autem animi id dolore? Veniam illum, numquam corporis repudiandae consequuntur dolorum commodi praesentium laboriosam quisquam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas a quo delectus necessitatibus cupiditate veniam distinctio dicta. Et iste provident odit cum exercitationem est culpa, sint aperiam beatae eum, ullam, minus ducimus? Labore, maxime corporis? Laborum a debitis nam iste quia, ullam suscipit vero tempore? Officia eaque laborum nesciunt perferendis quis! Sint nam eius incidunt pariatur,</p> <p> earum ab consectetur ipsa dolores quibusdam veritatis, ex temporibus qui aliquam sapiente eum labore molestiae, obcaecati quae laboriosam perspiciatis cumque! Recusandae quod nostrum incidunt, molestiae natus architecto voluptate corporis velit eligendi aliquam esse reiciendis repellendus repudiandae animi labore voluptatem.</p> <p>Iusto ab commodi quisquam nobis adipisci nemo natus sint inventore ratione, odio nisi praesentium nam molestias fugiat ipsum, nesciunt sunt ad. Error nostrum iusto distinctio earum, rem alias. Recusandae sequi fuga molestiae architecto adipisci inventore repellendus illo dolor nesciunt modi distinctio impedit nihil, eius voluptate explicabo aut omnis tempora, eos, voluptatem consequatur quam. Cumque, quisquam.</p>',
        //     'category_id' => '2',
        //     'user_id' => '2',
        // ]);
    }
}
