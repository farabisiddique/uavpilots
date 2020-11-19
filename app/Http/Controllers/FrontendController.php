<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\ApiRequest;
use App\Models\User;
use App\Models\UserData;

class FrontendController extends Controller
{
    //
    public function homepage()
    {   
        $ApprovedUsersData = $this->getApprovedUsersData();
        return view('layouts.frontend.homepage',compact('ApprovedUsersData'));
    }
    public function test()
    {
        // $response =  ApiRequest::getGuzzleRequest('/catalog/skus');
        $response =  ApiRequest::getGuzzleRequestest();
        // $result = array_unique($response);
        dd($response);
        $countries = [];
        foreach ($response as $key => $value) {
            dd($value);
            $unique_types = array_unique(array_map(function ($elem) {
                return $elem['countryCode'];
            }, $value));
        }
        dd($unique_types);
    }
    public function blog()
    {
        return view('layouts.frontend.blog');
    }
    public function singlepage()
    {
        return view('layouts.frontend.singlepage');
    }


        protected function getApprovedUsersData()
    {   


        $ApprovedUsersData = User::where('approval_status', 1)
                        ->leftJoin('user_data', 'id', '=', 'user_data.user_data_id')
                        ->get();

        return $ApprovedUsersData;
    }



}
