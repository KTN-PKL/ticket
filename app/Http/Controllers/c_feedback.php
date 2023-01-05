<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;

class c_feedback extends Controller
{
    public function __construct()
    {
        $this->feedback = new feedback();
    }

    public function index()
    {
        $data = ['feedback' => $this->feedback->feedbackData(),];
        return view('feedback.index', $data);
    }

    public function balas(Request $request, $id_feedback)
    {
        $data = [
            'balas_pesan' => $request->balas_pesan,
        ];
        $this->feedback->editData($id_feedback, $data);
        return redirect()->route('feedback')->with('create', 'Feedback Berhasil dibalas');

    }

    public function detail($id_feedback)
    {
        $data = [
            'feedback' => $this->feedback->detailData($id_feedback),
        ];
        return view('feedback.detail', $data);
    }



}
