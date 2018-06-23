<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const mail = 'vuongphat.charmingtoniris@gmail.com';

    const PAGE = 10;

    const DISABLE = 0;
    const ENABLE = 1;

    const INTRODUCE = 1;
    const LOCATION = 2;
    const UTILITY = 3;
    const GROUND = 4;
    const MODELS = 5;
    const PAYMENT = 6;
    const PROGRESS = 7;
}
