<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected int $attackPower = 10;
    function __construct(array $attributes = [])
    {
        $this->attackPower = $attributes['attack_power'] ?? $this->attackPower;
        parent::__construct($attributes);
    }
}
