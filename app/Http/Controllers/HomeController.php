<?php

namespace App\Http\Controllers;

use App\Stadium;
use App\User;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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

  public function sendContact($request) {

    extract($request);

    $user = User::find(1);
    // debug 1
    return response()->json($user);

    $mail = new PHPMailer(true);

    try {
      $mail->From = 'from@example.com';
      $mail->FromName = 'Mailer';
      $mail->addAddress('jd.levarato@gmail.com', 'User');     // Add a recipient
      $mail->addReplyTo('jd.levarato@gmail.com', 'User');
      $mail->isHTML(true);
      $mail->Subject = 'Nouveau contact depuis le site !';
      $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      $mail->send();
    }

    catch (\Exception $e) {
    // debug 2
    return response()->json($mail->ErrorInfo);
    }

    return response()->json('done');
  }
}
