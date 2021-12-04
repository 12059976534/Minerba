<?php

namespace App\Providers;

use App\Helpers\GlobalHelper;
use App\Models\Visitor;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* VISITOR */
        $is_visitor = GlobalHelper::isVisitor();

        if(!$is_visitor)
        {
            $agent = new Agent();
            $ip_address = request()->ip();
            $location = Location::get($ip_address);
            $device = 'Desktop';

            if($agent->isMobile())
            {
                $device = 'Mobile';
            }
            
            elseif($agent->isTablet())
            {
                $device = 'Tablet';
            }
            
            elseif($agent->isPhone())
            {
                $device = 'Phone';
            }
            
            elseif($agent->isRobot())
            {
                $device = 'Robot';
            }

            $visitor = [
                'ip_address' => $ip_address,
                'country_name' => $location ? $location->countryName : null,
                'country_code' => $location ? $location->countryCode : null,
                'region_code' => $location ? $location->regionCode : null,
                'region_name' => $location ? $location->regionName : null,
                'city_name' => $location ? $location->cityName : null,
                'zip_code' => $location ? $location->zipCode : null,
                'iso_code' => $location ? $location->isoCode : null,
                'postal_code' => $location ? $location->postalCode : null,
                'latitude' => $location ? $location->latitude : null,
                'longitude' => $location ? $location->longitude : null,
                'metro_code' => $location ? $location->metroCode : null,
                'area_code' => $location ? $location->areaCode : null,
                'device' => $device,
                'device_name' => $agent->device(),
                'platform' => $agent->platform(),
                'platform_version' => $agent->version($agent->platform()),
                'browser' => $agent->browser(),
                'browser_version' => $agent->version($agent->browser()),
                'last_visited_at' => \Carbon\Carbon::now()
            ];

            Visitor::create($visitor);
        } else {
            $is_visitor->update(['last_visited_at' => \Carbon\Carbon::now()]);
        }
    }
}
