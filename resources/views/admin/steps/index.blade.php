@extends('admin.layouts.layout')
@section('styles')
    <!-- include summernote css/js -->
    <link href="summernote-bs5.css" rel="stylesheet">
    {{--    <link href="{{asset('dashboard/summernote/summernote-bs4.css')}}">--}}
    <style>
        .dropify-font-upload:before,
        .dropify-wrapper .dropify-message span.file-icon:before {
            content: "\f382";
            font-weight: 100;
            color: #000;
            font-size: 26px;
        }

        .dropify-wrapper .dropify-message p {
            text-align: center;
            font-size: 15px;
        }

    </style>

@endsection

@section('page-title')
خطوات التنفيذ
@endsection


@section('content')

    <div>
        <h4 class="card-title">خطوات التنفيذ </h4>
        <form id="Form_step" method="post" action="{{route('admin.updateSteps')}}">
            @csrf
            <div class="row ">

                @foreach($languages as $index=>$language)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                        <div class="form-group">
                            <label
                                for="summernote1{{$language->title}}">الخطوة الاولى({{$language->title}}) </label>
                            <textarea data-validation="" rows="6" class="form-control "
                                      name="analysis[]"
                                      id="summernote1{{$language->title}}"
                                      placeholder="الخطوة الاولى   ">
                                                         {{$steps->getTranslation('analysis', $language->title)}}
                                                     </textarea>
                        </div>
                    </div>
                @endforeach

                @foreach($languages as $index=>$language)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                        <div class="form-group">
                            <label
                                for="summernote1{{$language->title}}">الخطوة
                                الثانية({{$language->title}}) </label>
                            <textarea data-validation="" rows="6" class="form-control "
                                      name="design[]"
                                      id="summernote1{{$language->title}}"
                                      placeholder="الخطوة الثانية   ">
                                                         {{$steps->getTranslation('design', $language->title)}}
                                                     </textarea>
                        </div>
                    </div>
                @endforeach

                @foreach($languages as $index=>$language)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                        <div class="form-group">
                            <label
                                for="summernote1{{$language->title}}">الخطوة
                                الثالثة({{$language->title}}) </label>
                            <textarea data-validation="" rows="6" class="form-control "
                                      name="development[]"
                                      id="summernote1{{$language->title}}"
                                      placeholder="الخطوة الثالثة   ">
                                                         {{$steps->getTranslation('development', $language->title)}}
                                                     </textarea>
                        </div>
                    </div>
                @endforeach

                @foreach($languages as $index=>$language)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                        <div class="form-group">
                            <label
                                for="summernote1{{$language->title}}">الخطوة
                                الرابعة({{$language->title}}) </label>
                            <textarea data-validation="" rows="6" class="form-control "
                                      name="test[]"
                                      id="summernote1{{$language->title}}"
                                      placeholder="الخطوة الرابعة    ">
                                                         {{$steps->getTranslation('test', $language->title)}}
                                                     </textarea>
                        </div>
                    </div>
                @endforeach



            </div>
            <div class="row mt-4">
                <div class="col-sm-6">

                </div> <!-- end col -->

                <div class="col-sm-6">
                    <div class="text-end">
                        <button form="Form_step" type="submit" class="btn btn-success">
                            <i class="mdi mdi-content-save me-1"></i> حفظ
                        </button>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </form>
    </div>



@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>


    $('#Form_step').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        console.log(formData);
        $.ajax({
            type: 'POST',
            url: "{{route('admin.updateSteps')}}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {

                if (res['status'] == true) {
                    $('#exampleModal2').modal('toggle');
                    swal(" تعديل الطلب ", "تم تعديل الطلب بنجاح", "success", {button: "حسناً",});
                    location.reload();


                } else if (res['status'] == 'erorr') {
                    swal("    ", "  يرجي التاكد من البيانات", "warning", {button: "حسناً",});

                }
            },
            error: function (data) {
                swal("    ", "    رجاء المحاولة لاحقا ", "warning", {button: "حسناً",});
            }
        });
    }));





</script>
@endsection
