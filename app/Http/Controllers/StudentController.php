<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration_Model;

class StudentController extends Controller
{

//register
    public function register()
    {
        return view('register');
    }
    public function save(Request $request)
    {
        $name = $request->input()['name'];
        $email = $request->input()['email'];
        $password = $request->input()['password'];
        $repeat_password = $request->input()['repeat_password'];


        $students = new Registration_Model;
        $students['name'] = $name;
        $students['email'] = $email;
        $students['password'] = $password;
        $students['repeat_password'] = $repeat_password;
        $students->save();

        return view('about');
    }

//list
    public function list()
    {
        $students = Registration_Model::all();
        return view('lists', ['student_profile' => $students]);
    }

//edit
    public function edit(Request $request, $id) {
        $students =  Registration_Model::find($id);
        $response = ['students' => $students];
        return view('edit', $response);
    }

//save
    public function saveUpdate(Request $request, $id) {
        $data = [
            'name' => $request->input()['name'],
            'email' => $request->input()['email'],
            'password' => $request->input()['password'],
            'repeat_password' => $request->input()['repeat_password']
    
        ];
        $updated_students = Registration_Model::where('id',$id)->update($data);

        return redirect(route('list'))->with('status', 'Successfully updated');
    }

//delete

   public function delete($id) {
     $students = Registration_Model::find($id);
     $students->delete();
     return redirect(route('list'))->with('status','Successfully Deleted');
}


    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
    public function login()
    {
        return view('register');
    }
    public function home()
    {
        return view('home');
    }

}