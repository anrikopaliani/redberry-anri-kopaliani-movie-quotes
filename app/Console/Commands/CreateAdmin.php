<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'make:admin {username} {password}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create Admin';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$username = $this->argument()['username'];
		$password = bcrypt($this->argument()['password']);
		User::create([
			'username' => $username,
			'password' => $password,
		]);

		echo 'admin created';
	}
}
