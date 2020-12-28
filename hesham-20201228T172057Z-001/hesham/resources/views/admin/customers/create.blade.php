@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.customers')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <span class="text-muted font-weight-bold mr-4"> </span>
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="{{ route('dashboard.customers.index') }}" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.rules')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.add_new')</span>
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
            <form action="{{ route('dashboard.customers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @foreach (config('translatable.locales') as $locale)
                                <div class="tab-pane fade show @if($locale == 'ar') active @endif" id="{{$locale}}" role="tabpanel">
                                    <div class="col form-group">

                                        <label>@lang('general.' . $locale . '.name')</label>

                                        <input type="text" name="{{ $locale.'[name]' }}" id="{{ $locale . '[name]' }}" placeholder="@lang('general.name')" class="form-control @error("$locale.name" ) is-invalid @enderror">
                                        @error("$locale.name")
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col form-group">
                                        <label for="exampleTextarea">@lang('general.' . $locale . '.feedback')
                                            <span class="text-danger">*</span></label>
                                        <textarea name="{{ $locale.'[feedback]' }}" id="{{ $locale.'[feedback]'
                                         }}" placeholder="@lang('general.' . $locale . '.description')"
                                                  class="form-control @error("$locale.feedback" ) is-invalid @enderror" cols="30" rows="5"></textarea>
                                        @error("$locale.feedback")
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror

                                    </div>

                                </div>
                            @endforeach

                            <label><input type="checkbox" name="top" value="1"> @lang('general.top')</label>

                            <div class="card card-custom">
                                <div class="card-body ">
                                    <div class="form-group">
                                        <label class="col-xl-3 col-lg-3 col-form-label">@lang('general.image')</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper" style="background-image: url(https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png)"></div>
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

                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-light-success active">
                                        <i class="far fa-save fa-sm"></i>
                                        @lang('general.save')
                                    </button>
                                </div>
                            </div>

             </div>

             <div class="card-footer">
              <button type="submit" class="btn btn-primary mr-2">@lang('general.save')</button>

             </div>
            </form>
            <!--end::Form-->
           </div>
    </div>
@endsection
