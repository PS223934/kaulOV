<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserCredit>
 */
class UserCreditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public int $iter = 0;
    public function definition()
    {
        $this->iter = $this->iter+1;

        return [
            'person_id' => $this->iter,
            'credit' => 0,
        ];
    }
}
