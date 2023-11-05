<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
   
    function subscriptions () {
        
        $subscriptions = Subscription::all();
         $userIdsInSubscriptions = $subscriptions->pluck('user_id')->unique()->toArray();
         $users = Users::whereIn('id', $userIdsInSubscriptions)->get();

        
          return view('admin.subscriptions', compact('users' , 'subscriptions'));
    }


    public function delete($id) {
       
        Subscription::where('user_id', $id)->delete();
    
        return redirect('/subscriptions')->with('success', 'Subscription deleted.');
    }
    
    
}
