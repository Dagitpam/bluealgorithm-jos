<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Deposite;
use App\Pdf;
use App\Video;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payments = User::where('email',Auth::user()->email)->get();
        return view('user.index')->with('payments',$payments);
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
        //
        
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
    public function deposite(Request $request)
    {
        $this->validate($request, [
            'account_name'=>'required',
            'amount'=>'required',
            'method_of_deposite'=>'required',
            'phone_number'=>'required',
        ]);
        $deposite = Deposite::where('email', Auth::user()->email)->get();
        if (count($deposite) > 0) {
            return back()->with('error','Sorry form submitted already');
        } else {
            $post = new Deposite();
            $post-> email = Auth::user()->email;
            $post-> account_name = $request->input('account_name');
            $post-> amount = $request->input('amount');
            $post-> method_of_deposite = $request->input('method_of_deposite');
            $post-> phone_number = $request->input('phone_number');
            $post->save();
            return back()->with('success','Form Submitted successfully. Your transaction is under review!');
        }
        
       
    }
    public function receipt()
    {
        $details = User::where('id',Auth::user()->id)->get();
        
        return view('user.receipt')->with('details',$details);
    }
    public function view_profile()
    {
        $result = User::where('email',Auth::user()->email)->get();
        $countResult = count($result);
        $results = array(
            'result'=>$result,
            'countResult'=>$countResult
        );
        
    
        return view('user.profile')->with('results',$results);
    }
    public function update_profile(Request $request)
    {
        
        // $id = $request->input('userId');
        $email = $request->input('email');
        $post = User::find(Auth::user()->id);
        $post-> fName = $request->input('fName');
        $post-> mName = $request->input('mName');
        $post-> lName = $request->input('lName');
        $post-> email = $email;
        $post-> phone = $request->input('phone');
        $post-> residArea = $request->input('residArea');
        $post->save();
        // Updating th email in user table too
        $updateUserTble = User::find(Auth::user()->id);
        $updateUserTble-> email = $email;
        $updateUserTble->save();
       return back()->with('success','Profile updated successfully!');
    }
    public function change_password(Request $request)
    {
        $id = $request->input('userId');
        $user= User::find($id);
        
        $newPassword = $request->input('new-password');
        $confirmPassword = $request->input('confirm-password');

       
       if ($newPassword !=$confirmPassword) {
           return back()->with('error','Password do not match!');
       } else {
        $user-> password = Hash::make($newPassword);
        $user->save();
        return back()->with('success','Password Change Successfully!');
       }    
        
    }
    public function upload_image(Request $request)
    {
        $id = "";
        $this->validate($request,[
            'images'=>'required'
        ]);
        if ($request->hasFile('images')) {
            //Get file with extension
            $fileNameWithExt = $request->file('images')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get just ext
           $extension = $request->file('images')->getClientOriginalExtension();
            //File to store
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            //Upload the image
            $path = $request->file('images')->storeAs('public/profile_images', $fileNameToStore);

       } else {
        $fileToStore = 'noImage.jpg';
        
       }
    //    $ids = $request->input('userId');
       $update = User::find(Auth::user()->id);
       $update-> image = $fileNameToStore;
       $update->save();
       return back()->with('success','Image updated successfully!');
    }
    public function video()
    {
        $videos = Video::orderBy('created_at','DESC')->paginate(8);
        // return $i = $videos[0]['video_link'];
        return view('user.video')->with('videos',$videos);
    }
    public function file()
    {
        $pdfs = Pdf::orderBy('created_at','DESC')->paginate(8);
        // return $i = $videos[0]['video_link'];
        return view('user.pdf')->with('pdfs',$pdfs);
    }
}
