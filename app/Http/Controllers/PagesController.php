<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Contact;
use App\Blog;
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
}
