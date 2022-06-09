<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function displayConsultingPage()
    {
        $psychologist = DB::table('psychologist')->get();
        return view('consulting', ['psychologist' => $psychologist]);
    }

    public function searchPsychologist(Request $request)
    {
        $psychologist = DB::table('psychologist')->where('name', 'like', '%' . $request->name . '%')->get();
        return view('consulting', ['psychologist' => $psychologist]);
    }

    public function displaySelectedPsychologist($id)
    {
        $psychologist = DB::table('psychologist')->where('id', $id)->first();
        return view('consulting-2', ['psychologist' => $psychologist]);
    }

    public function displayFormPage($id)
    {
        $psychologist = DB::table('psychologist')->where('id', $id)->first();
        return view('consulting-3', ['psychologist' => $psychologist]);
    }

    public function submitFormPage(Request $request, $id)
    {
        $validated = $request->validate([
            'topic' => 'required',
            'package' => 'required',
        ]);

        $paymentid = DB::table('consulting')->insertGetId([
            'user_id' => 1,
            'psychologist_id' => $request->psychologist_id,
            'topic' => $request->topic,
            'package' => $request->package,
            'virtualaccount' => rand(10000000000, 99999999999),
        ]);

        return redirect('/consulting/payment/' . $paymentid);
    }

    public function displayPaymentDetail($id)
    {
        $paymentdetail = DB::table('consulting')->where('id', $id)->first();
        $psychologist = DB::table('psychologist')->where('id', $paymentdetail->psychologist_id)->first();
        // dd($psychologist);
        return view('consulting-4', [
            'paymentdetail' => $paymentdetail,
            'psychologist' => $psychologist
        ]);
    }

    public function submitProofOfPayment($id, Request $request)
    {
        $this->validate($request, [
            'proof_of_payment' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $proof_of_payment = $request->file('proof_of_payment');

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_proof_of_payment';

        //dd($proof_of_payment);
        // upload file
        $proof_of_payment->move($tujuan_upload, $proof_of_payment->getClientOriginalName());

        $consulting = DB::table('consulting')->where('id', $id)->first();

        DB::table('consulting')
            ->where('id', $id)
            ->update([
                'proof_of_payment' => $proof_of_payment->getClientOriginalName()
            ]);

            return redirect('/consulting/schedule/' . $consulting->id);
    }

    public function displaySchedulePage($id) {
        $paymentdetail = DB::table('consulting')->where('id', $id)->first();
        $psychologist = DB::table('psychologist')->where('id', $paymentdetail->psychologist_id)->first();
        // dd($psychologist);
        return view('consulting-5', [
            'paymentdetail' => $paymentdetail,
            'psychologist' => $psychologist
        ]);
    }

    public function submitSchedule(Request $request) {
        $splitdatetime = explode(' ', $request->schedule);
        $date = date('d-F-Y', strtotime($splitdatetime[0]));
        $time = $splitdatetime[1];

        DB::table('consulting')
            ->where('id', $request->id)
            ->update([
                'schedule_date' => $date,
                'schedule_time' => $time,
            ]);

        return redirect('/consulting/confirm/' . $request->id);

    }

    public function displayConfirmationPage($id) {
        $paymentdetail = DB::table('consulting')->where('id', $id)->first();
        $psychologist = DB::table('psychologist')->where('id', $paymentdetail->psychologist_id)->first();
        return view('consulting-6', [
            'paymentdetail' => $paymentdetail,
            'psychologist' => $psychologist
        ]);
    }

    public function acceptConsulting($id) {
        DB::table('consulting')
        ->where('id', $id)
        ->update([
            'isVerified' => true,
        ]);

        return redirect('/consulting/schedule/' . $id);
    }

    public function declineConsulting($id) {
        DB::table('consulting')
        ->where('id', $id)
        ->update([
            'isVerified' => false,
        ]);

        return redirect('/consulting/schedule/' . $id);
    }
}
