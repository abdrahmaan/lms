@extends('layout.master')
@section('title',"لوحة التحكم")
    

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">أهلاً بك فى لوحة التحكم</h4>
        </div>
       
        </div>

        <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">عدد السيارات</h6>

                    </div>
                    <div class="row">
                    <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mt-2">{{$Data["carsCount"]}}</h3>
                       
                    </div>

                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">عدد الماركات</h6>

                    </div>
                    <div class="row">
                    <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mt-2">{{$Data["brandCount"]}}</h3>
                       
                    </div>

                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">عدد المستخدمين</h6>

                    </div>
                    <div class="row">
                    <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mt-2">{{$Data["usersCount"]}}</h3>
                       
                    </div>

                    </div>
                </div>
                </div>
            </div>

           
            </div>
        </div>
        </div> <!-- row -->

@endsection