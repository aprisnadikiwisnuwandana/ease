<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class JournalingController extends Controller
{



    public function displayJournalingPage()
    {
        $templatejournal = DB::table('journaling')->where('isTemplate', true)->get();
        $journal = DB::table('journaling')->where('user_id', auth()->user()->id)->get();
        return view('journaling', [
            'journal' => $journal,
            'templatejournal' => $templatejournal
        ]);
    }

    public function searchJournaling(Request $request)
    {
        $journal = DB::table('journaling')->where('name', 'like', '%' . $request->name . '%')->get();
        return view('journaling', ['journal' => $journal]);
    }

    public function writeJournal($id)
    {
        $journal = DB::table('journaling')->where('id', $id)->first();
        return view('journaling-2', ['journal' => $journal]);
    }

    public function submitJournal($id, Request $request) {
        $journal = DB::table('journaling')->where('id', $id)->first();
        DB::table('journaling')->insert([
            'journal_name' => $journal->journal_name,
            'picture' => $journal->picture,
            'name' => $request->name,
            'date' => $request->date,
            'schedule' => $request->schedule,
            'to_do_list' => $request->to_do_list,
            'note' => $request->note,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/journaling');
    }

    public function updateJournal($id, Request $request) {
        $journal = DB::table('journaling')->where('id', $id)->first();
        DB::table('journaling')->where('id', $id)->update([
            'journal_name' => $journal->journal_name,
            'picture' => $journal->picture,
            'name' => $request->name,
            'date' => $request->date,
            'schedule' => $request->schedule,
            'to_do_list' => $request->to_do_list,
            'note' => $request->note,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/journaling');
    }

    // public function addJournal(Request $request, $id){

    //     $journal = DB::table('journaling')->insertGetId(
    //         'name' => $request->,
    //         'psychologist_id' => $request->psychologist_id,
    //         'topic' => $request->topic,
    //         'package' => $request->package,
    //         'virtualaccount' => rand(10000000000, 99999999999),
    //     );

    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

}
