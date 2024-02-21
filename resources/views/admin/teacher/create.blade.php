@extends('layout.master')
@section('title',"إضافة مدرس")
    

@section('content')

<div>
    <h4 class="mb-4">إضافة مدرس جديد</h4>
</div>

<div class="row">

        
    <div class="col-12">
        <form id="new-teacher" action="/new-teacher" method="POST" enctype="multipart/form-data">
            @csrf
  
                <!-- بيانات المدرس -->
            <div class="card my-3">
                <div class="card-header d-flex align-items-center">   
                    <h3 class="card-title m-0">بيانات المدرس</h3>
                    <div class="card-tools mx-3">
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#car-dim" aria-expanded="true" aria-controls="car-dim">
                            <i data-feather="plus"></i>
                        </button>
                    </div>
                </div>
                <div class="collapse show" id="car-dim">
                    <div class="card-body">
                        <div class="row justify-content-start">
                        
                            <!-- الإسم  -->
                                <div class="col-lg-6 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="fullname" class="text-right w-100 my-1">الإسم</label>
                                            <input name="fullname" type="text" class="form-control text-right" id="" placeholder="إسم المدرس">
                                        </div>
                                </div>
                            <!-- رقم التليفون  -->
                                <div class="col-lg-6 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="phone_number" class="text-right w-100 my-1">رقم التليفون</label>
                                            <input name="phone_number" type="text" class="form-control text-right" id="" placeholder="رقم التليفون">
                                        </div>
                                </div>
                            <!-- إسم المستخدم  -->
                                <div class="col-lg-4 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="username" class="text-right w-100 my-1">إسم الحساب</label>
                                            <input name="username" type="text" class="form-control text-right" id="" placeholder="إسم المستخدم">
                                        </div>
                                </div>
                            <!-- صورة المدرس  -->
                                <div class="col-lg-4 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="photo" class="text-right w-100 my-1">صورة</label>
                                            <input name="photo" type="file" class="form-control text-right" >
                                        </div>
                                </div>
                            <!-- النسبة المتفق عليها  -->
                            <div class="col-lg-4 my-1">
                                <div class="form-group  mx-2 d-block">
                                    <label for="commission" class="text-right w-100 my-1">النسبة المتفق عليها</label>
                                    <input name="commission" type="number" class="form-control text-right" id="" placeholder="%">
                                </div>
                            </div>
            
                        </div>
    
                
                    </div>
    
                    <div class="card-footer text-right">
                        <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                            <button  type="submit" class="btn btn-success">تسجيل البيانات</button>
                             بيانات خاصة بالمدرس لإضافتها على المنصة 
    
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
            $('#new-teacher').validate({
            rules: {
                fullname : {
                    required: true,
                },
                phone_number : {
                    required: true,
                    minlength: 11,
                    // pattern: /^(010|011|012|015)\d{8}$/,
                },
                username : {
                    required: true,
                    minlength: 4,
                },
                commission : {
                    required: true,
                },
                
            },
            messages: {
                fullname : {
                    required: "إسم المدرس مطلوب",
                },
                phone_number : {

                    required: "رقم التليفون مطلوب",
                    minlength: "من فضلك ادخل رقم تليفون صحيح"
                },

                username : {
                    required: "إسم المستخدم مطلوب",
                    minlength: "أقل عدد أحرف لإسم المستخدم 4 حروف",
                },
               
                commission : {
                    required: "النسبة المتفق عليها مطلوبة",
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