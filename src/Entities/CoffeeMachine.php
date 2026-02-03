<?php

class CoffeeMachine
{
    private bool $coffeePod = false;
    private bool $running = false;

    public function __construct(private string $brand) {}



    public function Ignition(bool $running): string
    {
        $this->running = $running;

        return $this->running ? "Allumage de votre machine " . $this->brand : "Votre machine " . $this->brand . " Va s'éteindre";
    }

    public function  insertAPod($pod): string
    {
        $this->coffeePod = $pod;
        return $this->coffeePod ? "Votre café est en cours de préparation" : "Veuillez insérer une dosette";
    }

    public function coffeeReady(bool $coffee): string
    {
        $coffee = $this->coffeePod;

        return $coffee ? "Votre café est prêt" : $this->insertAPod($this->coffeePod);
    }
}
