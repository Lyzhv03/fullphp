<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(){
        $tieude = "Liên hệ tìm việc";
        $hoten  = "Hà Văn Lý";
        $email  = "havanly2k3@gmail.com";
        $noidung = "How are you? <br/> How are youuuuuuuu??? <br/> wtf man!!";

        //sendmail
        Mail::mailer()->to($email)->send(new SendMail($tieude,$hoten,$noidung));

        return "Gửi mail thành công";
    }
}
