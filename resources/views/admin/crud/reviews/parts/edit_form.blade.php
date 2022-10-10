<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

<style>
    .select2-container {
        z-index: 9999;
    }
</style>
<form action="{{route('reviews.update',$review->id)}}" method="post" id="Form">
    @csrf
    @method('PUT')
    <div class="row ">

        <div class="col-md-6 p-2 pt-3">

            <label >  اسم الموقع</label>


            <select name="app_name" class="form-control">
                @foreach(\App\Models\OurWork::get() as $site)
                    <option @if($review->app_name==$site->id) selected @endif value="{{$site->id}}">{{$site->title}}</option>
                @endforeach
            </select>


        </div>

        <div class="col-md-6 p-2 pt-3">
            <div class="form-group">
                <label >  التقيم</label>
                <input required data-validation="required" value="{{$review->evaluation}}" max="5"  min="0" type="number" class="form-control"
                       name="evaluation"
                       placeholder=" ">
            </div>
        </div>

        @foreach(\App\Models\Language::where('is_active','active')->get() as $index=>$language)

            <div class="col-md-6 p-2 pt-3">
                <div class="form-group">
                    <label for="user_name{{$language->title}}">اسم المستخدم </label>
                    <input required data-validation="required" type="text" class="form-control"
                           id="user_name{{$language->title}}" value=" {{$review->getTranslation('user_name', $language->title)}}" name="user_name[]"
                           placeholder=" ">
                </div>
            </div>

        @endforeach

        @foreach(\App\Models\Language::where('is_active','active')->get() as $index=>$language)
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                <div class="form-group">
                    <label
                        for="message{{$language->title}}">الرسالة
                    </label>
                    <textarea data-validation="required" required rows="6" class="form-control "
                              name="message[]"
                              id="message{{$language->title}}"
                              placeholder="  ">
                        {{$review->getTranslation('message', $language->title)}}
                                                     </textarea>
                </div>
            </div>
        @endforeach


    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
</script>
