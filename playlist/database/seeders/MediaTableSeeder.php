<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('medias')->delete();

        \DB::table('medias')->insert(array (
            0 =>
                array (
                    'name' => 'Hey Jude',
                    'genre' => 'Classic',
                    'artist' => 'The Beatles',
                    'path' => '/',
                    'type' => 'song',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            1 =>
                array (
                    'name' => 'Jolene',
                    'genre' => 'Classic',
                    'artist' => 'Dolly Parton',
                    'path' => '/',
                    'type' => 'song',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            2 =>
                array (
                    'name' => 'Smells Like Teen Spirit',
                    'genre' => 'Rock',
                    'artist' => 'Nirvana',
                    'path' => '/',
                    'type' => 'song',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            3 =>
                array (
                    'name' => 'In The End',
                    'genre' => 'Rock',
                    'artist' => 'Linkin Park',
                    'path' => '/',
                    'type' => 'song',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            4 =>
                array (
                    'name' => 'The Lazy Song',
                    'genre' => 'Pop',
                    'artist' => 'Bruno Mars',
                    'path' => '/',
                    'type' => 'song',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            5 =>
                array (
                    'name' => 'Umbrella',
                    'genre' => 'Pop',
                    'artist' => 'Rihanna',
                    'path' => '/',
                    'type' => 'song',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            6 =>
                array (
                    'name' => 'Mocking Bird',
                    'genre' => 'Hip Hop',
                    'artist' => 'Eminem',
                    'path' => '/',
                    'type' => 'song',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            7 =>
                array (
                    'name' => 'So What',
                    'genre' => 'Jazz',
                    'artist' => 'Miles Davis',
                    'path' => '/',
                    'type' => 'song',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            8 =>
                array (
                    'name' => 'Violin and Guitars',
                    'genre' => 'Jazz',
                    'artist' => 'Alicia',
                    'path' => '/',
                    'type' => 'music',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            9 =>
                array (
                    'name' => 'Lo-fi (Work)',
                    'genre' => 'Jazz',
                    'artist' => 'Lofi',
                    'path' => '/',
                    'type' => 'music',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            10 =>
                array (
                    'name' => 'Lo-fi (Sleep)',
                    'genre' => 'Acoustic',
                    'artist' => 'Lofi',
                    'path' => '/',
                    'type' => 'music',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            11 =>
                array (
                    'name' => 'Mamba',
                    'genre' => 'Classic',
                    'artist' => 'Unknown',
                    'path' => '/',
                    'type' => 'dance',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            12 =>
                array (
                    'name' => 'Tango',
                    'genre' => 'Classic',
                    'artist' => 'Unknown',
                    'path' => '/',
                    'type' => 'dance',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'English',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            13 =>
                array (
                    'name' => 'Alizée',
                    'genre' => 'Pop',
                    'artist' => "J'en Ai Marre",
                    'path' => '/',
                    'type' => 'dance',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'French',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
            14 =>
                array (
                    'name' => 'Despacito',
                    'genre' => 'Pop',
                    'artist' => 'Luis Fonsi',
                    'path' => '/',
                    'type' => 'music',
                    'length' => str_pad(mt_rand(1,5), 2, "0", STR_PAD_LEFT).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
                    'size' => (mt_rand(1*10, 5*10) / 10).'MB',
                    'language' => 'Spanish',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ),
        ));
    }
}
