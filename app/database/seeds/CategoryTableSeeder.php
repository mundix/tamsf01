<?php

class CategoryTableSeeder extends Seeder {

	public function run()
	{
        //Vamos a usar solo 3 Categorias que vamos a utilizar en el sistema.
        Category::create([
            'id'        =>1,
            'name'      =>'Backend developers',
            'slug'      => 'backend-developers'  //Segmento de una URL
        ]);
        Category::create([
            'id'        =>2,
            'name'      =>'Frontend developers',
            'slug'      => 'frontend-developers'  //Segmento de una URL
        ]);
        Category::create([
            'id'        =>3,
            'name'      =>'Designers',
            'slug'      => 'designers'  //Segmento de una URL
        ]);

	}

}