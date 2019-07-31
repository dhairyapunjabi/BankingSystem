<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Bank;
use Illuminate\Http\Request;

class BranchController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  //public function index()
  //{
  ////
  //}

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    $banks = Bank::all();
    return view( 'branches.create', compact('banks') );
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
    $validatedData = $request->validate( Branch::$createRules );
    $branch = new Branch([
      'address' => $request->address,
      'IFSC' => $request->IFSC,
      'bank_id' => $request->bank_id
    ]);
    $branch->save();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Branch  $branch
   * @return \Illuminate\Http\Response
   */
  public function show(Branch $branch)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Branch  $branch
   * @return \Illuminate\Http\Response
   */
  //public function edit(Branch $branch)
  //{
  ////
  //}

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Branch  $branch
   * @return \Illuminate\Http\Response
   */
  //public function update(Request $request, Branch $branch)
  //{
  ////
  //}

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Branch  $branch
   * @return \Illuminate\Http\Response
   */
  //public function destroy(Branch $branch)
  //{
  ////
  //}
}
