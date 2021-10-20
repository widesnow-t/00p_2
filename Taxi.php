<?php
require_once __DIR__ . '/Car.php';
class Taxi extends Car
{
    private $passenger;

    public function pickUp($t)
    {
        echo $t . "人乗車しました\n";
            $this->passenger = $this->passenger + $t;
    }

    public function lower($a)
    {
        $a . "\n";
            if ($this->passenger = $this->passenger - $a >=0) {
                echo $a . "人降車しました\n";
            } else { echo $a . "人は降車できません\n"; }
    }

    public function information()
    {
        return "車の車種:" . $this->getName() . "\n" .
                "車体番号:" . $this->getNumber(). "\n" .
                "カラー:" . $this->getColor() . "\n" .
                "乗車人数:" . $this->passenger . "\n";
    }
    

}