<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Studient;
use Illuminate\Http\Request;

class StudientController extends Controller
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
        return view("admin.studient.create");
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
            "name" => "required",   
            "phone_number" => 'required|unique:studients,phone|digits:11',
            "parent_phone" => 'required|digits:11',
            "username" => 'required|unique:studients,Username|regex:/^[a-zA-Z]+$/',
        ],[
            "name.required" => "من فضلك إسم المدرس مطلوب",
            "phone_number.required" => "رقم التليفون مطلوب",
            "phone_number.unique" => "رقم التليفون مسجل من قبل",
            "phone_number.digits" => "من فضلك أدخل رقم تليفون صحيح",
            "parent_phone.required" => "رقم ولى الأمر مطلوب",
            "parent_phone.digits" => "من فضلك أدخل رقم ولى أمر صحيح",
            "username.required" => "إسم المستخدم مطلوب",
            "username.unique" => "إسم المستخدم مسجل من قبل",
            "username.regex" => "إسم المستخدم باللغة الإنجليزية بدون مسافات",
        ]);

        $insert = Studient::create([
            "name" => $request->name,
            "phone" => $request->phone_number,
            "parent_phone" => $request->parent_phone,
            "username" => $request->username,
            "classroom" => $request->classroom,
            "area" => $request->area,
        ]);

        if ($insert) {
            session()->flash("message","تم إضافة الطالب بنجاح");
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
