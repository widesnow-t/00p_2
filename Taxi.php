<?php
require_once __DIR__ . '/Car.php';
class Taxi extends Car
{
    private $passenger;

    public function pickUp($passenger)
    {
        $this->passenger += $passenger;
        return strval($passenger) . "人乗車しました\n";
    }

    public function lower($passenger)
    {
        $this->passenger -= $passenger;
            if ($this->passenger >=0) {
                return $passenger . "人降車しました\n";
            } else { return strval($passenger) . "人は降車できません\n"; }
    }

    public function information()
    {
        return "車の車種:" . $this->name . "\n" .
                "車体番号:" . $this->number. "\n" .
                "カラー:" . $this->color . "\n" .
                "乗車人数:" . $this->passenger . "\n";
    }
    

}