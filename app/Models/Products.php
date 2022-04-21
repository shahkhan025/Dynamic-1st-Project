<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0 => [
                'id'          => 1,
                'name'        => 'New t-shirt for Men',
                'price'       => '1550',
                'description' => 'New T-shirt For Men Collection And delivery Free Of cost, New arrival grab it quick',
                'fullDescrip' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam assumenda, at beatae consectetur cumque dolores doloribus ducimus eligendi enim error facere ipsam, laboriosam numquam obcaecati placeat quae quaerat quas quia ratione, sit suscipit voluptatum. Animi aut eos incidunt neque totam. Amet assumenda commodi delectus nostrum officiis, perspiciatis suscipit ut.',
                'image'       => 'Ts1.jpg'
            ],

            1 => [
                'id'          => 2,
                'name'        => 'Fashionable Shoes for Men',
                'price'       => '1990',
                'description' => 'New Shoes For Men Collection And delivery Free Of cost, New arrival grab it quick',
                'fullDescrip' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam assumenda, at beatae consectetur cumque dolores doloribus ducimus eligendi enim error facere ipsam, laboriosam numquam obcaecati placeat quae quaerat quas quia ratione, sit suscipit voluptatum. Animi aut eos incidunt neque totam. Amet assumenda commodi delectus nostrum officiis, perspiciatis suscipit ut.',
                'image'       => 'b1.jpg'
            ],

            2 => [
                'id'          => 3,
                'name'        => 'Fashionable Belt for Men',
                'price'       => '1099',
                'description' => 'New belt For Men Collection And delivery Free Of cost, New arrival grab it quick',
                'fullDescrip' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam assumenda, at beatae consectetur cumque dolores doloribus ducimus eligendi enim error facere ipsam, laboriosam numquam obcaecati placeat quae quaerat quas quia ratione, sit suscipit voluptatum. Animi aut eos incidunt neque totam. Amet assumenda commodi delectus nostrum officiis, perspiciatis suscipit ut.',
                'image'       => '1.jpg'
            ],
        ];
    }
}
