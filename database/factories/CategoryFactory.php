<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $counter = 0;
    protected  $words = ["dismiss", "anger", "block", "filter", "ferry", "ton", "reservoir", "upset", "pour", "rocket", "river", "exemption", "relaxation", "help", "beer", "gradient", "rubbish", "nonremittal", "helicopter", "instinct"];

    public function definition()
    {

        $word = $this->randomword();
        return [
            'name' => strtoupper($word),
            'slug' => strtolower($word),
            'created_at' => now(),
            'updated_at' => now()
        ];

    }

    public function randomword(){
        $word = $this->words[$this->counter];
        $this->counter =  $this->counter +1;

        return $word;
    }
}
