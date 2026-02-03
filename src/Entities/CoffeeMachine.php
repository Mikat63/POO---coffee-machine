<?php

class CoffeeMachine
{
    private bool $running = false;
    private bool $coffeePod = false;


    public function __construct(private string $brand) {}

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getIgnition(): bool
    {
        return $this->running;
    }

    public function setIgnition(): self
    {
        $this->running = !$this->running;
        return $this;
    }


    public function getInsertAPod(): bool
    {
        return $this->coffeePod;
    }

    public function setInsertAPod(): self
    {
        $this->coffeePod = !$this->coffeePod;
        return $this;
    }
}
