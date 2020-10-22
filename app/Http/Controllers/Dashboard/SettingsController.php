<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{



    public function __construct()
    {
        $this->middleware('permission:read_settings')->only(['index']);
        $this->middleware('permission:update_settings')->only(['update']);

    }



    public function index()
    {
         if (Settings::all()->first()==null){
             $settings =Settings::create();

         }else{
             $settings =Settings::all()->first();

         }

        return view('dashboard.settings.index',compact('settings'));
    }


    public function update(Request $request, $id)
    {
        $settings=Settings::findOrFail($id);
        $settings->update($request->all());
        return redirect()->route('dashboard.settings.index') ->with('success' , 'تم التعديل بنجاح ');

    }
}
