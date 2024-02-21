<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return dd("view Teacher");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.teacher.create");
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
            "fullname" => "required",   
            "phone_number" => 'required|unique:teachers,Phone|digits:11',
            "username" => 'required|unique:teachers,Username|regex:/^[a-zA-Z]+$/',
            "commission" => "required", 
            "wallet" => "required", 
        ],[
            "fullname.required" => "من فضلك إسم المدرس مطلوب",
            "phone_number.required" => "رقم التليفون مطلوب",
            "phone_number.unique" => "رقم التليفون مسجل من قبل",
            "phone_number.digits" => "من فضلك أدخل رقم تليفون صحيح",
            "username.required" => "إسم المستخدم مطلوب",
            "username.unique" => "إسم المستخدم مسجل من قبل",
            "username.regex" => "إسم المستخدم باللغة الإنجليزية بدون مسافات",
            "commission.required" => "النسبة المتفق عليها مطلوبة",
            "wallet.required" => "الرصيد الإفتتاحى مطلوب",
        ]);

        $insert = Teacher::create([
            "Name" => $request->fullname,
            "Phone" => $request->phone_number,
            "Username" => $request->username,
            "Commission" => $request->commission,
            "Wallet" => $request->wallet,
        ]);

        if ($insert) {
            session()->flash("message","تم إضافة المدرس بنجاح");
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
