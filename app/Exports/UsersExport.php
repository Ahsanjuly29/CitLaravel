<?php

namespace App\Exports;

use App\Billing;
use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('welcome', [
            'billing' => Billing::all()
        ]);
    }
}
