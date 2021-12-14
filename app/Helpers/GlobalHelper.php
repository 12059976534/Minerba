<?php
namespace App\Helpers;

use App\Models\Company;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;

class GlobalHelper {
    public static function generateSlug($string, $table, $field) {
        $count = 0;
        $slug = Str::of($string)->slug('-');
        while(true)
        {
            $query = DB::table($table)->where($field, $slug)->count();
            if ($query == 0) break;
            $slug = $string . '-' . (++$count);
        }

        return Str::of($slug)->slug('-');
    }

    public static function activeMenu($request)
    {
        return request()->is($request) ? 'active' : '';
    }

    public static function collapsedMenu($request)
    {
        return request()->is($request) ? '' : 'collapsed';
    }

    public static function collapseShowMenu($request)
    {
        return request()->is($request) ? 'collapse show' : 'collapse';
    }

    public static function isVisitor()
    {
        $agent = new Agent();

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
        
        $device_name = $agent->device();
        $platform = $agent->platform();
        $platform_version = $agent->version($platform);
        $browser = $agent->browser();
        $browser_version = $agent->version($browser);
        return Visitor::select('id')
                        ->where(['ip_address' => request()->ip(), 'device' => $device, 'device_name' => $device_name, 'platform' => $platform, 'platform_version' => $platform_version, 'browser' => $browser, 'browser_version' => $browser_version])
                        ->whereDate('created_at', \Carbon\Carbon::now()->format('Y-m-d'))
                        ->first();
    }

    public static function replaceWhatsappNumber($phone_number)
    {
        $from = '/'.preg_quote('08', '/').'/';
		$result = preg_replace($from, '628', $phone_number, 1);
		$result = preg_replace("/[^0-9]/", "", $result);

        return $result;
    }

    public static function isVerifiedCompany()
    {
        if(!Auth::user()->hasRole('personal'))
        {
            $company = Company::where('id', Auth::user()->company_id)->first();
            return $company ? $company->is_verified == 1 ? true : false : false;
        }

        return false;
    }
}