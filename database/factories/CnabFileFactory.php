<?php

namespace Database\Factories;

use Idez\Cnab\Models\CnabFile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CnabFileFactory extends Factory
{
    protected $model = CnabFile::class;

    public function definition()
    {
        // $banks = collect(config('cnab.banks'))->map(fn ($bank) => $bank['id']);

        return [
            'type' => $this->faker->randomElement(CnabFile::TYPES),
            'status' => $this->faker->randomElement(CnabFile::STATUS),
            'layout' => $this->faker->randomElement(CnabFile::LAYOUTS),
            'bank' => $this->faker->randomNumber(3),
            'name' => Str::random(8) . $this->faker->randomElement(CnabFile::EXTENSIONS),
            'path' => 'cnab/' . Str::random(40),
        ];
    }
}
