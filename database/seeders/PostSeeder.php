<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public $user;
    
    public function run()
    {

        $posts = [
            [
                'user_id' => '3',
                
                'title' => 'Horror',
                'content' => "this is the horror post",
            
            ],
            [
                'user_id' => '2',
                'title' => 'Business',
                'content' => "this is the business post",
                
            ],
            [
                'user_id' => '1',
                'title' => 'Religion',
                'content' => "this is the religion post",
                
            ],
            
            [
                'user_id' => '3',
                'title' => 'Education',
                'content' => 'this is the education post',
                
            ],
            [
                'user_id' => '1',
                'title' => 'Politics',
                'content' => 'this is the politics post',
                
            ],
            [
                'user_id' => '2',
                'title' => 'Comedy',
                'content' => 'this is the comedy post',
                
            ],
            [
                'user_id' => '3',
                'title' => 'Drama',
                'content' => 'this is the drama post',
                
            ],
            [
                'user_id' => '1',
                'title' => 'Romance',
                'content' => 'this is the romance post',
                
            ],
           
        ];

        foreach($posts as $post) {
            Post::create($post);
        }
    }
}
