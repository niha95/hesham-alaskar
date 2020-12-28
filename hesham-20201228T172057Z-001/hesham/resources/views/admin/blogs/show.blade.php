@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.blogs')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <span class="text-muted font-weight-bold mr-4"> </span>
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="{{ route('dashboard.blogCategories.index') }}" class="btn btn-clean btn-sm font-weight-bold
        font-size-base mr-1"> @lang('general.blogCategories')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.show')</span>
        <!--end::Actions-->

    </div>
    <!--end::Info-->
@endsection
@section('content')
    <div class="col-12">
        <div class="card card-custom">
            <div class="card-header">
                <h3 class="card-title">
                    @lang('general.data')
                </h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-body">
                    {{--  input name  --}}
                    @foreach (config('translatable.locales') as $locale)
                        <div class="col form-group">
                            @if(count(config('translatable.locales'))>1)
                                <label>@lang('general.' . $locale . '.name')</label>
                            @else
                                <label>@lang('general.name')</label>
                            @endif
                            <input type="text" name="{{ $locale }}[name]" class="form-control @error("$locale.name")
                                is-invalid @enderror" value="{{ $category->translate($locale)->name }}" readonly>
                            @error("$locale.name")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    @endforeach
                    <div class="card-footer">

                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
@endsection
