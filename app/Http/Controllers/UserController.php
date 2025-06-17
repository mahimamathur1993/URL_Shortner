<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessIncomes;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Topup;
use App\Models\TopupRequests;
use App\Models\TopupWallet;
use App\Models\DailyClaim;
use App\Models\Fund;
use App\Models\SponsorIncome;
use App\Models\Transaction;
use App\Models\WithdrawalRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;

class UserController extends Controller
{
    public function welcome()
    {
        $sponsor = '';
        $userId =  Auth::user();
      
        return view('pages.welcome',compact('userId','sponsor'));
    }
}
