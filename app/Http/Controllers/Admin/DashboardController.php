<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Вывод статистики на главной странице
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashBoard() {
        return view('admin.dashboard');
    }
}
