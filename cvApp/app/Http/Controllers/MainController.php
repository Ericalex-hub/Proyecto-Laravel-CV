<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller {
    function main():View {
        return view('main.main');
    }
}
