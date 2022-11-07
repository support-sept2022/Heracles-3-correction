<?php

namespace App;

class Weapon
{
    private int $damage = 10;
    private float $range = 0.5;

    private string $image = 'sword.svg';

    public function __construct(int $damage = 10, float $range = 0.5, string $image = 'sword.svg')
    {
        $this->damage = $damage;
        $this->range = $range;
        $this->image = $image;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }


    public function getRange(): float
    {
        return $this->range;
    }
}