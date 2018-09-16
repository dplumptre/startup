<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		$this->middleware('auth');
    }






    function add_user()
    {
        return view('admin/add-user');
    }
    
    
    function view_user()
    {
        $data = user::All();
        return view('admin/view-user', compact('data'));
    }
    
    public function store_user(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'email' => 'required|email',     
            ]);
    
            $role_user = Role::where('slug','user')->first();
       
               $user1 = new User();
               $user1->name = $request->name;
               $user1->email  = $request->email;
               $user1->password = bcrypt('oh12345');
               $user1->save();
               $user1->roles()->attach($role_user);
       
    
        if ($user->save()) {
      $request->Session()->flash('message.content', 'user was successfully added!');
      $request->session()->flash('message.level', 'success');
        }
            return redirect('admin/view-user');
    
    }
    
    
    
    public function edit_user($id)
    {
        $data = user::find($id);
        return view('admin.edit-user',compact('data'));
    }
    
    public function update_user(Request $request,$id)
    {
        $validatedData = $request->validate([
            'user' => 'required|string|max:50'			  
        ]);
       user::find($id)->update([
          'slug' => $request->user,
          'user' => user($request->user),
           ]);
    
    
       $request->Session()->flash('message.content', 'user updated successfully!');
       $request->session()->flash('message.level', 'success');
       return redirect()->route('admin.view.user');
    }  
    
    
    
    public function delete_user(user $user){
        $user->delete($user);
        return redirect()->route('admin.view.user');
    }
    
    
    





}
