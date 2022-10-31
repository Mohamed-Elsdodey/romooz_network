<form action="{{route('offers.store')}}" method="post" id="Form">
    @csrf

    <div class="row ">
        @foreach($languages as $index=>$language)
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="{{$language->title}}_title"> اسم الموقع باللغة ({{$language->title}}){{--({{__('admin.'.$language->title)}}
                        )--}} </label>
                    <input data-validation="required" type="text" class="form-control" value=""
                           id="{{$language->title}}_title" name="title[]"
                          >
                </div>
            </div>
        @endforeach


            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for=""> سعر الموقع
                     </label>
                    <input data-validation="required" type="number" class="form-control" value=""
                            name="price"
                           >
                </div>
            </div>

    </div>
    {{--form--}}

    {{--form--}}
</form>


