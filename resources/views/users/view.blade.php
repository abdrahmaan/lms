@extends('layout.master')
@section('title',"بحث سيارات")
    

@section('content')

<div>
    <h4 class="mb-4">بحث فى المستخدمين</h4>
</div>

<div class="row">
    <div class="col-12">
 
        <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="card-title m-0">بيانات السيارات</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body overflow-auto">
                <table id="users-table" class="table table-bordered table-striped" dir="rtl">
                    <div class="col-12"></div>
                    <thead>
                    <tr>
                      <th class="text-center">الإسم</th>
                      <th class="text-center">إسم المستخدم</th>
                      <th class="text-center">التغييرات</th>
                 
                    </tr>
                    </thead>
                    <tbody>
                        {{-- table body data --}}

                        @foreach ($Data as $row)
                            <tr>
                                <td class="text-center" >{{$row->name}}</td>
                                <td class="text-center">{{$row->username}}</td>

                                <td class="d-flex justify-content-center">
                                    <a href="/delete-user/{{$row->id}}" class="btn btn-danger">حذف</a>
                                </td>
                            </tr>
                        @endforeach
                     
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">الإسم</th>
                            <th class="text-center">إسم المستخدم</th>
                            <th class="text-center">التغييرات</th>      
                          </tr>
                    </tfoot>
                  </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
@endsection


@section('script')

<script>

    $(function () {
      $("#users-table").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#users-table_wrapper .col-md-6:eq(0)');

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