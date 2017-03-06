<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\start_Auction;
use Storage;



class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('farmerStartAuc');
    }
    public function start_Auction(Request $request)
    {

        $image=$request->file('image');
        $filename=$image->getClientOriginalName();
        Storage::put('upload/images/'.$filename,file_get_contents($request->file('image')->getRealPath()));

        $data=new start_Auction;
        $data->image=$filename;
        $data->seller_name=$request->name;
        $data->category=$request->category;
        $data->product_name=$request->product;
        $data->starting_price=$request->starting_price;
        $data->end_time=$request->endtime;
        $data->description=$request->description;
        $data->quantity=$request->quantity;
        $data->save();
        return view('farmerStartAuc');

    }

    public function displayRunning()
    {
        $data=DB::table('start_auction')->get();
        return view('displayRunningAuc',compact('data'));
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
        //
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
