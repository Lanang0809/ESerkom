<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        
        return view('admin.dashboard', [
            'title' => 'Dashboard Admin',
            'title_page' => 'Dashboard',
            
        ]);
    }
}
