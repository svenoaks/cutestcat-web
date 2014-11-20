<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        DB::table('gallery_items')->delete();
        DB::table('users')->delete();

        GalleryItem::create(array('author' => 'John',
                                    'votes' => '34',
            'imageUrl' => 'http://www.findcatnames.com/wp-content/uploads/2014/09/453768-cats-cute-300x225.jpg'));
        GalleryItem::create(array('author' => 'Bill',
            'votes' => '36',
            'imageUrl' => 'http://www.findcatnames.com/wp-content/uploads/2014/09/453768-cats-cute-300x225.jpg'));
        GalleryItem::create(array('author' => 'Jane',
            'votes' => '343',
            'imageUrl' => 'http://www.findcatnames.com/wp-content/uploads/2014/09/453768-cats-cute-300x225.jpg'));

        User::create(array('username' => 'max', 'password' => Hash::make('my_pass')));
    }

}
