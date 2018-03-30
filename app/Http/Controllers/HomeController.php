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

  public function sendContact(Request $request) {

//    extract($request);
    $user = User::findOrFail(1);
    /*$mail = new PHPMailer(true);

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
    }*/

    $to  = 'jd.levarato@gmail.com' . ', '; // note the comma

// subject
    $subject = 'Birthday Reminders for August';

// message
    $message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
    $headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
// Mail it
    $mail = mail($to, $subject, $message, $headers);

    return response()->json(error_get_last());
  }
}
