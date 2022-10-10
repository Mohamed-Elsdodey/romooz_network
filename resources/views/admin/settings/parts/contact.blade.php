<div>

    <h4 class="card-title">معلومات التواصل</h4>

    <form id="Form_contact" method="post" action="{{route('settings.update',$settings->id)}}">
        @csrf
        @method('PUT')
        <input type="hidden" name="form_type" value="contact">
        <div class="form-group row mb-4">
            <label for="email1" class="col-md-2 col-form-label">البريد الإلكترونى
                (الرئيسى)</label>
            <div class="col-md-10">
                <input data-validation="required,email" name="email1" type="email"
                       value="{{$settings->email1}}" class="form-control" id="email1"
                       placeholder="">
            </div>
        </div>

        <div class="form-group row mb-4">
            <label for="email2" class="col-md-2 col-form-label">البريد الإلكترونى
                (الإضافى)</label>
            <div class="col-md-10">
                <input data-validation="required,email" name="email2" type="email"
                       value="{{$settings->email2}}" class="form-control" id="email2"
                       placeholder="">
            </div>
        </div>

        <div class="form-group row mb-4">
            <label for="phone1" class="col-md-2 col-form-label">رقم الجوال
                (الرئيسى)</label>
            <div class="col-md-10">
                <input data-validation="required" name="phone1" type="tel"
                       value="{{$settings->phone1}}" class="form-control" id="phone1"
                       placeholder="">
            </div>
        </div>

        <div class="form-group row mb-4">
            <label for="email2" class="col-md-2 col-form-label">رقم الجوال
                (الإضافى)</label>
            <div class="col-md-10">
                <input data-validation="required" name="phone2" type="tel"
                       value="{{$settings->phone2}}" class="form-control" id="phone2"
                       placeholder="">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6">

            </div> <!-- end col -->
            <div class="col-sm-6">
                <div class="text-end">
                    <button form="Form_contact" type="submit" class="btn btn-success">
                        <i class="mdi mdi-content-save me-1"></i> حفظ
                    </button>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </form>

</div>
