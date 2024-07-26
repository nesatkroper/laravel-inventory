<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\app\Employee;
use Illuminate\Http\Request;

class CountController extends Controller
{
    //
    public function count()
    {
        $count = Employee::count();
        return view('home', [
            'count' => $count
        ]);
    }
}
