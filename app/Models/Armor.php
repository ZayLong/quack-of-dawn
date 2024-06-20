<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    protected int $defensePower = 10;
    function __construct(array $attributes=[])
    {

        $this->defensePower = $attributes['defense_power'] ?? $this->defensePower;

        parent::__construct($attributes);
    }
}
