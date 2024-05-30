<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $tasks = Task::all()->take(5);
        $authUser = Auth::user();
        return view('home', ['tasks' => $tasks, 'authUser' => $authUser]);
    }
}
