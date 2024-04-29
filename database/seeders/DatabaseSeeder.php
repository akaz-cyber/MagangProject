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
           User::create([
                'name' => "Ajri muhammad sidik",
                'username' => "ajri",
                'email' => "Ajri@gmail.com",
                'password' => bcrypt('rahasia')
               ]);
            //    User::create([
                //     'name' => "akazumi",
                //     'email' => "aka@gmail.com",
                //     'password' => bcrypt('rahasia')
                //    ]);
                //    User::create([
                    //     'name' => "sukma",
                    //     'email' => "sukma@gmail.com",
                    //     'password' => bcrypt('rahasia')
                    //    ]);

User::factory(3)->create();

       Category::create([
        'name' => "Umum",
        'slug' => "umum"
       ]);
       Category::create([
        'name' => "Web Programing",
        'slug' => "web programing"
       ]);
       Category::create([
        'name' => "Novel",
        'slug' => "novel"
       ]);


       Post::factory(20)->create();


    //    Post::create([
    //     'title' => "informasi buku ke satu",
    //     'category_id' => 1,
    //     'user_id' => 1,
    //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
    //     'slug' => 'Judul-satu',
    //     'body' => " Lorem ipsum dolor sit amet consectetur adipisicing elit. In maiores, dolorum nam ab nemo quam possimus, sint iusto,
    //       accusantium commodi aspernatur hic iste itaque totam consectetur optio harum beatae eaque inventore quis recusandae
    //       deleniti nobis et cupiditate!Molestiae dolores inventore officiis, aliquam, perspiciatis tempore praesentium recusandae
    //       porro alias officia veritatis! Tempora nobis vero illo deleniti nulla recusandae deserunt fugiat illum sunt quia sequi
    //       alias velit blanditiis corporis quas magnam eum, incidunt veritatis, impedit eligendi. Asperiores illum alias eos fuga
    //       animi! Neque perferendis aliquam ab,sunt quam magnam enim porro rem ea nam suscipit odio sapiente provident minus
    //       deserunt reiciendis quisquam eos saepe animi non impedit perspiciatis adipisci officia molestias! Distinctio architecto
    //       facilis dignissimos rem ut nihil neque,ex obcaecati nam laborum at labore vel cupiditate totam cum, similique dolores
    //       corporis animi non pariatur. Voluptas porro alias mollitia repellat aut ratione excepturi consectetur quas illo
    //       cupiditate, quis, consequatur amet aliquid debitis."

    //    ]);
    //    Post::create([
    //     'title' => "informasi buku ke dua",
    //     'category_id' => 2,
    //     'user_id' => 3,
    //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
    //     'slug' => 'Judul-dua',
    //     'body' => " Lorem ipsum dolor sit amet consectetur adipisicing elit. In maiores, dolorum nam ab nemo quam possimus, sint iusto,
    //       accusantium commodi aspernatur hic iste itaque totam consectetur optio harum beatae eaque inventore quis recusandae
    //       deleniti nobis et cupiditate!Molestiae dolores inventore officiis, aliquam, perspiciatis tempore praesentium recusandae
    //       porro alias officia veritatis! Tempora nobis vero illo deleniti nulla recusandae deserunt fugiat illum sunt quia sequi
    //       alias velit blanditiis corporis quas magnam eum, incidunt veritatis, impedit eligendi. Asperiores illum alias eos fuga
    //       animi! Neque perferendis aliquam ab,sunt quam magnam enim porro rem ea nam suscipit odio sapiente provident minus
    //       deserunt reiciendis quisquam eos saepe animi non impedit perspiciatis adipisci officia molestias! Distinctio architecto
    //       facilis dignissimos rem ut nihil neque,ex obcaecati nam laborum at labore vel cupiditate totam cum, similique dolores
    //       corporis animi non pariatur. Voluptas porro alias mollitia repellat aut ratione excepturi consectetur quas illo
    //       cupiditate, quis, consequatur amet aliquid debitis."

    //    ]);
    //    Post::create([
    //     'title' => "informasi buku ke tiga",
    //     'category_id' => 3,
    //     'user_id' => 2,
    //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
    //     'slug' => 'Judul-tiga',
    //     'body' => " Lorem ipsum dolor sit amet consectetur adipisicing elit. In maiores, dolorum nam ab nemo quam possimus, sint iusto,
    //       accusantium commodi aspernatur hic iste itaque totam consectetur optio harum beatae eaque inventore quis recusandae
    //       deleniti nobis et cupiditate!Molestiae dolores inventore officiis, aliquam, perspiciatis tempore praesentium recusandae
    //       porro alias officia veritatis! Tempora nobis vero illo deleniti nulla recusandae deserunt fugiat illum sunt quia sequi
    //       alias velit blanditiis corporis quas magnam eum, incidunt veritatis, impedit eligendi. Asperiores illum alias eos fuga
    //       animi! Neque perferendis aliquam ab,sunt quam magnam enim porro rem ea nam suscipit odio sapiente provident minus
    //       deserunt reiciendis quisquam eos saepe animi non impedit perspiciatis adipisci officia molestias! Distinctio architecto
    //       facilis dignissimos rem ut nihil neque,ex obcaecati nam laborum at labore vel cupiditate totam cum, similique dolores
    //       corporis animi non pariatur. Voluptas porro alias mollitia repellat aut ratione excepturi consectetur quas illo
    //       cupiditate, quis, consequatur amet aliquid debitis."

    //    ]);
    //    Post::create([
    //     'title' => "informasi buku ke empat",
    //     'category_id' => 2,
    //     'user_id' => 1,
    //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
    //     'slug' => 'Judul-empat',
    //     'body' => " Lorem ipsum dolor sit amet consectetur adipisicing elit. In maiores, dolorum nam ab nemo quam possimus, sint iusto,
    //       accusantium commodi aspernatur hic iste itaque totam consectetur optio harum beatae eaque inventore quis recusandae
    //       deleniti nobis et cupiditate!Molestiae dolores inventore officiis, aliquam, perspiciatis tempore praesentium recusandae
    //       porro alias officia veritatis! Tempora nobis vero illo deleniti nulla recusandae deserunt fugiat illum sunt quia sequi
    //       alias velit blanditiis corporis quas magnam eum, incidunt veritatis, impedit eligendi. Asperiores illum alias eos fuga
    //       animi! Neque perferendis aliquam ab,sunt quam magnam enim porro rem ea nam suscipit odio sapiente provident minus
    //       deserunt reiciendis quisquam eos saepe animi non impedit perspiciatis adipisci officia molestias! Distinctio architecto
    //       facilis dignissimos rem ut nihil neque,ex obcaecati nam laborum at labore vel cupiditate totam cum, similique dolores
    //       corporis animi non pariatur. Voluptas porro alias mollitia repellat aut ratione excepturi consectetur quas illo
    //       cupiditate, quis, consequatur amet aliquid debitis."

    //    ]);
    //    Post::create([
    //     'title' => "informasi buku ke lima",
    //     'category_id' => 1,
    //     'user_id' => 2,
    //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
    //     'slug' => 'Judul-lima',
    //     'body' => " Lorem ipsum dolor sit amet consectetur adipisicing elit. In maiores, dolorum nam ab nemo quam possimus, sint iusto,
    //       accusantium commodi aspernatur hic iste itaque totam consectetur optio harum beatae eaque inventore quis recusandae
    //       deleniti nobis et cupiditate!Molestiae dolores inventore officiis, aliquam, perspiciatis tempore praesentium recusandae
    //       porro alias officia veritatis! Tempora nobis vero illo deleniti nulla recusandae deserunt fugiat illum sunt quia sequi
    //       alias velit blanditiis corporis quas magnam eum, incidunt veritatis, impedit eligendi. Asperiores illum alias eos fuga
    //       animi! Neque perferendis aliquam ab,sunt quam magnam enim porro rem ea nam suscipit odio sapiente provident minus
    //       deserunt reiciendis quisquam eos saepe animi non impedit perspiciatis adipisci officia molestias! Distinctio architecto
    //       facilis dignissimos rem ut nihil neque,ex obcaecati nam laborum at labore vel cupiditate totam cum, similique dolores
    //       corporis animi non pariatur. Voluptas porro alias mollitia repellat aut ratione excepturi consectetur quas illo
    //       cupiditate, quis, consequatur amet aliquid debitis."

    //    ]);


    }
}
