<?php

namespace Application\model;

class Miesiace
{
        public function pobierzWszystkie(): array
    {
        return [
            'Styczeń' => 'blue',
            'Luty' => 'red',
            'Marzec' => 'orange',
            'Kwiecień' => 'yellow',
            'Maj' => 'pink',
            'Czerwiec' => 'purple',
            'Lipiec' => 'black',
            'Sierpień' => 'brown',
            'Wrzesień' => 'grey',
            'Październik' => 'green',
            'Listopad' => 'maroon',
            'Grudzień' => 'silver',
        ];
    }
}