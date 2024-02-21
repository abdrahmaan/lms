@extends('layout.master')
@section('title',"إضافة مستخدم")
    

@section('content')

<div>
    <h4 class="mb-4">إضافة مستخدم جديد</h4>
</div>

<div class="row">

        
    <div class="col-12">
        <form id="new-user" action="/new-user" method="POST">
            @csrf
            <!-- بيانات السيارة -->
            <div class="card my-3">
                <div class="card-header d-flex align-items-center">   
                    <h3 class="card-title m-0">بيانات المستخدم</h3>
                    <div class="card-tools mx-3">
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#car-data" aria-expanded="true" aria-controls="car-data">
                            <i data-feather="plus"></i>
                        </button>
                        
                    </div>
                </div>
                <div class="collapse show" id="car-data">
                    <div class="card-body">
                        <div class="row justify-content-start">
                              <!-- إسم الشخص  -->
                              <div class="col-lg-4">
                                <div class="form-group  mx-2 d-block">
                                    <label for="name" class="text-right w-100 my-1">الإسم</label>
                                    <input name="name" type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="الإسم">
                                </div>
                            </div>
                            <!-- إسم المستخدم  -->
                            <div class="col-lg-4">
                                <div class="form-group  mx-2 d-block">
                                    <label for="username" class="text-right w-100 my-1">إسم المستخدم</label>
                                    <input name="username" type="text" class="form-control text-right" id="exampleInputEmail1" placeholder="إسم المستخدم">
                                </div>
                            </div>
                            
                            <!-- كلمة السر  -->
                            <div class="col-lg-4">
                                    <div class="form-group  mx-2 d-block">
                                        <label for="password" class="text-right w-100 my-1">كلمة السر</label>
                                        <input name="password" type="password" class="form-control text-right" id="exampleInputEmail1" placeholder="كلمة السر">
                                    </div>
                             </div>      
                                                
                        </div>

                
                    </div>

                    <div class="card-footer text-right">
                        <div class="d-flex justify-content-between  align-items-center">
                            بيانات المستخدم التى تمكنه من الدخول للوحة التحكم
                            <button  type="submit" class="btn btn-success">إضافة مستخدم</button>

                        </div>
                    </div>
                </div>

            </div>

   
        </form>

    </div>


</div>
@endsection


@section('script')
    <script>
       $(function () {
        $('#new-user').validate({
            rules: {
                name : {
                    required: true,
                },
                username : {
                    required: true,
                    pattern: /^[a-zA-Z]+$/,
                },
                password : {
                    required: true,
                    minlength: 6
                },
               
            },
            messages: {
                name : {
                    required: "الإسم مطلوب",
                },
                username : {
                    required: "إسم المستخدم مطلوب",
                    pattern: "إسم المستخدم بالإنجليزية فقط بدون مسافات",
                },
                password : {
                    required: "كلمة السر مطلوبة",
                    minlength: "أقل عدد أحرف لكلمة السر 6 حروف"
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
            $(element).addClass('is-valid');

            }
        });
    });
    </script>

      {{-- *********** Errors ************* --}}
      @if($errors->any())
      <script>
          @foreach($errors->all() as $error)
                  toastr.error('{{$error}}');
                  toastr.options.closeDuration = 5000;
          @endforeach
      </script>
  @endif

  {{-- ********* Error Message ********** --}}
  @if(session()->has('error'))
      <script>
          toastr.error("{{session('error')}}");
          toastr.options.closeDuration = 5000;
      </script>
  @endif

  {{-- ********* Success Message ********** --}}
  @if(session()->has('message'))
      <script>
          toastr.success("{{session('message')}}");
          toastr.options.closeDuration = 5000;
      </script>
  @endif

@endsection