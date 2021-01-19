<?php

use Illuminate\Database\Seeder;

class AdminLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_logs')->delete();
        
        \DB::table('admin_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin","type":1}',
                'created_at' => '2021-01-19 14:18:15',
                'updated_at' => '2021-01-19 14:18:15',
            ),
            1 => 
            array (
                'id' => 2,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:44:15',
                'updated_at' => '2021-01-19 20:44:15',
            ),
            2 => 
            array (
                'id' => 3,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:44:17',
                'updated_at' => '2021-01-19 20:44:17',
            ),
            3 => 
            array (
                'id' => 4,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:44:38',
                'updated_at' => '2021-01-19 20:44:38',
            ),
            4 => 
            array (
                'id' => 5,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:44:40',
                'updated_at' => '2021-01-19 20:44:40',
            ),
            5 => 
            array (
                'id' => 6,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:44:41',
                'updated_at' => '2021-01-19 20:44:41',
            ),
            6 => 
            array (
                'id' => 7,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:45:05',
                'updated_at' => '2021-01-19 20:45:05',
            ),
            7 => 
            array (
                'id' => 8,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:45:06',
                'updated_at' => '2021-01-19 20:45:06',
            ),
            8 => 
            array (
                'id' => 9,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:45:07',
                'updated_at' => '2021-01-19 20:45:07',
            ),
            9 => 
            array (
                'id' => 10,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:45:08',
                'updated_at' => '2021-01-19 20:45:08',
            ),
            10 => 
            array (
                'id' => 11,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:45:33',
                'updated_at' => '2021-01-19 20:45:33',
            ),
            11 => 
            array (
                'id' => 12,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:45:34',
                'updated_at' => '2021-01-19 20:45:34',
            ),
            12 => 
            array (
                'id' => 13,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:46:39',
                'updated_at' => '2021-01-19 20:46:39',
            ),
            13 => 
            array (
                'id' => 14,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:46:41',
                'updated_at' => '2021-01-19 20:46:41',
            ),
            14 => 
            array (
                'id' => 15,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:46:42',
                'updated_at' => '2021-01-19 20:46:42',
            ),
            15 => 
            array (
                'id' => 16,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:47:04',
                'updated_at' => '2021-01-19 20:47:04',
            ),
            16 => 
            array (
                'id' => 17,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:47:05',
                'updated_at' => '2021-01-19 20:47:05',
            ),
            17 => 
            array (
                'id' => 18,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:47:06',
                'updated_at' => '2021-01-19 20:47:06',
            ),
            18 => 
            array (
                'id' => 19,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:47:07',
                'updated_at' => '2021-01-19 20:47:07',
            ),
            19 => 
            array (
                'id' => 20,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:48:44',
                'updated_at' => '2021-01-19 20:48:44',
            ),
            20 => 
            array (
                'id' => 21,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:48:45',
                'updated_at' => '2021-01-19 20:48:45',
            ),
            21 => 
            array (
                'id' => 22,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:48:46',
                'updated_at' => '2021-01-19 20:48:46',
            ),
            22 => 
            array (
                'id' => 23,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:49:00',
                'updated_at' => '2021-01-19 20:49:00',
            ),
            23 => 
            array (
                'id' => 24,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:50:36',
                'updated_at' => '2021-01-19 20:50:36',
            ),
            24 => 
            array (
                'id' => 25,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:50:37',
                'updated_at' => '2021-01-19 20:50:37',
            ),
            25 => 
            array (
                'id' => 26,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:51:05',
                'updated_at' => '2021-01-19 20:51:05',
            ),
            26 => 
            array (
                'id' => 27,
                'admin_id' => 1,
                'path' => 'api/v1/admin/login',
                'method' => 'POST',
                'ip' => '127.0.0.1',
                'input' => '{"username":"admin","password":"admin"}',
                'created_at' => '2021-01-19 20:54:30',
                'updated_at' => '2021-01-19 20:54:30',
            ),
        ));
        
        
    }
}