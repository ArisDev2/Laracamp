<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        switch (Auth::user()->is_admin) {
            case 1:
                return redirect(route('admin.dashboard'));
                break;
            case 0:
                return redirect(route('user.dashboard'));
                break;

            default:
                return redirect(route('user.dashboard'));
                break;
        }
    }
}
