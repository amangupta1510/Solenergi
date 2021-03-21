<?php
namespace App\Http\Controllers;
use Validator;
use Response;
use File;
use Auth;
use Storage;
use PDF;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user')
            ->except('logout');
    }
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    public function index()
    {
        return view('index');
    }
    public function contact_us()
    {
        return view('contact_us');
    }
    public function enquiries()
    {
        return view('enquiries');
    }
    public function find_a_dealer()
    {
        return view('find_a_dealer');
    }
    public function about_us()
    {
        return view('about_us');
    }
    public function company_milestones()
    {
        return view('company_milestones');
    }
    public function offices()
    {
        return view('offices');
    }
    public function learn_about_solar()
    {
        return view('learn_about_solar');
    }
    public function large_projects()
    {
        return view('large_projects');
    }
    public function solutions_for_businesses()
    {
        return view('solutions_for_businesses');
    }
    public function solutions_for_power_producers()
    {
        return view('solutions_for_power_producers');
    }
    public function operation_and_maintenance()
    {
        return view('operation_and_maintenance');
    }
    public function careers()
    {
        return view('careers');
    }
    public function rooftops()
    {
        return view('rooftops');
    }
    public function residencial()
    {
        return view('residencial');
    }
    public function commercial_industrial()
    {
        return view('commercial_industrial');
    }
    public function document()
    {
        return view('document');
    }
    public function financing()
    {
        return view('financing');
    }
    public function remote_monitoring()
    {
        return view('remote_monitoring');
    }
    public function products()
    {
        return view('products');
    }
    public function solar_roof()
    {
        return view('solar_roof');
    }
    public function solar_tree()
    {
        return view('solar_tree');
    }
    public function solar_heater()
    {
        return view('solar_heater');
    }
    public function solar_street_light()
    {
        return view('solar_street_light');
    }
    public function solar_pump()
    {
        return view('solar_pump');
    }
    public function solar_lantern()
    {
        return view('solar_lantern');
    }

    public function enquiry(Request $request)
    {
        $data = array(
            'name' => $request->Name,
            'subject' => $request->Subject,
            'email' => $request->Email,
            'contact' => $request->Phone,
            'message' => $request->Message,
        );
        Mail::to($request->Email)
            ->send(new SendMail($data));
        return view('thank_you');
    }

    public function download(Request $request)
    {
        $file = base_path('public_html/pdf/' . $request->get('id') . '.pdf');
        $headers = array(
            'Content-Type: application/pdf'
        );
        return Response::download($file, $request->get('id') . '.pdf', $headers);

    }

}

