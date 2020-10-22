<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileEditRequest;
use App\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use function GuzzleHttp\Promise\all;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
     {

         $id=auth()->user()->id;
         $profile=User::findOrFail($id);
         return view('dashboard.profile.index',compact('profile'));

     }



    public function update(ProfileEditRequest $request, $id){

        $user=User::find($id);

    if ($request->password_confirmation == null) {
        $password=$user->password;

    }else{

        $password= Hash::make($request->password);
    }



        if ($user->image != null and $user->image!=$request->image){

            Storage::delete('uploads/images/'. $user->image);
            app('App\Logic\ImageRepository')-> delete($user->image);
        }



          $request->user()->fill([
            'password' =>($password),
            'name'=>($request->name),
            'email'=>($request->email),
            'image'=>($request->image),

        ])->save();


      return back()->with('success' , 'تم التعديل  بنجاح ');


     }

}
