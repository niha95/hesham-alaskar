@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.misc')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <span class="text-muted font-weight-bold mr-4"> </span>
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
            <form action="{{ route('dashboard.misc.update',$misc->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-body">
                    {{--  input name  --}}
                    @foreach (config('translatable.locales') as $locale)
                        <div class="col form-group">
                            @if(count(config('translatable.locales'))>1)
                                <label>@lang('general.' . $locale . '.sitename')</label>
                            @else
                                <label>@lang('general.sitename')</label>
                            @endif
                            <input type="text" name="{{ $locale }}[sitename]" class="form-control @error("$locale.sitename")
                                is-invalid @enderror" value="{{ $misc->translate($locale)->sitename }}" >
                            @error("$locale.sitename")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            @if(count(config('translatable.locales'))>1)
                                <label>@lang('general.' . $locale . '.about')</label>
                            @else
                                <label>@lang('general.about')</label>
                            @endif
                            <textarea name="{{ $locale }}[about]" id="{{ $locale }}[about]" placeholder="@lang('general.' . $locale . '.about')"
                                 class="form-control @error("$locale.about" ) is-invalid @enderror" cols="30" rows="5" >{{ $misc->translate($locale)->about }}</textarea>



                            @error("$locale.about")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            @if(count(config('translatable.locales'))>1)
                                <label>@lang('general.' . $locale . '.site_word')</label>
                            @else
                                <label>@lang('general.sitenasite_wordme')</label>
                            @endif
                            <textarea name="{{ $locale }}[site_word]" id="{{ $locale }}[site_word]" placeholder="@lang('general.' . $locale . '.site_word')"
                                 class="form-control @error("$locale.site_word" ) is-invalid @enderror" cols="30" rows="5" >{{ $misc->translate($locale)->site_word }}</textarea>

                            @error("$locale.site_word")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            @if(count(config('translatable.locales'))>1)
                                <label>@lang('general.' . $locale . '.vision')</label>
                            @else
                                <label>@lang('general.vision')</label>
                            @endif
                            <textarea name="{{ $locale }}[vision]" id="{{ $locale }}[vision]" placeholder="@lang('general.' . $locale . '.vision')"
                            class="form-control @error("$locale.vision" ) is-invalid @enderror" cols="30" rows="5" >{{ $misc->translate($locale)->vision }}</textarea>

                            @error("$locale.vision")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            @if(count(config('translatable.locales'))>1)
                                <label>@lang('general.' . $locale . '.appointment_date')</label>
                            @else
                                <label>@lang('general.appointment_date')</label>
                            @endif
                            <input type="text" name="{{ $locale }}[appointment_date]" class="form-control @error("$locale.appointment_date")
                                is-invalid @enderror" value="{{ $misc->translate($locale)->appointment_date }}" >
                            @error("$locale.appointment_date")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @endforeach
                    <div class="col form-group">

                        <label>@lang('general.address')</label>

                    <input type="text" name="address" class="form-control @error("address")
                        is-invalid @enderror" value="{{ $misc->address }}" >
                    @error("address")
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col form-group">

                        <label>@lang('general.google_map')</label>

                    <input type="text" name="google_map" class="form-control @error("google_map")
                        is-invalid @enderror" value="{{ $misc->google_map }}" >
                    @error("google_map")
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col form-group">

                        <label>@lang('general.links')</label>

                    <input type="text" name="links" class="form-control @error("links")
                        is-invalid @enderror"  value="{{ $misc->links }}">
                    @error("links")
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col form-group">

                        <label>@lang('general.video')</label>

                    <input type="text" name="video" class="form-control @error("video")
                        is-invalid @enderror"  value="{{ $misc->video }}">
                    @error("video   ")
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col form-group">

                    <label>@lang('general.phone')</label>

                <input type="text" name="phone" class="form-control @error("phone")
                    is-invalid @enderror"  value="{{ $misc->phone }}">
                @error("phone")
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                    <div class="card-footer">

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



