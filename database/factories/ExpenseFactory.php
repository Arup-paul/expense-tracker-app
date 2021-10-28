<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $expenseCategory = config('expense.expense_category');
        $paymentMethod = config("expense.payment_method");
        return [
          'description' => $this->faker->sentence(4),
            'date'=> $this->faker->date('Y-m-d'),
            'amount'=>$this->faker->numberBetween(100,500),
            'category'=> $this->faker->randomElement($expenseCategory),
            'user_id'=> 1,
            'payment_method'=> $this->faker->randomElement($paymentMethod),
        ];
    }
}
