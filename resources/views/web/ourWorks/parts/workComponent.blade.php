@if(count($works)>0)
@foreach($works as $work)
    <div class="col-lg-3 col-md-6 p-1">
        <div class="single-cases ">
            <div class="cases-image">
{{--                <a  target="_blank"  href="{{$work->url}}">--}}
                    <img src="{{get_file($work->image)}}">
{{--                </a>--}}
            </div>

            <div class="cases-content">
                @foreach($work->types as $index=>$type)

                    @php
                        $url=\App\Models\OurWorkType::where('ourWork_id',$work->id)->where('type_id',$type->id)->first();

                    @endphp

                <a href="{{$url->url}}" target="_blank"
                   >

                 <span class="tag-1 mx-1">  {{$type->title}}</span>



                </a>
                @endforeach

                <h3>
                    <a target="_blank"  href="{{$work->url}}">{{$work->title}} </a>
                </h3>
       <p>
           {{$work->desc}}
       </p>
            </div>
        </div>
    </div>
@endforeach




@else

<p>
لايوجد اعمال لديك
</p>


@endif
