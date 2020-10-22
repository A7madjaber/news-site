<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Mail\ReplayMail;
use App\Models\MailReplay;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MailController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:read_mails')->only(['index,show']);
        $this->middleware('permission:create_mails')->only(['replay']);
        $this->middleware('permission:delete_mails')->only(['destroy']);

    }



    public function getDataTableMails(Mail $items){

        try {
            return DataTables::of($items->orderBy('created_at', 'DESC'))->editColumn('created_at', function ($item) {
                return get_date_from_timestamp($item->created_at);
            })

                ->addColumn('action', function ($item) {


                    if(Auth()->user()->hasPermission('delete_mails')) {

                        return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">'


                            . '<button type="button"   data-url="' . route('dashboard.mail.show', [$item->id]) .'"  class="m-btn btn btn-info m-btn--icon m-btn--icon-only btn-icon btn-href"><i class="flaticon-multimedia-2"></i></button>'


                            . '<button  type="button" data-url="' . route('dashboard.mail.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		           
		            </div>';

                    }

                    return '<div class="m-btn-group  btn-group" role="group" aria-label="Button group with nested dropdown">'

                        . '<button  type="button"   data-url="' . route('dashboard.mail.show', [$item->id]) .'"  class="m-btn btn btn-info m-btn--icon m-btn--icon-only btn-icon btn-href">
                                 <i class="flaticon-multimedia-2"></i></button>'


                        . '<button  disabled type="button" data-url="' . route('dashboard.mail.delete', [$item->id]) . '" class="m-btn btn btn-danger m-btn--icon m-btn--icon-only btn-icon delete"><i class="fa fa-trash-alt"></i></button>
		           
		            </div>';



                })->rawColumns(['action'])->make(true);
        } catch (\Exception $e) {
            return $this->response_api(false, '');
        }
    }



    public function index(){

        $mail = Mail::all();
        return view('dashboard.mail.all', compact('mail'));
    }



    public function show($id)
    {
        $mail=Mail::findOrFail($id);

        $mail->update(['read_id' =>1]);

        return view('dashboard.mail.view',compact('mail'));


    }


    public function destroy($id)
    {

        $mail=Mail::findOrFail($id);
        $mail->delete();
        return response()->json(['message'=>'تمت العملية بنجاح','status'=>true],200);
    }



    public function replay($id, Request $request)
    {



        $mail = mail::find($id);

        $email = str_replace(' ', '', $mail->email);

        \Illuminate\Support\Facades\Mail::to($email,'موقع اخباركم')->send(new ReplayMail('رد على الرسالة المرسلة منك الى موقعنا اخباركم', $request->text,$mail->email));

        if ((count( \Illuminate\Support\Facades\Mail::failures()) > 0)) {
            return response()->json(['status' => false, 'message' => 'حدث خطأ أثناء الإرسال ']);
        }


        MailReplay::create ($request->all());
        return response()->json(['status' => true, 'message' => 'تم إرسال ردك بنجاح ']);
    }


}
