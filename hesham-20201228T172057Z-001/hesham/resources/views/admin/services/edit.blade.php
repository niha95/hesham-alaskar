@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.service')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <span class="text-muted font-weight-bold mr-4"> </span>
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->

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
            <form action="{{ route('dashboard.services.update',$service->id) }}" method="POST"
                  enctype="multipart/form-data">
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
                            <input type="text" name="{{ $locale }}[title]" class="form-control @error("$locale.title")
                                is-invalid @enderror" value="{{ $service->translate($locale)->title }}">
                            @error("$locale.title")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            @if(count(config('translatable.locales'))>1)
                                <label>@lang('general.' . $locale . '.description')</label>
                            @else
                                <label>@lang('general.description')</label>
                            @endif

                            <input type="text" name="{{ $locale }}[description]" class="form-control @error("$locale.description")
                                is-invalid @enderror" value="{{ $service->translate($locale)->description }}">
                            @error("$locale.description")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    @endforeach
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">@lang('general.save')</button>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
@endsection
