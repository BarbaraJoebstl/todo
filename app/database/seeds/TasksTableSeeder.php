<?php


class TasksTableSeeder extends Seeder {

	public function run(){
	// Uncomment the below to wipe the table clean before populating
	// DB::table('tasks')->truncate();

	$tasks = array(
		['name' => 'Task 1', 'list_order' => 5, 'slug' => 'task-1', 'topic_id' => 1,  'created_at' => new DateTime, 'updated_at' => new DateTime],
		['name' => 'Task 2', 'list_order' => 4, 'slug' => 'task-2', 'topic_id' => 1,  'created_at' => new DateTime, 'updated_at' => new DateTime],
		['name' => 'Task 3', 'list_order' => 3, 'slug' => 'task-3', 'topic_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['name' => 'Task 4', 'list_order' => 2, 'slug' => 'task-4', 'topic_id' => 2,'created_at' => new DateTime, 'updated_at' => new DateTime],
		['name' => 'Task 5', 'list_order' => 1, 'slug' => 'task-5', 'topic_id' => 2,  'created_at' => new DateTime, 'updated_at' => new DateTime],
	);

	// Uncomment the below to run the seeder
	DB::table('tasks')->insert($tasks);
}
}
