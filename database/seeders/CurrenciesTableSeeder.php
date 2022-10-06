<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * [$currencies description]
         *
         * usd = dollar
         * eur = euro
         * gbp = pond
         */
        $currencies = [
            'usd',
            'eur',
            'gbp',
            'jpy',
        ];

        foreach ($currencies as $currency) {
            Currency::create([
                'iso' => $currency,
            ]);
        }
    }
}
