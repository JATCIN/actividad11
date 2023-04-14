<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Database\Seeder;
use App\Models\user;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $richard=new User;
        $richard->name="spiderman";
        $richard->real_name="piter parker";
        $richard->gender="male";
        $richard->universe_id="4";
        $richard->email="spiderman@tecmilenio.mx";
        $richard->password=Hash::make("Spiderman123");
        $richard->save();

        $richard=new User;
        $richard->name="hulk";
        $richard->real_name="bruce banner";
        $richard->gender="male";
        $richard->universe_id="4";
        $richard->email="hulk@tecmilenio.mx";
        $richard->password=Hash::make("Hulk123");
        $richard->save();

        $richard=new User;
        $richard->name="capitan america";
        $richard->real_name="steven rogers";
        $richard->gender="male";
        $richard->universe_id="4";
        $richard->email="america@tecmilenio.mx";
        $richard->password=Hash::make("America123");
        $richard->save();

        $richard=new User;
        $richard->name="batman";
        $richard->real_name="bruce wayne";
        $richard->gender="male";
        $richard->universe_id="1";
        $richard->email="batman@tecmilenio.mx";
        $richard->password=Hash::make("Batman123");
        $richard->save();

        $richard=new User;
        $richard->name="Scarlet Spider";
        $richard->real_name="Ben Reilly";
        $richard->gender="male";
        $richard->universe_id="5";
        $richard->email="scarlet@tecmilenio.mx";
        $richard->password=Hash::make("Scarlet123");
        $richard->save();

        $richard=new User;
        $richard->name="Wonder Woman";
        $richard->real_name="Diana Prince";
        $richard->gender="female";
        $richard->universe_id="3";
        $richard->email="wonder@tecmilenio.mx";
        $richard->password=Hash::make("Wonder123");
        $richard->save();

        $richard=new User;
        $richard->name="Doomsday";
        $richard->real_name="?";
        $richard->gender="male";
        $richard->universe_id="3";
        $richard->email="doomsday@tecmilenio.mx";
        $richard->password=Hash::make("Doomsday123");
        $richard->save();

        $richard=new User;
        $richard->name="Scarlet Witch";
        $richard->real_name="Wanda Maximoff";
        $richard->gender="female";
        $richard->universe_id="5";
        $richard->email="wanda@tecmilenio.mx";
        $richard->password=Hash::make("Wanda123");
        $richard->save();

        $richard=new User;
        $richard->name="Night Wing";
        $richard->real_name="Dick Grayson";
        $richard->gender="male";
        $richard->universe_id="3";
        $richard->email="night@tecmilenio.mx";
        $richard->password=Hash::make("Night123");
        $richard->save();

        $richard=new User;
        $richard->name="Superman";
        $richard->real_name="Clark Kent";
        $richard->gender="male";
        $richard->universe_id="2";
        $richard->email="superman@tecmilenio.mx";
        $richard->password=Hash::make("Superman123");
        $richard->save();
    }
}
