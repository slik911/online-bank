<?php

namespace Database\Factories;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public static function random_strings($length_of_string)
    {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str_result), 0, $length_of_string);
    }

    public static function random_no($length_of_string)
    {
        $str_result = '0123456789';
        return substr(str_shuffle($str_result), 0, $length_of_string);
    }

    public function definition()
    {
        return [
            'account_name' => $this->faker->randomElement($array = array ($this->faker->name(), $this->faker->company(),'Mario Samuel Luca')),
            'uid'=> 'Pna4U5JChXltSc&FxzDAkopuq6iGr782uBjHR9OdeNIWQE3KvYVbfZTygm0wL1M',
            'ref' => self::random_strings(15),
            'type' => $this->faker->randomElement($array = array('credit', 'debit')),
            'beneficiary' => $this->faker->randomElement($array = array ($this->faker->name(),$this->faker->company(),'Mario Samuel Luca')),
            'account_number' => $this->faker->randomElement($array = array (self::random_no(10), '7351429806')),
            'beneficiary' => $this->faker->randomElement($array = array ($this->faker->name(),$this->faker->company(),'Mario Samuel Luca')),
            'beneficiary_account' => $this->faker->randomElement($array = array (self::random_no(10),'7351429806')),
            'beneficiary_bank' => $this->faker->randomElement($array = array('Millwallbank', 'American express', 'Keycorp', 'UBS', 'Northern Trust', 'Ameriprise', 'BMO Harris Bank', 'Credit Swiss', 'Comerica', 'CIT Group', 'SouthGate Bank', 'BankUnited', 'Pinnacle', 'FlagStar', 'Sterling Bancorp', 'Ameris Bancorp')),
            'amount' => $this->faker->numberBetween($min= 100000, $max= 2000000),
            'narration' => self::random_strings(15),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ];
    }
}
