<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('products')->delete();

        \DB::table('products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'aut',
                'price' => 440,
                'description' => 'Eveniet et consequatur est consequatur nam voluptates. Ut nisi magni rerum repellendus ipsam eum voluptatem. Id velit debitis optio voluptate quia.',
                'category' => 'officia',
                'image' => 'https://via.placeholder.com/200x200.png/0000cc?text=eum',
                'created_at' => '2024-08-23 16:55:07',
                'updated_at' => '2024-08-23 16:55:07',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'ut',
                'price' => 652,
                'description' => 'Repellendus est quidem ex facere dolores. Non porro quia non nihil deserunt fugit dolorem. Tenetur fugit distinctio quas et laborum iste. Libero impedit placeat laudantium dolorum aut sed ipsa.',
                'category' => 'adipisci',
                'image' => 'https://via.placeholder.com/200x200.png/00ccaa?text=assumenda',
                'created_at' => '2024-08-23 16:55:07',
                'updated_at' => '2024-08-23 16:55:07',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'inventore',
                'price' => 678,
                'description' => 'Eaque esse tenetur repellat vel ut. Laudantium fugit et ex. Porro distinctio sequi consequatur sed et dolorum. Quod voluptas autem non aliquam voluptas.',
                'category' => 'sint',
                'image' => 'https://via.placeholder.com/200x200.png/00aa11?text=ad',
                'created_at' => '2024-08-23 16:55:07',
                'updated_at' => '2024-08-23 16:55:07',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'qui',
                'price' => 477,
                'description' => 'Sint perspiciatis non eum eveniet unde. Rerum excepturi excepturi placeat quis qui asperiores nihil. Ut et in voluptates.',
                'category' => 'debitis',
                'image' => 'https://via.placeholder.com/200x200.png/00cc11?text=sint',
                'created_at' => '2024-08-23 16:55:07',
                'updated_at' => '2024-08-23 16:55:07',
            ),
            4 =>
            array (
                'id' => 5,
                'title' => 'sit',
                'price' => 488,
                'description' => 'Voluptates veritatis sit vel laboriosam odit. Quas maiores repellat quasi voluptas minima quae sapiente. Et odio dolorem illum. Aliquid rerum alias accusantium voluptatem inventore cumque.',
                'category' => 'odio',
                'image' => 'https://via.placeholder.com/200x200.png/004466?text=quo',
                'created_at' => '2024-08-23 16:55:07',
                'updated_at' => '2024-08-23 16:55:07',
            ),
            5 =>
            array (
                'id' => 6,
                'title' => 'dolore',
                'price' => 424,
                'description' => 'Adipisci ratione et qui voluptas rerum fuga. Sunt dolore et sit voluptate explicabo incidunt ut. Dignissimos aut ut maiores nobis inventore est in.',
                'category' => 'eveniet',
                'image' => 'https://via.placeholder.com/200x200.png/0033dd?text=ut',
                'created_at' => '2024-08-23 16:55:08',
                'updated_at' => '2024-08-23 16:55:08',
            ),
            6 =>
            array (
                'id' => 7,
                'title' => 'dignissimos',
                'price' => 613,
                'description' => 'Maxime eum fuga aut quae exercitationem aut. In magni fugiat quia vero sed et quod. Qui consequatur sed iste.',
                'category' => 'sunt',
                'image' => 'https://via.placeholder.com/200x200.png/006699?text=sint',
                'created_at' => '2024-08-23 16:55:08',
                'updated_at' => '2024-08-23 16:55:08',
            ),
            7 =>
            array (
                'id' => 8,
                'title' => 'fugiat',
                'price' => 470,
                'description' => 'Quo voluptatem maxime nostrum sit quia iure provident labore. Occaecati recusandae rerum quos reiciendis. Fuga est qui nisi consequatur temporibus labore perferendis.',
                'category' => 'minima',
                'image' => 'https://via.placeholder.com/200x200.png/00bbcc?text=ut',
                'created_at' => '2024-08-23 16:55:08',
                'updated_at' => '2024-08-23 16:55:08',
            ),
            8 =>
            array (
                'id' => 9,
                'title' => 'sapiente',
                'price' => 344,
                'description' => 'Facilis velit voluptates quas sunt esse. Aut blanditiis deserunt rerum est est facilis consequuntur maxime. Dolores reprehenderit quos deleniti magni enim quidem sit perferendis.',
                'category' => 'numquam',
                'image' => 'https://via.placeholder.com/200x200.png/006644?text=dolorem',
                'created_at' => '2024-08-23 16:55:08',
                'updated_at' => '2024-08-23 16:55:08',
            ),
            9 =>
            array (
                'id' => 10,
                'title' => 'sit',
                'price' => 594,
                'description' => 'Sit sapiente qui doloribus exercitationem. Laudantium et vel at qui ex illo ut. Voluptatum et quae sint voluptas et qui dolor.',
                'category' => 'ea',
                'image' => 'https://via.placeholder.com/200x200.png/0011ff?text=maiores',
                'created_at' => '2024-08-23 16:55:08',
                'updated_at' => '2024-08-23 16:55:08',
            ),
            10 =>
            array (
                'id' => 11,
                'title' => 'modi',
                'price' => 555,
                'description' => 'Aut facilis voluptatum quis molestiae occaecati eos. Eligendi ut quis nihil necessitatibus. Sint velit quis natus saepe. Dolor velit velit et impedit et eveniet mollitia. Quia dignissimos officia dolor sint maiores id.',
                'category' => 'facere',
                'image' => 'https://via.placeholder.com/200x200.png/0088cc?text=numquam',
                'created_at' => '2024-08-23 16:55:08',
                'updated_at' => '2024-08-23 16:55:08',
            ),
            11 =>
            array (
                'id' => 12,
                'title' => 'reprehenderit',
                'price' => 516,
                'description' => 'Molestias non optio consectetur non sed sunt ratione vitae. Mollitia quae provident soluta pariatur rerum error. Hic rerum minima vero eveniet delectus vitae.',
                'category' => 'sapiente',
                'image' => 'https://via.placeholder.com/200x200.png/0055ff?text=velit',
                'created_at' => '2024-08-23 16:55:08',
                'updated_at' => '2024-08-23 16:55:08',
            ),
            12 =>
            array (
                'id' => 13,
                'title' => 'et',
                'price' => 197,
                'description' => 'Perferendis reprehenderit consectetur et est reiciendis cupiditate. Autem ab repellat culpa harum vel aperiam. Minima modi qui eum. Labore est dolore incidunt ab.',
                'category' => 'facilis',
                'image' => 'https://via.placeholder.com/200x200.png/0077cc?text=et',
                'created_at' => '2024-08-23 16:55:08',
                'updated_at' => '2024-08-23 16:55:08',
            ),
            13 =>
            array (
                'id' => 14,
                'title' => 'magnam',
                'price' => 685,
                'description' => 'Veniam maxime tempora enim hic magni. Sit eaque ut dolorum rerum recusandae et. Atque repellendus dolores labore sequi laudantium ab.',
                'category' => 'et',
                'image' => 'https://via.placeholder.com/200x200.png/00eebb?text=ullam',
                'created_at' => '2024-08-23 16:55:09',
                'updated_at' => '2024-08-23 16:55:09',
            ),
            14 =>
            array (
                'id' => 15,
                'title' => 'ab',
                'price' => 375,
                'description' => 'Repudiandae dolorem distinctio impedit vitae aspernatur. Ipsam dicta minima tempora. Officia rem debitis ea repudiandae.',
                'category' => 'culpa',
                'image' => 'https://via.placeholder.com/200x200.png/007755?text=eaque',
                'created_at' => '2024-08-23 16:55:09',
                'updated_at' => '2024-08-23 16:55:09',
            ),
            15 =>
            array (
                'id' => 16,
                'title' => 'tempora',
                'price' => 786,
                'description' => 'Porro aut iusto quisquam maiores iusto atque. Vel aut est explicabo est aperiam. Consequuntur animi ex nostrum itaque et perferendis.',
                'category' => 'officiis',
                'image' => 'https://via.placeholder.com/200x200.png/00eeff?text=alias',
                'created_at' => '2024-08-23 16:55:09',
                'updated_at' => '2024-08-23 16:55:09',
            ),
            16 =>
            array (
                'id' => 17,
                'title' => 'et',
                'price' => 471,
                'description' => 'Sed eum molestiae est exercitationem. Consequatur est dolores saepe earum cupiditate voluptates quia. Qui quam et atque officiis fuga est.',
                'category' => 'blanditiis',
                'image' => 'https://via.placeholder.com/200x200.png/009988?text=eveniet',
                'created_at' => '2024-08-23 16:55:09',
                'updated_at' => '2024-08-23 16:55:09',
            ),
            17 =>
            array (
                'id' => 18,
                'title' => 'beatae',
                'price' => 712,
                'description' => 'Aut ullam mollitia molestiae vitae distinctio iusto debitis. Perferendis culpa suscipit inventore consequatur magni veritatis et velit. Officiis laboriosam magnam consequuntur nemo necessitatibus. Ipsum quos asperiores ut nostrum nisi.',
                'category' => 'eos',
                'image' => 'https://via.placeholder.com/200x200.png/00ccee?text=et',
                'created_at' => '2024-08-23 16:55:09',
                'updated_at' => '2024-08-23 16:55:09',
            ),
            18 =>
            array (
                'id' => 19,
                'title' => 'odio',
                'price' => 875,
                'description' => 'Reprehenderit enim et impedit aut est tenetur. Maxime sit saepe possimus deserunt. Alias quia occaecati rerum. Veritatis ab voluptas qui porro dolorum omnis minus.',
                'category' => 'ab',
                'image' => 'https://via.placeholder.com/200x200.png/00aaaa?text=magnam',
                'created_at' => '2024-08-23 16:55:10',
                'updated_at' => '2024-08-23 16:55:10',
            ),
            19 =>
            array (
                'id' => 20,
                'title' => 'nesciunt',
                'price' => 769,
                'description' => 'Odit omnis dolor officia officia. Eos enim ut veniam suscipit assumenda. Voluptatem expedita dolore deserunt praesentium corrupti quo at.',
                'category' => 'quisquam',
                'image' => 'https://via.placeholder.com/200x200.png/0077bb?text=ut',
                'created_at' => '2024-08-23 16:55:10',
                'updated_at' => '2024-08-23 16:55:10',
            ),
            20 =>
            array (
                'id' => 21,
                'title' => 'architecto',
                'price' => 632,
                'description' => 'Sunt eum natus sit qui voluptatem debitis. Earum accusantium non vel quis laborum velit nam. Provident debitis consequatur et. Repudiandae molestiae non error ratione debitis exercitationem.',
                'category' => 'animi',
                'image' => 'https://via.placeholder.com/200x200.png/004444?text=nostrum',
                'created_at' => '2024-08-23 16:55:10',
                'updated_at' => '2024-08-23 16:55:10',
            ),
            21 =>
            array (
                'id' => 22,
                'title' => 'velit',
                'price' => 221,
                'description' => 'Blanditiis optio quos inventore accusamus. Et molestiae porro eaque fuga. Numquam repudiandae dolores at occaecati architecto. Cum eum dolorem voluptas expedita error doloremque in.',
                'category' => 'eum',
                'image' => 'https://via.placeholder.com/200x200.png/005500?text=et',
                'created_at' => '2024-08-23 16:55:10',
                'updated_at' => '2024-08-23 16:55:10',
            ),
            22 =>
            array (
                'id' => 23,
                'title' => 'suscipit',
                'price' => 332,
                'description' => 'Ut et in omnis aperiam ut nihil. Veritatis cupiditate tenetur modi aliquam labore officia. Et ut ipsam qui. Assumenda quibusdam velit consequuntur possimus sequi consequatur aut. Cum sed animi expedita debitis quod minima.',
                'category' => 'hic',
                'image' => 'https://via.placeholder.com/200x200.png/000055?text=ratione',
                'created_at' => '2024-08-23 16:55:10',
                'updated_at' => '2024-08-23 16:55:10',
            ),
            23 =>
            array (
                'id' => 24,
                'title' => 'repudiandae',
                'price' => 931,
                'description' => 'Qui ut facilis animi sed et nihil molestiae. Provident eum expedita aut ipsam modi delectus. Cumque nesciunt cupiditate delectus tempore possimus.',
                'category' => 'repellat',
                'image' => 'https://via.placeholder.com/200x200.png/004477?text=mollitia',
                'created_at' => '2024-08-23 16:55:10',
                'updated_at' => '2024-08-23 16:55:10',
            ),
            24 =>
            array (
                'id' => 25,
                'title' => 'in',
                'price' => 102,
                'description' => 'Fugit deleniti dicta porro reprehenderit aut. Fuga illo qui quia eligendi voluptatem molestiae. Commodi et cumque aut.',
                'category' => 'ut',
                'image' => 'https://via.placeholder.com/200x200.png/004499?text=sint',
                'created_at' => '2024-08-23 16:55:11',
                'updated_at' => '2024-08-23 16:55:11',
            ),
        ));


    }
}
