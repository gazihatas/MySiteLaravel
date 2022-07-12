<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Hakkımızda','Kariyer','Vizyonumuz','Misyonumuz'];
        $count = 0;
        foreach ($pages as $page) {
            $count++;
            DB::table('pages')->insert([
                'title'=>$page,
                'slug'=>STR::slug($page),
                'image'=>'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVzaW5lc3MlMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&w=1000&q=80',
                'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            In tellus dolor, interdum eu lorem eget, hendrerit suscipit massa.
                            Fusce vel nisi ac quam eleifend facilisis ut vitae urna. Morbi non auctor lacus.
                            Morbi orci libero, malesuada ac pulvinar sed, imperdiet vitae elit. Sed ut neque magna.
                            Vestibulum rutrum elit a metus mattis imperdiet. Etiam blandit lorem sit amet ligula semper elementum.
                            Orci varius natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Proin erat quam, feugiat non leo non, volutpat feugiat dolor.
                            Fusce commodo massa consectetur, accumsan orci quis, egestas purus.',
                'order'=>$count,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
