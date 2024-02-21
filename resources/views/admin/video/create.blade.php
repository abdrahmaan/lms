@extends('layout.master')
@section('title',"إضافة فيديو")
    

@section('content')

<div>
    <h4 class="mb-4">إضافة فيديو جديد</h4>
</div>

<div class="row">

        
    <div class="col-12">
        <form id="new-stu" action="/new-video" method="POST">
            @csrf
  
                <!-- بيانات الفيديو -->
            <div class="card my-3">
                <div class="card-header d-flex align-items-center">   
                    <h3 class="card-title m-0">بيانات الفيديو</h3>
                    <div class="card-tools mx-3">
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#car-dim" aria-expanded="true" aria-controls="car-dim">
                            <i data-feather="plus"></i>
                        </button>
                    </div>
                </div>
                <div class="collapse show" id="car-dim">
                    <div class="card-body">
                        <div class="row justify-content-start">
                        
                            <!-- المدرس  -->
                            <div class="col-lg-6 my-2">
                                <div class="form-group mx-2 d-block">
                                    <label for="teacher_id" class="text-right w-100 my-1">إسم المدرس</label>
                                    <select name="teacher_id" class="form-control text-right" style="">
                                        
                                        @foreach ($Data as $teacher)
                                            <option value="{{$teacher->id}}">{{$teacher->Name}}</option>
                                        @endforeach
                                    </select>
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
                            <!-- إسم الفيديو  -->
                                <div class="col-lg-12 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="video_name" class="text-right w-100 my-1">إسم الفيديو</label>
                                            <input name="video_name" type="text" class="form-control text-right" id="" placeholder="إسم الفيديو على المنصة">
                                        </div>
                                </div>
                            <!-- عنوان الفيديو  -->
                                <div class="col-lg-12 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="video_url" class="text-right w-100 my-1">عنوان URL</label>
                                            <input name="video_url" type="text" class="form-control text-right" id="" placeholder="URL">
                                        </div>
                                </div>
                            <!-- سعر الحصة  -->
                                <div class="col-lg-4 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="price" class="text-right w-100 my-1">سعر الحصة ج.م</label>
                                            <input name="price" type="number" class="form-control text-right" id="" placeholder="ج.م">
                                        </div>
                                </div>
                            <!-- نسبة المنصة  -->
                                <div class="col-lg-4 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="commission" class="text-right w-100 my-1">نسبة المنصة</label>
                                            <input name="commission" type="number" class="form-control text-right" id="" placeholder="ج.م">
                                        </div>
                                </div>
                            <!-- عدد مرات المشاهدة -->
                                <div class="col-lg-4 my-1">
                                        <div class="form-group  mx-2 d-block">
                                            <label for="max_watch" class="text-right w-100 my-1">أقصى عدد مشاهدة للطالب</label>
                                            <input name="max_watch" type="number" class="form-control text-right" id="" placeholder="أقصى عدد مشاهدة">
                                        </div>
                                </div>
                            
                           

                           

            
                        </div>
    
                
                    </div>
    
                    <div class="card-footer text-right">
                        <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                            <button  type="submit" class="btn btn-success">تسجيل البيانات</button>
                             بيانات خاصة بالحصة لإضافتها على المنصة 
    
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
                teacher_id : {
                    required: true,
                },
                classroom : {
                    required: true,
                   
                },
                video_name : {
                    required: true,
            
                },
                video_url : {
                    required: true,

                },
                price : {
                    required: true,
                },
                commission : {
                    required: true,
                },
                max_watch : {
                    required: true,
                },
              
                
            },
            messages: {
                teacher_id : {
                    required: "من فضلك أدخل مدرسين أولاً",
                },
                classroom : {
                    required: "الصف مطلوب",
                   
                },
                video_name : {
                    required: "إسم الفيديو على المنصة مطلوب",
            
                },
                video_url : {
                    required: "عنوان الفيديو مطلوب",
                },
                price : {
                    required: "سعر الفيديو مطلوب",
                },
                commission : {
                    required: "نسبة المنصة مطلوبة",
                },
                max_watch : {
                    required: "أقصى عدد مشاهدة مطلوب",
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