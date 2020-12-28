
@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.socials')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <span class="text-muted font-weight-bold mr-4"> </span>
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="{{ route('dashboard.socials.index') }}" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.socials')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.edit')</span>
        <!--end::Actions-->

    </div>
    <!--end::Info-->
@endsection
@section('content')
<div class="card">

    <div class="card-body">
      <h5 class="card-title">@lang('general.socials')</h5>
      <p class="card-text">@lang('general.fb'): {{ $social->fb }}</p>
      <p class="card-text">@lang('general.twitter'): {{ $social->twitter }}</p>
      <p class="card-text">@lang('general.instagram'):{{ $social->instagram }}</p>
      <p class="card-text">@lang('general.mail'): {{ $social->mail }}</p>
    </div>
  </div>
  @endsection
