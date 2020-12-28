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
            <form action="{{ route('dashboard.socials.update',$social->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label>@lang('general.fb') <span class="text-danger">*</span></label>
                        <input name="fb" type="text" class="form-control @error('fb') is-invalid @enderror"  placeholder="@lang('general.fb')" value="{{$social->fb}}" required/>
                        @error('name')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('general.twitter') <span class="text-danger">*</span></label>
                        <input name="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror"  placeholder="@lang('general.twitter')" value="{{$social->twitter}}" required/>
                        @error('name')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('general.instagram') <span class="text-danger">*</span></label>
                        <input name="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror"  placeholder="@lang('general.instagram')" value="{{$social->instagram}}" required/>
                        @error('name')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('general.mail') <span class="text-danger">*</span></label>
                        <input name="mail" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="@lang('general.mail')" value="{{$social->mail}}" required/>
                        @error('mail')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
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
