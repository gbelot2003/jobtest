<?php

namespace Database\Seeders;

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
                'name' => 'Ezequiel Maggio III',
                'email' => 'reanna.schroeder@example.org',
                'email_verified_at' => '2024-08-23 02:54:00',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => '09fWzbKcCo',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:00',
                'updated_at' => '2024-08-23 02:54:00',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Kristy Buckridge',
                'email' => 'armando.west@example.com',
                'email_verified_at' => '2024-08-23 02:54:00',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => 'WyVVG9ix7j',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:00',
                'updated_at' => '2024-08-23 02:54:00',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Steve Graham II',
                'email' => 'daniel.timmy@example.net',
                'email_verified_at' => '2024-08-23 02:54:00',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => 'Q9ln8hNSWd',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:01',
                'updated_at' => '2024-08-23 02:54:01',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Prof. Claudine Labadie',
                'email' => 'americo18@example.net',
                'email_verified_at' => '2024-08-23 02:54:00',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => 'xhTFCILN3I',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:01',
                'updated_at' => '2024-08-23 02:54:01',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Jaiden Ziemann',
                'email' => 'shermann@example.org',
                'email_verified_at' => '2024-08-23 02:54:00',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => '2YcFnKMlD2',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:01',
                'updated_at' => '2024-08-23 02:54:01',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Emelie Lakin PhD',
                'email' => 'armani.ryan@example.org',
                'email_verified_at' => '2024-08-23 02:54:00',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => 'ogVXZ36g3Z',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:01',
                'updated_at' => '2024-08-23 02:54:01',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Miles Schimmel',
                'email' => 'talon17@example.org',
                'email_verified_at' => '2024-08-23 02:54:00',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => 'HojfEPya1m',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:01',
                'updated_at' => '2024-08-23 02:54:01',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Weldon Heathcote',
                'email' => 'kassulke.erik@example.net',
                'email_verified_at' => '2024-08-23 02:54:00',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => 'xzUojDc2sO',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:01',
                'updated_at' => '2024-08-23 02:54:01',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Savion Kulas DDS',
                'email' => 'psanford@example.net',
                'email_verified_at' => '2024-08-23 02:54:00',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => 'ygra2k8lpg',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:01',
                'updated_at' => '2024-08-23 02:54:01',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Margaret Bogisich',
                'email' => 'corkery.mckayla@example.org',
                'email_verified_at' => '2024-08-23 02:54:00',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => 'HAkY5GWzDe',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:02',
                'updated_at' => '2024-08-23 02:54:02',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Administrador',
                'email' => 'admin@tester.com',
                'email_verified_at' => '2024-08-23 02:54:02',
                'password' => '$2y$12$s6CPvm/UltUTUMfNa6q7WeGuZwT/TNwN2Q9oNAkAZM/9lSieAuHty',
                'remember_token' => 'MkE8Q7DWFF',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-08-23 02:54:02',
                'updated_at' => '2024-08-23 02:54:02',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
        ));
        
        
    }
}