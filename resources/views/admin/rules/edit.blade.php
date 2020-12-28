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
        <a href="{{ route('dashboard.tags.index') }}" class="btn btn-clean btn-sm font-weight-bold font-size-base
        mr-1">@lang('general.blogCategories')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.edit')</span>
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
            <form action="{{ route('dashboard.rules.update',$rule->id) }}" method="POST"
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
                            <input type="text" name="{{ $locale }}[name]" class="form-control @error("$locale.name")
                                is-invalid @enderror" value="{{ $rule->translate($locale)->name }}">
                            @error("$locale.name")
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
                                is-invalid @enderror" value="{{ $rule->translate($locale)->description }}">
                            @error("$locale.description")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    @endforeach
                    <div class="card card-custom">
                        <div class="card-body ">



                            <div class="card card-custom">
                                <div class="card-body ">
                                    <div class="form-group">
                                        <label class="col-xl-3 col-lg-3 col-form-label">@lang('general.image')</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                @if(isset($rule->image))
                                            <div class="image-input-wrapper" style="background-image: url({{$rule->image->path}})"></div>
                                        @else
                                            <div class="image-input-wrapper" style="background-image: url(https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png)"></div>
                                        @endif
                                              <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="profile_avatar_remove" />
                                                </label>
                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                            </span>
                                            </div>
                                            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">@lang('general.save')</button>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
@endsection
