<?php

namespace Application\Model;

class Liczby
{
    public function generuj(): array
    {
        for($i=0; $i < 100; $i++)
        {
            $number = rand(0,1000);
            if($number % 2 == 0)
            {
                $parzyste[] = $number;
            }else{
                $nieparzyste[] = $number;
            }
        }
        sort($parzyste);
        sort($nieparzyste);
        return [$parzyste, $nieparzyste];
    }
}