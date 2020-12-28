@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.users')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <span class="text-muted font-weight-bold mr-4"> </span>
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="{{ route('dashboard.users.index') }}" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.users')</a> <span> / </span>
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
            <form action="{{ route('dashboard.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>@lang('general.name') <span class="text-danger">*</span></label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="@lang('general.name')" required/>
                        @error('name')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('general.email') <span class="text-danger">*</span></label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="@lang('general.email')" required/>
                        @error('email')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('general.password') <span class="text-danger">*</span></label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="@lang('general.password')" required/>
                        @error('password')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">@lang('general.password_confirmation') <span class="text-danger">*</span></label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="@lang('general.password_confirmation')" required/>
                    </div>

              <div class="form-group">
               <label for="exampleSelect1">@lang('general.user_type') <span class="text-danger">*</span></label>
               <select class="form-control @error('type') is-invalid @enderror" id="exampleSelect1" name="type" required>
                <option value="">@lang('general.choose')</option>
                <option value="user">@lang('general.user')</option>
                <option value="admin">@lang('general.admin')</option>

               </select>
               @error('type')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
              </div>
             </div>
                <div class="form-group">
                    <label class="col-xl-3 col-lg-3 col-form-label">@lang('general.profile_image')</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="image-input image-input-outline" id="kt_image_1">
                            <div class="image-input-wrapper" style="background-image: url(https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png)"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="profile_image" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="profile_avatar_remove" />
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
                        </div>
                        <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
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
