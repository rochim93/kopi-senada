<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants = Participant::all();
        return view('dashboard.index')->withParticipants($participants);
    }

    public function indexParticipant()
    {
        $participants = Participant::all();
        return view('dashboard.participant.index')->withParticipants($participants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function totalSeats()
    {
        //
    }

    public function availableSeats()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeParticipant(Request $request)
    {
        // validasi data
        $this->validate($request, array(
                'name'          => 'required',
                'email'         => 'required|string|email|max:255|unique:users',
                'birth'         => 'required',
                'address'       => 'required',
                'institutions'  => 'required',
                'phone'         => 'required',
                'gender'        => 'required',
                'payment'       => 'required'
            ));

        $participant = new Participant;
        $participant->id_participant = $this->getParticipantId();
        $participant->name = $request->name;
        $participant->email = $request->email;
        $participant->birth = $request->birth;
        $participant->address = $request->address;
        $participant->institutions = $request->institutions;
        $participant->phone = $request->phone;
        $participant->gender = $request->gender;
        $participant->payment = $request->payment;
        $participant->save();

        // flash messages
        $request->session()->flash('status', 'Registration Success!');
        // redirect ke halaman
        return redirect()->back();
    }

    public function getParticipantId(){
       do {
           $rand = $this->generateRandomString(6);
        } while(!empty(Participant::where('id_participant',$rand)->first()));
          return $rand;
    }



    public function generateRandomString($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
     }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
