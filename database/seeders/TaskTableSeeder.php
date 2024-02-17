<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfTasks = 10; // You can adjust this number as needed
        $titles = [
            'title',
            'Review design mockups',
            'Prepare presentation slides',
            'Test application functionalities',
            'Deploy to staging server',
            'Client meeting',
            'Code refactoring',
            'Implement new feature',
            'Bug fixing',
            'Documentation update',
        ];
        $descriptions = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            // Add more description texts as needed
        ];

        $priority = ['1', '2', '3'];

        // Generate dummy tasks
        for ($i = 0; $i < $numberOfTasks; $i++) {
            Task::create([
                'title' => $titles[array_rand($titles)], // Select random title
                'description' => $descriptions[array_rand($descriptions)],
                'priority' => $priority[array_rand($priority)], // Select random priority
                'due_date' => now(), // Generate random due date within next 30 days
            ]);
        }
    }
}
