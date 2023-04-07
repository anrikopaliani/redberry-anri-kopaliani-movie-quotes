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
	protected $signature = 'make:admin';

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
		$username = $this->ask('username: ');
		$password = $this->secret('password: ');
		User::create([
			'username' => $username,
			'password' => bcrypt($password),
		]);

		echo 'admin created';
	}
}
