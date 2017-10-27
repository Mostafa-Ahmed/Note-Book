<?php

use Illuminate\Database\Seeder;
use App\Note;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->delete();
        Note::create([
        	'title' => 'first',
        	'body' => 'hahahaha'
        ]);
    }
}
