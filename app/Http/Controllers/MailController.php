<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MailController extends Controller {


   public function ship($orderId)
    {
        // $order = Order::findOrFail($orderId);

        // Ship order...

        // Mail::to('markbanner445@gmail.com')->send(new OrderShipped(1));

      $to = "";
      $subject = "Your product has been sold by";
      $message = "have you recived email?";
      $from = "vjh0059@eclipso.de";
      $headers = "From:" . $from. "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      mail($to,$subject,$message,$headers);
    } 


      public function send_email($emailTo, $emailFrom, $subject, $message) {
      $to = $emailTo;
      $from = $emailFrom;
      $headers = "From:" . $from. "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      mail($to,$subject,$message,$headers);
      
   }

}
