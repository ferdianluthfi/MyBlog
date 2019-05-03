<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use Validator;

class ContentController extends Controller
{
    //
    public function index(){
        $content1 = \DB::table('contents')->where('id',1)->get();
        $content2 = \DB::table('contents')->where('id',2)->get();
        $content3 = \DB::table('contents')->where('id',3)->get();
        $content4 = \DB::table('contents')->where('id',4)->get();

        return view('home',compact('content1', 'content2', 'content3', 'content4'));

    }
    public function edit($id){
        $content = \DB::table('contents')->where('id',$id)->get();
       
	    return view('update',["id" => $id, "content" => $content]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
		    'content' => 'required'
        ]);  

        if($validator->fails()) {
            session()->flash('error', 'Ada kesalahan input');
            return redirect('/ubah/$request->id')
                ->withErrors($validator)
                ->withInput();
        } else {
            \DB::table('contents')->where('id',$request->id)->update([
                'title' => $request->title,
                'content' => $request->content,
                'updated_at' => now('GMT+7')
            ]);
            return redirect('/');
        }
    }

}
