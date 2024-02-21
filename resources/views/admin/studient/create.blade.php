@extends('layout.master')
@section('title',"إضافة طالب")
    

@section('content')

<div>
    <h4 class="mb-4">إضافة طالب جديد</h4>
</div>

<div class="row">

        
    <div class="col-12">
        <form id="new-stu" action="/new-studient" method="POST">
            @csrf
  
                <!-- بيانات المدرس -->
            <div class="card my-3">
                <div class="card-header d-flex align-items-center">   
                    <h3 class="card-title m-0">بيانات الطالب</h3>
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
                                            <label for="name" class="text-right w-100 my-1">الإسم</label>
                                            <input name="name" type="text" class="form-control text-right" id="" placeholder="إسم الطالب">
                                        </div>
                                </div>
                            <!-- رقم التليفون  -->
                                <div class="col-lg-6 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="phone_number" class="text-right w-100 my-1">رقم التليفون</label>
                                            <input name="phone_number" type="text" class="form-control text-right" id="" placeholder="رقم التليفون">
                                        </div>
                                </div>
                            <!-- رقم تليفون ولي الأمر  -->
                                <div class="col-lg-6 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="parent_phone" class="text-right w-100 my-1">رقم ولى الأمر</label>
                                            <input name="parent_phone" type="text" class="form-control text-right" id="" placeholder="رقم ولى الأمر">
                                        </div>
                                </div>

                            <!-- الصف  -->
                                <div class="col-lg-6 my-2">
                                    <div class="form-group mx-2 d-block">
                                        <label for="classroom" class="text-right w-100 my-1">الصف الدراسى</label>
                                        <select name="classroom" class="form-control text-right" style="">
                                            <option disabled > الإعدادى</option>
                                            <option value="الأول الإعدادى">الأول الإعدادى</option>
                                            <option value="الثانى الإعدادى">الثانى الإعدادى</option>
                                            <option value="الثالث الإعدادى">الثالث الإعدادى</option>
                                            <option disabled >الثانوى</option>
                                            <option value="الأول الثانوى">الأول الثانوى</option>
                                            <option value="الثانى الثانوى">الثانى الثانوى</option>
                                            <option value="الثالث الثانوى">الثالث الثانوى</option>
                                        </select>
                                    </div>
                                </div>

                            <!-- المنطقة  -->
                                <div class="col-lg-6 my-2">
                                    <div class="form-group mx-2 d-block">
                                        <label for="area" class="text-right w-100 my-1">المنطقة</label>
                                        <select name="area" class="form-control text-right" style="">
                                            <option value="القاهرة">القاهرة</option>
                                            <option value="الجيزة">الجيزة</option>
                                            <option value="الإسكندرية">الإسكندرية</option>
                                        </select>
                                    </div>
                                </div>
                            <!-- إسم المستخدم  -->
                                <div class="col-lg-6 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="username" class="text-right w-100 my-1">إسم الحساب</label>
                                            <input name="username" type="text" class="form-control text-right" id="" placeholder="إسم المستخدم">
                                        </div>
                                </div>

            
                        </div>
    
                
                    </div>
    
                    <div class="card-footer text-right">
                        <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                            <button  type="submit" class="btn btn-success">تسجيل البيانات</button>
                             بيانات خاصة بالطالب لإضافتها على المنصة 
    
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
            $('#new-stu').validate({
            rules: {
                name : {
                    required: true,
                },
                phone_number : {
                    required: true,
                    minlength: 11,
                    maxlength: 11,
                    // pattern: /^(010|011|012|015)\d{8}$/,
                },
                parent_phone : {
                    required: true,
                    minlength: 11,
                    maxlength: 11,

                    // pattern: /^(010|011|012|015)\d{8}$/,
                },
                classroom : {
                    required: true,
                },
                area : {
                    required: true,
                },
                username : {
                    required: true,
                    minlength: 4,
                },
                
            },
            messages: {
                name : {
                    required: "إسم الطالب مطلوب",
                },
                phone_number : {
                    required: "رقم التليفون مطلوب",
                    minlength: "من فضلك أدخل رقم تليفون صحيح",
                    maxlength: "من فضلك أدخل رقم تليفون صحيح",
                    // pattern: /^(010|011|012|015)\d{8}$/,
                },
                parent_phone : {
                    required: "رقم ولى الأمر مطلوب",
                    minlength: "من فضلك أدخل رقم تليفون صحيح",
                    maxlength: "من فضلك أدخل رقم تليفون صحيح",
                    // pattern: /^(010|011|012|015)\d{8}$/,
                },

                classroom : {
                    required: "الصف الدراسى مطلوب",
                },
                area : {
                    required: "المنطقة مطلوبة",
                },
                username : {
                    required: "إسم المستخدم مطلوب",
                    minlength: "أقل عدد حروف لإسم المستخدم 4 حروف",
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