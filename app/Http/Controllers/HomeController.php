<?php

namespace App\Http\Controllers;

use App\Stadium;
use App\User;
use App\Mail\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller {

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return view('home.index');
  }

  public function data() {
    $stadium = Stadium::with(['pictures', 'dishes'])->find(1);
    return response()->json($stadium);
  }

  /**
   * @param Request $request
   * @throws \Mailgun\Messages\Exceptions\MissingRequiredMIMEParameters
   */
  public function sendContact(Request $request) {

    if(is_null($request->contact_hp)) {

      $user = User::findOrFail(1);
      Mail::to($user->email)
        ->send(new Contact($request->except('contact_hp')));

      return response()->json('success');
    }

    else {
      return response()->json('hp_error');
    }
  }
}
