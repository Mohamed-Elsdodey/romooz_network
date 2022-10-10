<div>
    <form id="Form_row1" method="post" action="{{route('aboutUs.updateByAdmin')}}">
        @csrf

        <div class="row ">
            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">معلومات عنا
                        </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="desc[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder=" ">
                                                         {{$about->getTranslation('desc', $language->title)}}
                                                     </textarea>
                    </div>
                </div>
            @endforeach

            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">رؤيتنا

                        </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="our_vision[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder=" ">
                                                         {{$about->getTranslation('our_vision', $language->title)}}
                                                     </textarea>
                    </div>
                </div>
            @endforeach

            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">طموحنا


                        </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="our_ambition[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder=" ">
                                                         {{$about->getTranslation('our_ambition', $language->title)}}
                                                     </textarea>
                    </div>
                </div>
            @endforeach





            @foreach($languages as $index=>$language)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                    <div class="form-group">
                        <label
                            for="summernote1{{$language->title}}">اهدافنا

                        </label>
                        <textarea data-validation="" rows="6" class="form-control "
                                  name="our_goal[]"
                                  id="summernote1{{$language->title}}"
                                  placeholder=" ">
                                                         {{$about->getTranslation('our_goal', $language->title)}}
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
                        <button form="Form_row1" type="submit" class="btn btn-success">
                            <i class="mdi mdi-content-save me-1"></i> حفظ
                        </button>
                    </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </form>
</div>
