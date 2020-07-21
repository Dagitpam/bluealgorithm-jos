<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Contact;
use App\Blog;
use App\Certificate;
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
        return view('admin.index');
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
}
