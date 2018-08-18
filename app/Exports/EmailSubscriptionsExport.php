<?php

namespace App\Exports;

use App\EmailSubscription;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class EmailSubscriptionsExport implements FromView
{
    public function view(): View
    {
        return view('cms.exports.email-subscriptions', [
            'emailSubscriptions' => EmailSubscription::all()
        ]);
    }
}
