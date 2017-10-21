<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 't1',
                'email' => 'mac25@yahoo.com',
                'password' => '$2y$10$5w/MwkFHgj/XUtd1BUWfFunueRvms8dyTNuHhMd4lwxDtnVxBksQe',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:25:56',
                'updated_at' => '2017-10-20 11:25:56',
                'firstname' => 'Gaylord',
                'lastname' => 'Hamill',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Nicola Rippin',
                'email' => 'oliver27@stanton.biz',
                'password' => '$2y$10$mn/CsthAE.nj0p2pzIwkC.aw5IoAV7W9ppRVXmGb9RnXBwcZ/DkM2',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:28:16',
                'updated_at' => '2017-10-20 11:28:16',
                'firstname' => 'Marquis',
                'lastname' => 'Reichert',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Clint Greenfelder',
                'email' => 'qoreilly@yahoo.com',
                'password' => '$2y$10$rgzAq1r7y0Yg6zeHSo3hLOibkinl0ayXd.YCZDTCRaiNFZpDObvva',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:28:16',
                'updated_at' => '2017-10-20 11:28:16',
                'firstname' => 'Otilia',
                'lastname' => 'Stracke',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Mike O\'Hara',
                'email' => 'bkovacek@lang.com',
                'password' => '$2y$10$srovdhXd7nMBo67hyzYskOb0WQlvGddkDPkIU3o7t8bmnGSH1bqsy',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:28:16',
                'updated_at' => '2017-10-20 11:28:16',
                'firstname' => 'Bradly',
                'lastname' => 'Gutkowski',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Roslyn Fay',
                'email' => 'linnie.wilderman@boyle.com',
                'password' => '$2y$10$XpUTwYjxkvF9T1/zijsnS.Jk5xohx/lSZuo6Zs5jXbvICggtmRG7K',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:28:16',
                'updated_at' => '2017-10-20 11:28:16',
                'firstname' => 'Juana',
                'lastname' => 'Franecki',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Granville Lindgren',
                'email' => 'herman92@conn.com',
                'password' => '$2y$10$x/hFSOU8fQVgvjTQDTUrIuB5EFr/dM/haBqwR565osW64GunPQp9y',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:28:16',
                'updated_at' => '2017-10-20 11:28:16',
                'firstname' => 'Zena',
                'lastname' => 'Berge',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Delores Nolan',
                'email' => 'gdurgan@yahoo.com',
                'password' => '$2y$10$5YYvzyLfFykXSkg3bWyx0.fQRU7fn.ublOvhMvTNvFSghUVWtrlhK',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:28:16',
                'updated_at' => '2017-10-20 11:28:16',
                'firstname' => 'Otis',
                'lastname' => 'Barton',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Antwon Wintheiser',
                'email' => 'gorczany.elnora@gmail.com',
                'password' => '$2y$10$eQp9u96QCvCLPPkzc/08UedCP2xOr0R6TIBTH3hEfqsSkFpIxiB0O',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:28:16',
                'updated_at' => '2017-10-20 11:28:16',
                'firstname' => 'Mike',
                'lastname' => 'Hane',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Miller Glover Jr.',
                'email' => 'twila.eichmann@terry.com',
                'password' => '$2y$10$7q5wqUa7MgH0mHXlQod0f.SV.hXMNoAXuorWBPqTaX0VFN0SA1jnu',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:28:16',
                'updated_at' => '2017-10-20 11:28:16',
                'firstname' => 'Modesta',
                'lastname' => 'Bernhard',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'Prof. Erna Barrows DDS',
                'email' => 'bahringer.shawn@schumm.com',
                'password' => '$2y$10$gdUEFyA9bXluo677of6jbuGfQ85RMI0ev7mqbReLImBy2soZf7b2e',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:28:16',
                'updated_at' => '2017-10-20 11:28:16',
                'firstname' => 'Dwight',
                'lastname' => 'Marks',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'Ms. Oma Hamill Jr.',
                'email' => 'emilie42@gmail.com',
                'password' => '$2y$10$GNxiqcpBMdzYRLoVQDFqZO6YF/uP1MkvLfN5DdDHfJInspRZ321Ba',
                'remember_token' => NULL,
                'created_at' => '2017-10-20 11:28:16',
                'updated_at' => '2017-10-20 11:28:16',
                'firstname' => 'Kattie',
                'lastname' => 'Rogahn',
            ),
        ));
        
        
    }
}