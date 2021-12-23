<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Contact;
use App\Blog;
use App\Certificate;
use App\Deposite;
use App\Video;
use App\Pdf;
use App\Applicant;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $applicants = Applicant::all();
        $users = User::where('phone', '!=', null)->get();
        return view('admin.index',compact('applicants','users'));
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
        $fileNameToStore="";
        $this->validate($request,[
            'news-title'=>'required',
            'news-body'=>'required',
        ]);
         //Handle file upload
         if ($request->hasFile('image')) {
            //Get file with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just ext
           $extension = $request->file('image')->getClientOriginalExtension();
            //File to store
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            //Upload the image
            $path = $request->file('image')->storeAs('public/news_images', $fileNameToStore);

       } else {
        $fileToStore = 'noImage.jpg';
       }

        $post = new Blog();
        $post-> news_title = $request->input('news-title');
        $post-> news_body = $request->input('news-body');
        $post-> news_image = $fileNameToStore;
        $post->save();
        return back()->with('success','News added successfully!'); 

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
    public function members()
    {
        //
        $members = User::orderBy('created_at','DESC')->paginate(20);
        
        return view('admin.members')->with('members',$members);
    }
    public function contacts()
    {
        //
        $contacts = Contact::orderBy('created_at','DESC')->paginate(20);
        return view('admin.contact')->with('contacts',$contacts);
    }
    public function news(){
        $news = Blog::orderBy('created_at','DESC')->paginate(20);
        return view('admin.news')->with('news',$news);
    }
    public function add_cert(Request $request)
    {
        //validate
        $fileNameToStore="";
        $this->validate($request,[
            'names'=>'required',
            
        ]);
         //Handle file upload
         if ($request->hasFile('image')) {
            //Get file with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just ext
           $extension = $request->file('image')->getClientOriginalExtension();
            //File to store
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            //Upload the image
            $path = $request->file('image')->storeAs('public/profile', $fileNameToStore);

       } else {
        $fileToStore = 'noImage.jpg';
       }

        $post = new Certificate();
        $post-> cert_id = 1;
        $post-> names = $request->input('names');
        $post-> course = $request->input('course');
        $post-> image = $fileNameToStore;
        $post->save();
        // Updating cert_id field with random gene number
        $getId = $post->id; 
        $generateId = "BLG".$getId * 76/2 *3*4;
        $findId = Certificate::find($getId);
        $findId-> cert_id = $generateId;
        $findId->save(); 
        return back()->with('success','Certicate added successfully!'); 

    }
    public function certificate()
    {
        $certificates = Certificate::orderBy('created_at','DESC')->paginate(20);
        return view('admin.certificate')->with('certificates',$certificates);
    }
   public function deposite()
    {
        $deposites = Deposite::orderBy('created_at','DESC')->paginate(20);
        return view('admin.deposite')->with('deposites',$deposites);
    }
    public function delete_deposite(Request $request)
    {
        $id = $request->input('deposite_id');
        $del = Deposite::find($id);
        $del->delete();
        return back()->with('success','Deposite deleted successfully!');
    }
    public function approve_deposite(Request $request)
    {
        $deposite_id = $request->input('deposite_id');
        $getEmail = User::where('email',$deposite_id)->get();
        $id = $getEmail[0]['id'];
        $update = User::find($id);
        $update-> transStatus = 'success';
        $update->save();
        $collection = Deposite::where('email',$deposite_id)->get();
        $del_id = $collection[0]['id'];
        $del = Deposite::find($del_id);
        $del->delete();
        return back()->with('success','Approve successfully!');

    }
    public function file_upload(Request $request)
    {
        $this->validate ($request,[
            'filename'=>'required',
            'course'=>'required',
            'file'=>'required',
            'comment'=>'required'
        ]);
        if ($request->hasFile('file')) {
            //Get file with extension
            $fileNameWithExt = $request->file('file')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just ext
           $extension = $request->file('file')->getClientOriginalExtension();
            //File to store
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            //Upload the image
            $path = $request->file('file')->storeAs('public/file_folder', $fileNameToStore);

       } else {
        $fileToStore = 'noImage.jpg';
        
       }
        $post = new Pdf();
        $post-> filename =$request->input('filename');
        $post-> course = $request->input('course');
        $post-> file = $fileNameToStore;
        $post-> comment =$request->input('comment');
        $post->save();
        return back()->with('success','File uploaded successfully!');
        
    }
    public function file()
    {
        $pdfs = Pdf::orderBy('created_at','DESC')->paginate(20);
        return view('admin.pdf')->with('pdfs',$pdfs);
    }
    public function destroy_file(Request $request)
    {
        $id = $request->input('fileid');
        $kill = Pdf::find($id);
        $kill-> delete();
        return back()->with('success','Video deleted successful!');
    }
    public function deleteUser(Request $request)
    {
        $id = $request->input('id');
        $kill = User::find($id);
        $kill-> delete();
        return back()->with('success','User deleted successful!');
    }
    public function video()
    {
        $videos = Video::orderBy('created_at','DESC')->paginate(20);
        return view('admin.video')->with('videos',$videos);
    }
    public function video_upload(Request $request)
    {
        $this->validate ($request,[
            'link'=>'required',
            'course'=>'required',
            'comment'=>'required'
        ]);
        $post = new Video();
        $post-> video_link = $request->input('link');
        $post-> comment = $request->input('comment');
        $post-> course = $request->input('course');
        $post->save();
        return back()->with('success','Video uploaded successfully!');
        
    }
    public function destroy_video(Request $request)
    {
        $id = $request->input('videoId');
        $kill = Video::find($id);
        $kill-> delete();
        return back()->with('success','Video deleted successful!');
    }
    public function applicants(Request $request)
    {
        $applications = Applicant::orderBy('created_at','DESC')->paginate(20);
        
        return view('admin.application')->with('applications',$applications);
    }
    public function sendMail()
    {
        
       try {
           //code...
           $emails = Form::where('date','=','2021')->where('kid_state_of_origin','Plateau')->pluck('p_email');
           foreach($emails as $email) { 
               
               $to = $email;
             $subject = "Hello ";
             $content = " <p>We wish to inform you, that you have been invited for a physical screening, which is the final stage of your application; </p>
                        <p>Click the link below to download the attachment for more details... </P>
                        <p>Thanks and best regards</p>";
             $from = "kidscodeclubafrica@gmail.com ";
             
             $headers  = 'MIME-Version: 1.0' . "\r\n";
             $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
              
             // Create email headers
             $headers .= 'From: '.$from."\r\n".
                 'Reply-To: '.$from."\r\n" .
                 'X-Mailer: PHP/' . phpversion();
                 
             // Compose a simple HTML email message
             $message = '<html><body>';
            
             $message .= '<i style="color:#080;font-size:15px;">'.$subject.'</i>';
          
             $message .= '<br>';
             $message .= '<p style="color:#080;font-size:13px;">'.$content.'</p>';
             $message .= '<br>';
             $message .= '<a href=\'https://docs.google.com/document/d/1-ZPsCylB9clifi_CasOepAXWzu1kCjlS/edit?usp=drivesdk&ouid=111283466780352985646&rtpof=true&sd=true \'>Download attachment for more details</a>';
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
                   
               
                 
                  
             
           }
         
       } catch (\Throwable $th) {
           //throw $th;
           return $th;
       }
           
     }
        public function testEmail()
        {
            // Instantiation and passing `true` enables exceptions
            // require 'PHPMailer/vendor/autoload.php';
             $mail = new PHPMailer(true);
        
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.googlemail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'dagitpam@gmail.com';                     // SMTP username
                $mail->Password   = 'sirpamex';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port       = 587;                                    // TCP port to connect to
        
                //Recipients
                $mail->setFrom('dagitpam@gmail.com', 'Your Sender Title');
                $mail->addAddress('emmanuelpam49@gmail.com', 'Mubeen');     // Add a recipient
                $mail->addAddress('dagitmary@gmail.com');               // Name is optional
        
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
               
                $mail->send();
                return 'Message has been sent';
            } catch (Exception $e) {
                return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
         
    
}
