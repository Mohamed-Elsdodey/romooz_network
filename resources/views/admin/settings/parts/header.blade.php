<div>
    <h4 class="card-title">الهيدر </h4>
    <form id="Form_header" method="post" action="{{route('settings.update',$settings->id)}}">
        @csrf
        @method('PUT')
        <input type="hidden" name="form_type" value="header">
        <div class="row ">
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">
                             </label>  التاج
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="tag[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="  ">
                                                         {{$settings->getTranslation('tag', $language->title)}}
                                                     </textarea>
                    </div>
                </div>
            @endforeach

            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">عنوان  </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="header_title[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="   ">
                                                         {{$settings->getTranslation('header_title', $language->title)}}
                                                     </textarea>
                    </div>
                </div>
            @endforeach

            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">
                            وصف
                             </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="header_desc[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder="الخطوة الثانية   ">
                                                         {{$settings->getTranslation('header_desc', $language->title)}}
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
                    <button form="Form_header" type="submit" class="btn btn-success">
                        <i class="mdi mdi-content-save me-1"></i> حفظ
                    </button>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </form>
</div>
