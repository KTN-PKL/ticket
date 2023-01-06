<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\feedback;
use App\Mail\kirimEmail;


class c_feedback extends Controller
{
    public function __construct()
    {
        $this->feedback = new feedback();
    }

    public function index()
    {
        // $data_email=[
        //     'subject'=>'Test',
        //     'sender_name'=>'nebengerspolsub@gmail.com',
        //     'isi'=>'hayuk main',
        // ];
        // Mail::to("bagaas86@gmail.com")->send(new kirimEmail($data_email));
        // return redirect()->route('feedback')->with('create', 'Feedback Berhasil dibalas');
        $data = ['feedback' => $this->feedback->feedbackData(),];
        return view('feedback.index', $data);
    }

    public function balas(Request $request, $id_feedback)
    {
        $data = [
            'balas_pesan' => $request->balas_pesan,
        ];
        $this->feedback->editData($id_feedback, $data);

        $data_email=[
            'subject'=>'Test',
            'sender_name'=>'nebengerspolsub@gmail.com',
            'isi'=>$request->balas_pesan,
        ];
        Mail::to("bagaas86@gmail.com")->send(new kirimEmail($data_email));
        return redirect()->route('feedback')->with('success', 'Feedback Berhasil dibalas');


    }

    public function detail($id_feedback)
    {
        $data = [
            'status_pesan' => "read",
        ];
        $this->feedback->editData($id_feedback, $data);

        $data = [
            'feedback' => $this->feedback->detailData($id_feedback),
        ];
        return view('feedback.detail', $data);
    }



}
