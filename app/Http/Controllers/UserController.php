<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        //Del modelo usuario, trae todos
        $users = User::where('age','>',22)->orderBy('age','asc')->get();
        return view('user.index', compact('users'));
    }

    public function create(){
        $user= new User;

        $user->name= "Luis Fernando";
        $user->email= "lui5-fernando@hotmail.com";
        $user->password= Hash::make('123456');
        $user->age= 23;
        $user->address= "Toluca, Lerdo";
        $user->zip_code= 50210;
        $user->save();

        User::create([
            'name' => 'Miguel Angel',
            'email' => 'Mike-Rey@hotmail.com',
            'password' => Hash::make('123456'),
            'age' => 27,
            'address' => 'Toluca, Lerdo',
            'zip_code' => 50210
        ]);

        User::create([
            'name' => 'Victor',
            'email' => 'Veko-Rey@hotmail.com',
            'password' => Hash::make('123456'),
            'age' => 22,
            'address' => 'Toluca, Lerdo',
            'zip_code' => 50210
        ]);
        return redirect()->route('user.index');
    }
}
