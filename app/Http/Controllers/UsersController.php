<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class UsersController extends Controller
{
    //
    public function indexUsers()
    {
        //
     //   users::all();

     $data=User::all();
     return view('admin.adminUser.index',compact('data'));
    }

    public function tambahUsers(Request $request){ //memasukkan data >store
        $data = new User(); 
        $date =Carbon::parse($request->startFrom)->format('d-m-Y H:i:s');        
        $data->username=$request->input('username');
        $pass = $data->password=$request->input('password');
        $data->nama=$request->input('nama');
        $data->email=$request->input('email');
        $data->nohp=$request->input('nohp');
        $data->tanggal_lahir=$request->input('tanggal_lahir');
        $data->created_when=$date;
        $data->update_when=$date;
        $data->password = Hash::make($pass);
       // $pass = $data->password=$request->get('password');
        
        $data->save();
        return redirect('indexUsers') -> with('status', 'Data User Berhasil Ditambah');
      //  return 'berhasil';

        // $table->id();
        // $table->string('username');
        // $table->string('password');
        // $table->string('nama');
        // $table->string('email')->unique();
        // $table->string('nohp');
        // $table->date('tanggal_lahir');
        // $table->date('created_when');
        // $table->date('update_when');

    }
    
    public function editUsers(Request $request, $id){
        // $data=User::find($id);        
        // $data->username=$request->input('username');
        // $data->password=$request->input('password');
        // $data->nama=$request->input('nama');
        // $data->email=$request->input('email');
        // $data->nohp=$request->input('nohp');
        // $data->tanggal_lahir=$request->input('tanggal_lahir');
        // $data->created_when=$request->input('created_when');
        // $data->update_when=$request->input('update_when');
        // $data->save();
        // return redirect('admin.adminUser') -> with('status', 'Data User Berhasil Diedit');
        $data=User::find($id); //get data
        return view('admin.adminUser.edit',compact('data'));

    }

    public function deleteUsers($id){
        $data=User::find($id);
           $data->delete();
           return back();
       }

    public function updateUsers(Request $request, $id)
    {
        $data = User::findOrFail($id); //model
        $date =Carbon::parse($request->startFrom)->format('d-m-Y H:i:s');
        //$data->username=$request->get('username');
        $pass = $data->password=$request->input('password');
        $data->nama=$request->get('nama');
        $data->email=$request->get('email');
        $data->nohp=$request->get('nohp');
        $data->tanggal_lahir=$request->get('tanggal_lahir');
        $data->created_when=$date;
        $data->update_when=$date;
        $data->password = Hash::make($pass); //CREATE HASH
        $data->save();
        return redirect('indexUsers') -> with('status', 'Data User Berhasil DiUpdate');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.adminUser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }

}
