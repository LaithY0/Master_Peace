<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Slider;
use App\Models\Coachesl;
use App\Models\Subscription_price;
use App\Models\Subscription;
use Illuminate\Database\QueryException;


class UsersController extends Controller
{
    
    public function index (){
        $data= Users::all();
        return view('admin.users',compact('data'));
    }
    public function home () {

        $slider= Slider::all();
        $classes= Classes::all();
        $coaches= Coachesl::all();
        $price = Subscription_price::all();


        return view('home', compact('slider', 'classes', 'coaches', 'price'));
        
    }


    public function services () {
       
        $price = Subscription_price::all();
        return view('services', compact('price'));
    }

    public function product () {
        return view('product');
    }

    public function contact () {
        return view('contact');
    }

    public function team () {
        return view('team');
    }

    public function about () {
        $data= Coachesl::all();
        return view('about',compact('data'));
    }

    public function admin () {
        return view('admin.index');
    }

    public function dashbord () {
        $users = Users::all();
        $subscriptions = Subscription::all();
        $classes= Classes::all();
        $subCount = $subscriptions->count();
        $totalPrice = $subscriptions->sum('price');
        $clasCount = $classes->count();
        $userCount = $users->count(); 
        return view('admin.dashbord', compact('userCount' , 'subCount' , 'totalPrice' , 'clasCount'));
    }
    public function Aproduct () {
        return view('admin.product');
    }

    public function users () {

        $data= Users::all();
        return view('admin.users',compact('data'));

    }


    public function profile () {
        return view('user');
    }





    

    public function saveedit (Request $request) {
        $data_input = $request->validate([
            'fname' => 'nullable|alpha|min:3',
            'lname' => 'nullable|alpha|min:3',
            'email' => 'nullable|email',
            'phone' => 'nullable|numeric|min:10',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:7000',
        ]);
        
       
        $id = $request->id;

        $user = Users::find($id);

        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->subscription_s = $request->input('subscription_s');
        $user->subscription_e = $request->input('subscription_e');

        if ($request->hasFile('photo')) {
            $data_input = $request->file('photo');
            $filename =  $data_input->getClientOriginalName();
            $data_input->move(public_path('assets/images'), $filename);
            $user->photo = $filename;
        }

        $user->save();

        return(redirect('/users'))->with('success', 'The modifications have been saved');
    }








    public function adduser () {
        return view('admin.addUser');
    }






    public function edituser ($id) {
        $sub = Subscription::where('user_id', $id)->get();
        $user = Users::find($id);

        return view('admin.editUser' ,compact('user', 'sub')); 
    }








    public function add (Request $request) {

        $data_input = $request->validate([
            'fname' => 'required|alpha||min:3|max:255',
            'lname' => 'required|alpha||min:3|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric', 
            'password' => 'max:255|min:5',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:7000',]);
        
            $filename = null;

            
        if ($request->hasFile('photo')) {
            $data_input = $request->file('photo');
            $filename =  $data_input->getClientOriginalName();
            $data_input->move(public_path('assets/images'), $filename);
    
        }

        $user = new Users([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => ($request['password']), 
            'subscription_s' => $request['subscription_s'],
            'subscription_e' => $request['subscription_e'],
            'photo' => $filename, 
        ]);

        
        $user->save();

        return(redirect('/users'))->with('success', 'The user has been added successfully');

    }

   
    public function deleteuser($id) {
        try {
           
            Users::destroy($id);
    
            
            return redirect('/users')->with('success', 'User deleted.');
        } catch (QueryException $e) {
            
            return redirect('/users')->with('success', 'Cannot delete this user because he has an active subscription');
        }
    }


    public function test($id) {

        dd($id);
    }

    
}
