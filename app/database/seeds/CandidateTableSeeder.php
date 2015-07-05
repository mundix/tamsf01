<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CandidateTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 80) as $index)
		{
            $fullName = $faker->name;

			$user = User::create([
                'full_name' => $fullName,
                'email'     => $faker->email,
                'password'  => \Hash::make(12345),
                'type'      => 'candidate',//Esto era user_type en CreateUsersTable Migration
			]);

            Candidate::create([
                "id"            => $user->id,
                "website_url"   => $faker->url,
                "description"   => $faker->text(200),
                "category_id"   => $faker->randomElement([1,2,3]),
                "available"     => true,
                "slug"          => \Str::slug($fullName),
            ]);
		}
	}

}