<?php

class Users extends Seeder {

    public function run()
    {
        User::create(
            array(
                'name' => 'Mark Eilander',
                'email' => 'mark.eilander@outlook.com',
                'password' => Hash::make('Icarus#70')
            )
        );
        User::create(
            array(
                'name' => 'Saskia Eilander',
                'email' => 'saskia.eilander@outlook.com',
                'password' => Hash::make('Icarus#70')
            )
        );
    }

}