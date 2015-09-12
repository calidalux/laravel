<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
    $this->command->info('Таблица пользователей загружена данными!');

	}
}

class UserTableSeeder extends Seeder {

  public function run()
  {
    DB::insert('insert into products ( title, slug, price, brand_id) values ( ?, ?, ?, ?)', [ 'Шина 1', 'Описание 1', 132000, 1]);
    DB::insert('insert into products ( title, slug, price, brand_id) values ( ?, ?, ?, ?)', [ 'Шина 2', 'Описание 2', 2000, 1]);
    DB::insert('insert into products ( title, slug, price, brand_id) values ( ?, ?, ?, ?)', [ 'Шина 3', 'Описание 3', 150000, 2]);
    DB::insert('insert into products ( title, slug, price, brand_id) values ( ?, ?, ?, ?)', [ 'Шина 4', 'Описание 4', 200000, 2]);
    DB::insert('insert into products ( title, slug, price, brand_id) values ( ?, ?, ?, ?)', [ 'Шина 5', 'Описание 5', 1000, 3]);
    DB::insert('insert into products ( title, slug, price, brand_id) values ( ?, ?, ?, ?)', [ 'Шина 6', 'Описание 6', 55000, 3]);
  }

}
