
@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.rules')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <span class="text-muted font-weight-bold mr-4"> </span>
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="{{ route('dashboard.rules.index') }}" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.rules')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.edit')</span>
        <!--end::Actions-->

    </div>
    <!--end::Info-->
@endsection
@section('content')
<div class="card">

    <div class="card-body">
      <h5 class="card-title">{{ $rule->name }}</h5>
      <p class="card-text">{{ $rule->description }}</p>
    </div>
  </div>
  @endsection
