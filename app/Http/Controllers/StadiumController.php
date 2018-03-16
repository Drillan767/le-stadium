<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stadium;

class StadiumController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }


  public function create() {
    return view('user.create');
  }

  /**
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(Request $request) {

    $ticket = new Stadium();
    $data = $this->validate($request, [
//      'description'=>'required',
//      'title'=> 'required'
    ]);

    $ticket->landingg_image = $request['landing_image'];
    $ticket->g_map_key = $request['g_map_key'];
    $ticket->logo = $request['logo'];
    $ticket->background_description = $request['background_description'];
    $ticket->description = $request['description'];
    $ticket->hours = $request['hours'];
    $ticket->location = $request['location'];
    $ticket->gallery = $request['gallery'];

    $ticket->save();

    return redirect('/admin')->with('success', 'Enregistré');

  }

  public function edit(){

    $ticket = Stadium::find(1);

    return view('user.edit', compact('ticket', 'id'));
  }

  public function update(Request $request, $id)
  {
    $ticket = new Stadium();
    $data = $this->validate($request, [
//      'description'=>'required',
//      'title'=> 'required'
    ]);

    $ticket->landingg_image = $request['landing_image'];
    $ticket->g_map_key = $request['g_map_key'];
    $ticket->logo = $request['logo'];
    $ticket->background_description = $request['background_description'];
    $ticket->description = $request['description'];
    $ticket->hours = $request['hours'];
    $ticket->location = $request['location'];
    $ticket->gallery = $request['gallery'];

    return redirect('/home')->with('success', 'Enregistré');
  }


}