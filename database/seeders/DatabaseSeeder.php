<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Manual Seeding
        // User
        // User::create([
        //     'name' => 'Mirza Qamaruzzaman',
        //     'email' => 'mirzaqamaruzzaman18@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name' => 'Zaaazxz',
        //     'email' => '\devilmaycry@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
        
        // Category
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'UI Design',
            'slug' => 'ui-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eos totam nostrum veritatis sed fuga dolore aliquam unde quibusdam officia.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, placeat quibusdam, nemo vel enim veniam ducimus, sapiente et aliquid ratione iure? Unde ex eaque, harum dolor voluptas temporibus officiis voluptate ab alias tempora explicabo veritatis? In ullam assumenda at rerum delectus saepe voluptatum aspernatur, odit officia dolores ut fugit cupiditate quia, consequatur deserunt? Quaerat numquam aut libero harum consequuntur tempora ea perspiciatis laborum animi. Autem assumenda eveniet suscipit qui consequuntur, pariatur expedita? Incidunt non minus dicta provident vero sapiente illo voluptatibus nobis deserunt unde cum accusamus laborum, harum excepturi deleniti rem, dolore atque exercitationem nam facilis doloribus quis voluptate officia!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit voluptatum numquam at quo iusto consectetur, explicabo officia et repudiandae nulla facere voluptate cum, eveniet modi libero dolorem aperiam earum. Repellat ipsum ipsa reprehenderit eaque deleniti nam nisi, voluptas sunt nulla! Autem ipsa omnis architecto reiciendis nam at eligendi amet magnam mollitia adipisci in fugiat quaerat fuga, ea suscipit quisquam minus ullam possimus sed perferendis eos. Omnis aut beatae odit quam, deserunt est voluptates hic. Et similique beatae saepe laudantium sit non aperiam vel vitae, doloremque fuga neque iusto qui asperiores magnam commodi nisi molestiae vero error repellendus consequatur quae.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eos totam nostrum veritatis sed fuga dolore aliquam unde quibusdam officia.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, placeat quibusdam, nemo vel enim veniam ducimus, sapiente et aliquid ratione iure? Unde ex eaque, harum dolor voluptas temporibus officiis voluptate ab alias tempora explicabo veritatis? In ullam assumenda at rerum delectus saepe voluptatum aspernatur, odit officia dolores ut fugit cupiditate quia, consequatur deserunt? Quaerat numquam aut libero harum consequuntur tempora ea perspiciatis laborum animi. Autem assumenda eveniet suscipit qui consequuntur, pariatur expedita? Incidunt non minus dicta provident vero sapiente illo voluptatibus nobis deserunt unde cum accusamus laborum, harum excepturi deleniti rem, dolore atque exercitationem nam facilis doloribus quis voluptate officia!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit voluptatum numquam at quo iusto consectetur, explicabo officia et repudiandae nulla facere voluptate cum, eveniet modi libero dolorem aperiam earum. Repellat ipsum ipsa reprehenderit eaque deleniti nam nisi, voluptas sunt nulla! Autem ipsa omnis architecto reiciendis nam at eligendi amet magnam mollitia adipisci in fugiat quaerat fuga, ea suscipit quisquam minus ullam possimus sed perferendis eos. Omnis aut beatae odit quam, deserunt est voluptates hic. Et similique beatae saepe laudantium sit non aperiam vel vitae, doloremque fuga neque iusto qui asperiores magnam commodi nisi molestiae vero error repellendus consequatur quae.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eos totam nostrum veritatis sed fuga dolore aliquam unde quibusdam officia.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, placeat quibusdam, nemo vel enim veniam ducimus, sapiente et aliquid ratione iure? Unde ex eaque, harum dolor voluptas temporibus officiis voluptate ab alias tempora explicabo veritatis? In ullam assumenda at rerum delectus saepe voluptatum aspernatur, odit officia dolores ut fugit cupiditate quia, consequatur deserunt? Quaerat numquam aut libero harum consequuntur tempora ea perspiciatis laborum animi. Autem assumenda eveniet suscipit qui consequuntur, pariatur expedita? Incidunt non minus dicta provident vero sapiente illo voluptatibus nobis deserunt unde cum accusamus laborum, harum excepturi deleniti rem, dolore atque exercitationem nam facilis doloribus quis voluptate officia!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit voluptatum numquam at quo iusto consectetur, explicabo officia et repudiandae nulla facere voluptate cum, eveniet modi libero dolorem aperiam earum. Repellat ipsum ipsa reprehenderit eaque deleniti nam nisi, voluptas sunt nulla! Autem ipsa omnis architecto reiciendis nam at eligendi amet magnam mollitia adipisci in fugiat quaerat fuga, ea suscipit quisquam minus ullam possimus sed perferendis eos. Omnis aut beatae odit quam, deserunt est voluptates hic. Et similique beatae saepe laudantium sit non aperiam vel vitae, doloremque fuga neque iusto qui asperiores magnam commodi nisi molestiae vero error repellendus consequatur quae.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eos totam nostrum veritatis sed fuga dolore aliquam unde quibusdam officia.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, placeat quibusdam, nemo vel enim veniam ducimus, sapiente et aliquid ratione iure? Unde ex eaque, harum dolor voluptas temporibus officiis voluptate ab alias tempora explicabo veritatis? In ullam assumenda at rerum delectus saepe voluptatum aspernatur, odit officia dolores ut fugit cupiditate quia, consequatur deserunt? Quaerat numquam aut libero harum consequuntur tempora ea perspiciatis laborum animi. Autem assumenda eveniet suscipit qui consequuntur, pariatur expedita? Incidunt non minus dicta provident vero sapiente illo voluptatibus nobis deserunt unde cum accusamus laborum, harum excepturi deleniti rem, dolore atque exercitationem nam facilis doloribus quis voluptate officia!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit voluptatum numquam at quo iusto consectetur, explicabo officia et repudiandae nulla facere voluptate cum, eveniet modi libero dolorem aperiam earum. Repellat ipsum ipsa reprehenderit eaque deleniti nam nisi, voluptas sunt nulla! Autem ipsa omnis architecto reiciendis nam at eligendi amet magnam mollitia adipisci in fugiat quaerat fuga, ea suscipit quisquam minus ullam possimus sed perferendis eos. Omnis aut beatae odit quam, deserunt est voluptates hic. Et similique beatae saepe laudantium sit non aperiam vel vitae, doloremque fuga neque iusto qui asperiores magnam commodi nisi molestiae vero error repellendus consequatur quae.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
        // Seeding with Factory
        // User
        User::factory(5)->create();

        // Post
        Post::factory(20)->create();

    }
}
