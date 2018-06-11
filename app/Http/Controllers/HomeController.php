<?php

namespace App\Http\Controllers;

use App\Stadium;
use App\User;
use App\Mail\Contact;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mailgun\Mailgun;

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

    if(empty($request->contact_hp)) {

      $user = User::findOrFail(1);
      $mgClient = new Mailgun(env('MAIL_API_KEY'));
      $domain = env('MAIL_DOMAIN');

      $body = '
<html>
<head>
    <title>'.$request->contact_object.'</title>
</head>
<body>
  <h3>Nouveau contact depuis le site !</h3>
  <h4>Expéditeur :</h4>
  <p>'."$request->contact_name ($request->contact_email)".'</p>
  <h4>Objet :</h4>
  <p>'.$request->contact_object.'</p>
  <h4>Message :</h4>
  <p>'.$request->contact_message.'</p>
  
</body>
</html>';

      $result = $mgClient->sendMessage($domain, array(
        'from'    => "$request->contact_name <$request->contact_email>",
        'to'      => $user->email,
        'subject' => 'Nouveau contact depuis le site !',
        'html'    => $body
      ));

      $response = print_r($result->http_response_body->message);

      response()->json($response);

    } else {
      response()->json('hp');
    }
  }
}
