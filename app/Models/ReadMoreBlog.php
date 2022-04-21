<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadMoreBlog extends Model
{
    use HasFactory;

    public static function getAllBlogs()
    {
        return [
            0 => [
                'id'          => 1,
                'name'        => 'Adhar Kalo Rat',
                'author'      => 'Ayesha Khan',
                'description' => 'Politics',
                'fullDescrip' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam
                                   assumenda, at beatae consectetur cumque dolores doloribus ducimus eligendi
                                   assumenda, at beatae consectetur cumque dolores doloribus ducimus eligendienim error facere ipsam, laboriosam numquam obcaecati placeat quae quaerat quas quia ratione, sit suscipit voluptatum. Animi aut eos incidunt neque totam. Amet assumenda commodi delectus nostrum officiis, perspiciatis suscipit ut.',
                'image'       => 'b3.jpg'
            ],

            1 => [
                'id'          => 2,
                'name'        => 'Enjoy your Life',
                'author'      => 'Shah Khan',
                'description' => 'New Shoes For Men Collection And delivery Free Of cost, New arrival grab it quick',
                'fullDescrip' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam assumenda
                                    ipsum dolor sit amet, ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam assumendaconsectetur adipisicing elit. Accusantium aliquam assumenda, at beatae consectetur cumque dolores doloribus ducimus eligendi enim error facere ipsam, laboriosam numquam obcaecati placeat quae quaerat quas quia ratione, sit suscipit voluptatum. Animi aut eos incidunt neque totam. Amet assumenda commodi delectus nostrum officiis, perspiciatis suscipit ut.',
                'image'       => '3.jpg'
            ],

            2 => [
                'id'          => 3,
                'name'        => 'Esho Alor Pothe',
                'author'       => 'Umair Khan',
                'description' => 'New belt For Men Collection And delivery Free Of cost, New arrival grab it quick',
                'fullDescrip' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam assumenda
                                    ipsum doloipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam assumendar sit amet, consectetur adipisicing elit. Accusantium aliquam assumenda, at beatae consectetur cumque dolores doloribus ducimus eligendi enim error facere ipsam, laboriosam numquam obcaecati placeat quae quaerat quas quia ratione, sit suscipit voluptatum. Animi aut eos incidunt neque totam. Amet assumenda commodi delectus nostrum officiis, perspiciatis suscipit ut.',
                'image'       => '2.jpg'
            ],
        ];
    }
}
