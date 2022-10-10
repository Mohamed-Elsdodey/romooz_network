@extends('web.layouts.layout')

@section('content')

    @include('web.home.parts.header')

    <!-- our Languages -->
   @include('web.home.parts.languages')
    <!-- our services -->
     @include('web.home.parts.services')

    @include('web.home.parts.aboutUs')

    @include('web.home.parts.implementationSteps')
    <!-- support -->
    @include('web.home.parts.support')
    @include('web.home.parts.counter')

    <!-- clients -->
      @include('web.home.parts.clients')
    <!-- slogan -->
      @include('web.home.parts.slogan')
@endsection


