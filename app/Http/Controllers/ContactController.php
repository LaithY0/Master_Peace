<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    
   public function snedComment (Request $request){

        $data_input = $request->validate([
        'name' => 'required|alpha||min:3|max:255',
        'email' => 'required|email',
        'phone' => 'required|numeric', 
        'comment' => 'required|min:4|max:255',]);


        $comment = new Contact([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'comment' => $request['comment'], 
            
        ]);

        
        $comment->save();

        return(redirect('/contact'))->with('success', 'Your comment was sent successfully ');


   }


   public function comment(){
    $user = Contact::all();
    return view('admin.contact' ,compact('user'));
   }

   public function deletecomment($id){

        $commint = Contact::find($id);
     
        $commint->delete();
     
        return(redirect('/comment'))->with('success', 'Comment deleted .');
     
   }
}
