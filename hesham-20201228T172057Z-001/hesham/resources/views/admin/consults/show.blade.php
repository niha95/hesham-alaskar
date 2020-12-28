@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.consults')</h5>
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
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-body">
                    {{--  input name  --}}

                        <div class="col form-group">

                                <label>@lang('general.sender_name')</label>

                            <input type="text" name="sender_name" class="form-control @error("sender_name")
                                is-invalid @enderror" value="{{ $consult->sender_name }}" readonly>
                            @error("sender_name")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">

                                <label>@lang('general.phone')</label>
                                <input type="phone" name="phone" class="form-control @error("phone")
                                is-invalid @enderror" value="{{ $consult->phone }}" readonly>




                            @error("about")
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                    <div class="col form-group">

                        <label>@lang('general.email')</label>

                    <input type="email" name="email" class="form-control @error("email")
                        is-invalid @enderror" value="{{ $consult->email }}" readonly>
                    @error("address")
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col form-group">

                        <label>@lang('general.question')</label>
                        <textarea name="question" id="question" placeholder="@lang('general.question')"
                        class="form-control @error("phone" ) is-invalid @enderror" cols="30" rows="5" readonly>{{ $consult->question }}</textarea>


                    @error("question")
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                    <div class="card-footer">

                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
@endsection
