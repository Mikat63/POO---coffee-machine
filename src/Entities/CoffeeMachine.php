<?php

class CoffeeMachine
{
    private bool $running = false;
    private bool $coffeePod = false;


    public function __construct(private string $brand) {}



    public function setIgnition(bool $running): string
    {
        $this->running = $running;

        return $this->running ? "Allumage de votre machine " . $this->brand : "Votre machine " . $this->brand . " Va s'éteindre";
    }

    public function  setinsertAPod($pod): string
    {
        if (!$this->running) {
            return "";
        }

        $this->coffeePod = $pod;
        return $this->coffeePod ? "Votre café est en cours de préparation" : "Veuillez insérer une dosette";
    }

    public function getCoffeeReady(): string
    {


        return $this->coffeePod ? "Votre café est prêt" : "";
    }
}
