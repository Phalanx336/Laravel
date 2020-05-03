<?php

namespace App\Providers;

use App\Models\Hotels;
use App\Observers\HotelObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function creating()
    {
        $api_key = 'c52eb92141ac08e8c8bd70e404318016';

        $queryString = http_build_query([
            'access_key' => $api_key,
            'query' => '2168 Chapel Gate Dr',
            'region' => 'Rock Hill',
            'output' => 'json',
            'limit' => 1
        ]);

        $ch = curl_init(sprintf('%s?%s', 'http://api.positionstack.com/v1/forward', $queryString));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $json = curl_exec($ch);

        curl_close($ch);

        $location = json_decode($json, true);

        $hotel->lat=$location['data'][0]['latitude'];
        $hotel->lon=$location['data'][0]['longitude'];

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Hotel::observe(HotelObserver::class);
    }
}
