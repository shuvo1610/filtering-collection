<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index(){
        $collection = new Collection([
            'London', 'Paris', 'Dublin', 'Berlin'
        ]);

        $spliced = $collection->splice(1, 3, [
            'New York', 'Tokyo', 'Sydney'
        ]);
        dd($collection);
    }
}
