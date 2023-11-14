<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\JobTitle;

class ContactController extends Controller
{
    
    public function index(Request $request) {

        $contacts = Contact::query();

        if($request->search_by == 'title_id') {

            $title = JobTitle::select('id')->where('title', $request->search_value)->first();

            $request->search_value = $title->id ?? 'not_exist';
        }

        if($request->search_by && $request->search_value) {

            $contacts = $contacts->where($request->search_by, 'LIKE', '%'.$request->search_value.'%');
        }

        $data = $contacts->select('id', 'email', 'name', 'title_id', 'dates')
                    ->with(['jobTitle' => function ($q) {
                        $q->select('id', 'title');
                    }])->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function addContact(Request $request) {

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts',
            'job_title' => 'required|in:CEO,CIO,CTO,DEV,MNG',
            'date' => 'required|date',
        ];

        $messages = [
            'job_title.in' => 'Invalid job title.',
        ];

        $validator = \Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $contact = Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'title_id' => JobTitle::select('id')->where('title', $request->job_title)->first()->id,
            'dates' => $request->date,
        ]);

        return response()->json(['message' => 'Contact created successfully', 'contact' => $contact]);
    }
}
