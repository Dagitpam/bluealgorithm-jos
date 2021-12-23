<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Contact;
use App\Blog;
use App\Applicant;
use App\Certificate;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
  
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //validate
     $this->validate($request, [
         'name'=>'required',
         'email'=>'required',
         'subject'=>'required',
         'message'=>'required'
     ]);
        $post = new Contact();
        $post-> name = $request->input('name');
        $post-> email = $request->input('email');
        $post-> subject = $request->input('subject');
        $post-> message = $request->input('message');
        $post->save();
        return back()->with('success','Your message has been submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blogs = Blog::find($id);
       $blogs->news_image;
        return view('pages.view-blog')->with('blogs',$blogs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function blog()
    {
        $blogs = Blog::orderBy('created_at','DESC')->paginate(4);
        
        return view('pages.blog')->with('blogs',$blogs);
    }
    public function certificate()
    {
        return view('pages.certificate');
    }
    public function verify_cert(Request $request)
    {
        $getValue = $request->input('search');
        $certificates = Certificate::where('cert_id',$getValue)->get();
        // $result = array(
        //     'certificates'=>$certificates
        // );

        // return response()->json($result,200);
        
         return view('pages.view_certificate')->with('certificates',$certificates);
    }
    public function view_cert()
    {
        return view('pages.view_certificate');
    }
    public function application(){
        return view('pages.application');
    }
    public function store_application(Request $request)
    {
     //validate
     $this->validate($request, [
         'firstname'=>'required',
         'lastname'=>'required',
         'phone'=>'required',
         'email'=>'required|unique:applicants',
         'address'=>'required',
         'gender'=>'required',
         'occupation'=>'required',
         'course'=>'required'
     ]);
     $email = $request->input('email');
        $post = new Applicant();
        $post-> firstname = $request->input('firstname');
        $post-> lastname = $request->input('lastname');
        $post-> phone = $request->input('phone');
        $post-> email = $request->input('email');
        $post-> address = $request->input('address');
        $post-> gender = $request->input('gender');
        $post-> occupation = $request->input('occupation');
        $post-> course = $request->input('course');
        $post->save();    
        $to = $email;
        $subject = "Dear Aspirant, ";
        $content = "<p>Thank you for applying to Blue Algorithm Technologies Academy, </p> <br>
                    <p>Your application is under review. </p>
                    <p>You will be notify in few days when the list of successful aspirants is shortlisted. </p>
                   <p>Thanks and best regards</p>
                   <h4>Blue Algorithm Technologies Limited<h4>";
        $from = "brytosoft@gmail.com ";
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
         
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
        // Compose a simple HTML email message
        $message = '<html><body>';
       
        $message .= '<i style="color:#080;font-size:15px;">Subject:'.$subject.'</i>';
     
        $message .= '<br>';
        $message .= '<p style="color:#080;font-size:13px;">'.$content.'</p>';
        $message .= '<br>';
        $message .= '<a href=\'https://www.bluealgorithmtechnologies.com/\'>https://www.bluealgorithmtechnologies.com/</a>';
        $message .= '</body></html>';
        
        // Sending email
        if(mail($to, $subject, $message, $headers)){
            echo $to;
            
            // return 'Your mail has been sent successfully.';
            // return response()->json(['success'=>'success']);
        } else{
            echo "failed to";
            // return 'Unable to send email. Please try again.';
            // return response()->json(['notsent'=>'notsent']);
        }  
        
         
    
        return back()->with('success','Your application has been submitted successfully!');
    }
 
}
