<?php

namespace App\Http\Controllers;

use App\EmailCatcher;
use App\EmailSubscription;
use App\Exports\EmailSubscriptionsExport;
use App\Mail\NewEmailSubscribtion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class EmailSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emailSubscriptions = EmailSubscription::all();

        return view('cms.email-subscription.index', compact(
            'emailSubscriptions'
        ));
    }


    public function export()
    {
        return Excel::download(new EmailSubscriptionsExport, 'nieuwbrief-inschrijvingen.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emailSubscription = EmailSubscription::create($request->all());

        Mail::to('jos@briqchain.com')->send(new NewEmailSubscribtion($emailSubscription));

        EmailCatcher::disable();

        return response()->json($emailSubscription, 201);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
