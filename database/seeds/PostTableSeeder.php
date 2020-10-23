<?php

use Illuminate\Database\Seeder;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $cat1 = Category::create([ 'name' => 'Business']);
       $cat2 = Category::create([ 'name' => 'Celebrity']);
       $cat3 = Category::create([ 'name' => 'Life Style']);
       $cat4 = Category::create([ 'name' => 'Technology']);
       $cat5 = Category::create([ 'name' => 'Blogger']);
       $cat6 = Category::create([ 'name' => 'Coaching']);

       $tag1 = Tag::create([ 'name' => 'Business']);
       $tag2 = Tag::create([ 'name' => 'Celebrity']);
       $tag3 = Tag::create([ 'name' => 'Life Style']);
       $tag4 = Tag::create([ 'name' => 'Technology']);
       $tag5 = Tag::create([ 'name' => 'Blogger']);
       $tag6 = Tag::create([ 'name' => 'Coaching']);

       $p1 = Post::create([
        'name'  => 'Ivan Stephan',
        'birthday'  => 'October 9, 2020',
        'birthplace'    => 'Yan Kin Ts',
        'religious' => 'Buddha',
        'ethnicity' => 'Burmese',
        'nationality'   => 'Myanmar',
        'professional'  => 'Web Developer',
        'gender'    => 'Male',
        'profile'   => 'posts/a.jpeg',
        'who'   => 'Where does it come from?
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
        'career'    => 'what is career.',
        'education' => 'your education',
        'personal'  => 'text personal ',
        'about' => 'about of',
        'category_id'   => $cat1->id,
       ]);

       $p2 = Post::create([
        'name'  => 'Aung Zaw Pyae',
        'birthday'  => 'October 9, 2020',
        'birthplace'    => 'Yan Kin Ts',
        'religious' => 'Buddha',
        'ethnicity' => 'Burmese',
        'nationality'   => 'Myanmar',
        'professional'  => 'Web Developer',
        'gender'    => 'Male',
        'profile'   => 'posts/a.jpeg',
        'who'   => 'Where does it come from?
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
        'career'    => 'what is career.',
        'education' => 'your education',
        'personal'  => 'text personal ',
        'about' => 'about of',
        'category_id'   => $cat2->id,
       ]);

       $p3 = Post::create([
        'name'  => 'Ivan Stephan',
        'birthday'  => 'October 9, 2020',
        'birthplace'    => 'Yan Kin Ts',
        'religious' => 'Buddha',
        'ethnicity' => 'Burmese',
        'nationality'   => 'Myanmar',
        'professional'  => 'Web Developer',
        'gender'    => 'Male',
        'profile'   => 'posts/a.jpeg',
        'who'   => 'Where does it come from?
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
        'career'    => 'what is career.',
        'education' => 'your education',
        'personal'  => 'text personal ',
        'about' => 'about of',
        'category_id'   => $cat3->id,
       ]);
       $p4 = Post::create([
        'name'  => 'Mg Mg ',
        'birthday'  => 'October 9, 2020',
        'birthplace'    => 'Yan Kin Ts',
        'religious' => 'Buddha',
        'ethnicity' => 'Burmese',
        'nationality'   => 'Myanmar',
        'professional'  => 'Web Developer',
        'gender'    => 'Male',
        'profile'   => 'posts/a.jpeg',
        'who'   => 'Where does it come from?
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
        'career'    => 'what is career.',
        'education' => 'your education',
        'personal'  => 'text personal ',
        'about' => 'about of',
        'category_id'   => $cat4->id,
       ]);
    }
}
