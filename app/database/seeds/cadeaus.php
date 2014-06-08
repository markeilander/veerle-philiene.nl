<?php

class Cadeaus extends Seeder {

    public function run()
    {
        Cadeau::create(
            array(
                'titel' => 'Rompertje',
                'omschrijving' => '2-pac, kleur wit
                                    lange mouw
                                    maat 62',
                'winkel' => 'H&M',
                'url' => '',
                'prijs' => 9.95,
                'aantal' => 5
            )
        );
    }

}