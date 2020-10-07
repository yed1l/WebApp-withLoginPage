<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller{
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
//        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('glavniy')-> with('success', 'Saved');
    }

     public function all_data(){
            return view('messages', ['data' => Contact::all()]);
        }

      public function MoreDetails($id){
            $contact = new Contact;
            return view('MoreDetails', ['data' => $contact->find($id)]);
      }

      public function UpdateReview($id){
          $contact = new Contact;
          return view('UpdateReview', ['data' => $contact->find($id)]);


      }
    public function UpdateReviewSubmit($id, ContactRequest $req)
    {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('MoreDetails', $id)->with('status', 'updated!');
    }
    public function DeleteReview($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('AllReviews', $id)-> with('success', 'Deleted');


    }
    public function search(ContactRequest $req){
        $search = $req->get('search');
        $posts = DB::table('contacts')->where('subject', 'like', '%' .$search.'%')->paginate(3);
        return view('glavniy', ['contacts' =>$posts]);
    }




}
