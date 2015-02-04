<?php


class TopicsTableSeeder extends Seeder {

	public function run()
	{
		$topics = array(
			['name' => 'Work', 'slug' => 'work', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Sport', 'slug' => 'sport', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Housekeeping', 'slug' => 'housekeeping', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		// Uncomment the below to run the seeder
		DB::table('topics')->insert($topics);
	}

}
