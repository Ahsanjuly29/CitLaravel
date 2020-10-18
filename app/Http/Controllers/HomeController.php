<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\ProductReview;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PDF;
use Excel;
use Illuminate\Http\Request;
use App\User;
use App\Charts\UserChart;
use App\Billing;

class HomeController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    function adminedit(){
        return back()->with('msg','This option is disabled for Security purpose');
    }
    public function index()
    {
        $billing= Billing::paginate(7);
        $bill= Billing::sum('product_price');
        $today_users = Billing::whereDate('created_at', today())->count();
        $yesterday_users = Billing::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = Billing::whereDate('created_at', today()->subDays(2))->count();
        $users_3_days_ago = Billing::whereDate('created_at', today()->subDays(3))->count();
        $users_4_days_ago = Billing::whereDate('created_at', today()->subDays(4))->count();
        $users_5_days_ago = Billing::whereDate('created_at', today()->subDays(5))->count();
        $users_6_days_ago = Billing::whereDate('created_at', today()->subDays(6))->count();
        $chart = new UserChart;
        $chart->labels(['6 days ago','5 days ago','4 days ago','3 days ago','2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('Billings', 'pie',
            [$users_6_days_ago, $users_5_days_ago, $users_4_days_ago, $users_3_days_ago, $users_2_days_ago, $yesterday_users, $today_users])->options([
            'backgroundColor'=>['#d249','#2d49','#24d9','#bb49','#2bb9','#b4b9','#944'],
        ]);
        return view('backend.main', compact('chart','billing','bill'));
    }
    public  function admin(){
        return view('backend.admin');
    }

    public function pdf(){
        $billing= Billing::all();
        $pdf = PDF::loadView('pdf', $billing);
        return $pdf->setPaper('A3')->download('Bill.pdf');
    }

    public function excel(){
        return Excel::download(new UsersExport, 'bill.xlsx');
    }
    function rating(Request $request){
        ProductReview::insert([
            'product_id'=>$request->product_id,
            'user_id'=>Auth::user()->id,
            'rating'=>$request->rating,
            'review'=>$request->review,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }
}
