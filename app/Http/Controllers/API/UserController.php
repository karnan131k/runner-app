<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\ApiBaseController as ApiBaseController;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource as UserDataResource;
use Illuminate\Support\Facades\Cache;

class UserController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user=User::orderBy('id','desc')->get();
        return $this->sendResponse(UserDataResource::collection(Cache::remember('user',60*60, function () {
            return User::orderBy('id','desc')->get();
        })));
    }

}
