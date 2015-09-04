<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Education;
use App\File;
use App\Member;
use App\Persons;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request as urlRequest;
use Laracasts\Flash\Flash;
use Symfony\Component\DomCrawler\Form;

class MembersshipsController extends Controller
{
    protected $member, $person, $contact,$education, $file;

    public function  __construct(Member $member, Persons $person, Contact $contact, Education $education, File $file){

        $this->member = $member;
        $this->person = $person;
        $this->contact = $contact;
        $this->education = $education;
        $this->file = $file;

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $rules = [
            "title" => "max:200",
              "gender" => "max:200",
              "dob" => "max:200|date",
              "surname" => "max:200|required",
              "middleName" => "max:200",
              "firstName" => "max:200|required",
              "country" => "max:200",
              "occupation" => "max:200",
              "address" => "max:200|required",
              "email" => "email|max:200|required",
              "university.name" => "max:200",
              "university.year" => "max:200",
              "hschool.name" => "max:200|required",
              "hschool.year" => "max:200|required",
              "jschool.name" => "required|max:200",
              "jschool.year" => "required|max:200",
              "remarks" => "required|max:200",
              "agreed" => "required|max:200",
              "file" => "max:5000,mimes:jpeg,bmp,png,pdf,doc,docx"
        ];
        $validator = $this->validate($request, $rules);

       if(!$validator){
           $input = $request->all();
           $person = $this->person->create([
               'title' => $input['title'],
               'fullname' => $input['firstName'].' '. $input['middleName'].' '.$input['surname'],
               'gender' => $input['gender'],
               'nationalities' => $input['country'],
               'occupation' => $input['occupation'],
               'dob' => $input['dob']
           ]);
           $this->contact->create([
               'personId' => $person->id,
               'address' => $input['address'],
               'phone' => $input['phones'],
               'email' => $input['email']
           ]);

           $this->education->create([
               'personId' => $person->id,
               'school' => $input['hschool']['name'],
               'schType' => 'high school',
               'year' =>$input['hschool']['year']
           ]);
           $this->education->create([
               'personId' => $person->id,
               'school' => $input['hschool']['name'],
               'schType' => 'junior school',
               'year' =>$input['hschool']['year']
           ]);

           $this->education->create([
               'personId' => $person->id,
               'school' => $input['hschool']['name'],
               'schType' => 'University',
               'year' =>$input['hschool']['year']
           ]);
           $this->member->create([
               'personId' => $person->id,
               'skills' => $input['skills'],
               'remarks' => $input['remarks']
           ]);

           if($request->file('file')){
               $destination = public_path().'/media';
               $original =  $request->file('file')->getClientOriginalName();
               $rename = $person->id.'28'.rand(4, 10).'.'.$request->file('file')->getClientOriginalExtension();

               $request->file('file')->move($destination, $rename);
               $this->file->create([
                   'personId' => $person->id,
                   'fileOriginalName' =>$original,
                   'renameFile' => $rename ,
                   'directory' =>$destination
               ]);
           }

        flash()->overlay("you have successfully  registered! call this number 7052217","Nice");
        return redirect()->back();
       }
       if ($validator->fails()) {

            return redirect('signup')
                        ->withErrors($validator)
                        ->withInput();
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if(urlRequest::has('setstatus')){
            $setStatus =  (int)urlRequest::get('setstatus');
            $member = Member::find($id);
            $member->status = $setStatus;
            $member->save();
            return redirect()->back();
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $data = $this->member->whereId((int)$id)->with('person.contacts','person.files', 'person.education')->first();
      return view('admin.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $member = $this->member->find((int)$id);

        if(!$member) return  redirect()->to('approved');

        $member->delete();

        return redirect()->to('approved');
    }


    public function showApproved(){

$data = Member::approved()->with('person.contacts','person.files', 'person.education')->paginate(50);
        // $data = Member::->paginate(50);
        return view('admin.approved', compact('data'));
    }
    public function showUnapproved(){
        $data = Member::unapproved()->paginate(50);
        return view('admin.unapproved', compact('data'));
    }
}
