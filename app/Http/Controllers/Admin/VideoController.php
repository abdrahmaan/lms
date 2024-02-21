<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $Teachers = Teacher::all();
        return view("admin.video.create" , ["Data" => $Teachers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "teacher_id" => 'required',
            "video_name" => 'required',
            "video_url" => 'required',
            "price" => 'required',
            "commission" => "required|lte:price", 
            "max_watch" => "required", 
        ],[
            "teacher_id.required" => 'من فضلك أدخل مدرسين أولاً',
            "video_name.required" => 'إسم الفيديو مطلوب',
            "video_url.required" => 'عنوان الفيديو مطلوب',
            "price.required" => 'سعر الفيديو مطلوب',
            "commission.required" => "نسبة المنصة مطلوبة", 
            "commission.lte" => "نسبة المنصة يجب أن تكون أقل من السعر   ", 
            "max_watch.required" => "أقصى عدد مشاهدات مطلوب", 
        ]);

        $Teacher = Teacher::where("id",$request->teacher_id)->first();

       $insert = Video::create([
            "teacher_id" => $request->teacher_id,
            "teacher_name" => $Teacher->Name,
            "classroom" => $request->classroom,
            "video_name" => $request->video_name,
            "video_url" => $request->video_url,
            "price" => $request->price,
            "max_watch" => $request->max_watch,
        ]);

        if ($insert) {
            session()->flash("message","تم إضافة الفيديو بنجاح");
            return redirect()->back();
        } else {
            session()->flash("error","يوجد مشكلة فى قواعد البيانات");
            return redirect()->back();
        }

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
}
