<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


<style>
    .select2-container {
        z-index: 9999;
    }
</style>
<style>
    select{
        font-family: fontAwesome
    }
    select option{
        font-family: fontAwesome
    }

</style>
<form action="{{route('ourWorks.store')}}" method="post" id="Form">
    @csrf

    <div class="row ">

        <div class="col-12 ">
            <div class="form-group">
                <label for="address1">الصورة </label>
                <input required data-validation="required" type="file" data-default-file="" class="form-control dropify"
                       id="image" name="image">
            </div>
        </div>



        @foreach(\App\Models\Language::where('is_active','active')->get() as $index=>$language)

        <div class="col-md-6 p-2 pt-3">
            <div class="form-group">
                <label for="name{{$language->title}}">الإسم </label>
                <input required data-validation="required" type="text" class="form-control" id="name{{$language->title}}" name="title[]"
                       placeholder=" ">
            </div>
        </div>

        @endforeach




{{--        <div class=" col-md-12 p-2 pt-3">--}}
{{--            <div class="form-group">--}}
{{--                <label for="email2">النوع </label>--}}
{{--                <select name="types[]" data-validation="required" required multiple class="form-control js-example-basic-multiple">--}}
{{--                    @foreach(\App\Models\Type::get() as $type)--}}
{{--                        <option value="{{$type->id}}">{{$type->title}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}


        @foreach(\App\Models\Language::where('is_active','active')->get() as $index=>$language)
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                <div class="form-group">
                    <label
                        for="summernote1{{$language->title}}">وصف العمل
                         </label>
                    <textarea data-validation="required" required rows="6" class="form-control "
                              name="desc[]"
                              id="summernote1{{$language->title}}"
                              placeholder="  ">
                                                     </textarea>
                </div>
            </div>
        @endforeach

{{--        <div class="col-md-12 p-2 pt-3">--}}
{{--            <div class="form-group">--}}
{{--                <label for="url">لينك التطبيق </label>--}}
{{--                <input required data-validation="required" type="text" class="form-control" id="url" name="url"--}}
{{--                       placeholder=" ">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        @include('admin.crud.ourWorks.parts.addIcon')--}}

        <section>
            @foreach(\App\Models\Type::get() as $type)

                <div class="row align-items-center g-2 mb-3 my-2">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="form-group">

                            <input id="{{$type->id}}" type="checkbox" name="types[]"
                                   value="{{$type->id}}">
                            <label for="{{$type->id}}">  {{$type->title}}</label>
                            <br>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="form-group ">
{{--                            <select name="{{$type->id}}" class="form-control select2Users">--}}
{{--                                <option value="weak">ضعيف</option>--}}
{{--                                <option value="average">متوسط</option>--}}
{{--                                <option value="good"> جيد</option>--}}
{{--                                <option value="very good"> جيد جدا</option>--}}
{{--                                <option value="excellent"> ممتاز</option>--}}
{{--                            </select>--}}

                            <input name="{{$type->id}}" value="#!" type="text" class="form-control">

                        </div>
                    </div>


                </div>
            @endforeach


        </section>











    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
</script>
