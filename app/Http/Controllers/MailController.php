<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail() {
        $data = array('name'=>'Transporter');
        Mail::send('mail', $data, function($message) {
        $message->to('user@gmail.com', 'Transporter')->subject('Form Truck Masuk Site Ditolak');
        $message->from('digitalform.basf@gmail.com','Transporter');
    });
    return 'Email Sent. Check your inbox.';
    }
}
