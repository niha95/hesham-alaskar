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
        <a href="{{ route('dashboard.blogs.index') }}" class="btn btn-clean btn-sm font-weight-bold
        font-size-base mr-1">@lang('general.blogs')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.add_new')</span>
        <!--end::Actions-->

    </div>
    <!--end::Info-->
@endsection


@section('content')
    <div class="col-12">
        <form action="{{ route('dashboard.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card card-custom mb-5">
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


                <div class="card card-custom">
                    <div class="card-header card-header-tabs-line">
                        <div class="card-title">
                            <h3 class="card-label">@lang('general.languages')</h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                @foreach (config('translatable.locales') as $locale)
                                <li class="nav-item">
                                    <a class="nav-link @if($locale == 'ar') active @endif" data-toggle="tab"
                                       href="{{"#" . $locale}}">{{trans
                                    ('general.'.$locale . '.lang')}}</a>
                                </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            @foreach (config('translatable.locales') as $locale)
                                <div class="tab-pane fade show @if($locale == 'ar') active @endif" id="{{$locale}}" role="tabpanel">
                                    <div class="col form-group">

                                        <label>@lang('general.' . $locale . '.title')</label>

                                        <input type="text" name="{{ $locale.'[title]' }}" id="{{ $locale . '[title]' }}" placeholder="@lang('general.name')" class="form-control @error("$locale.title" ) is-invalid @enderror">
                                        @error("$locale.name")
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>

                                    <div class="col form-group">
                                        <label for="exampleTextarea">@lang('general.' . $locale . '.description')
                                            <span class="text-danger">*</span></label>
                                        <textarea name="{{ $locale.'[description]' }}" id="{{ $locale.'[description]'
                                         }}" placeholder="@lang('general.' . $locale . '.description')"
                                                  class="form-control @error("$locale.description" ) is-invalid @enderror" cols="30" rows="5"></textarea>
                                        @error("$locale.description")
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror

                                    </div>
                                    <div class="col form-group">
                                        <label for="{{$locale}}">@lang('general.' . $locale . '.content')</label>
                                        <textarea id="{{$locale}}" name="{{ $locale.'[content]' }}"
                                                  class="form-control @error("$locale.content" ) is-invalid @enderror text_editor" rows="30"></textarea>
                                        @error("$locale.content")
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror

                                    </div>
                                </div>
                            @endforeach

                        </div>



                    </div>
                </div>
        </div>
                    <div class="card card-custom">



                        <div class="card-body ">
                            <div class="col form-group">
                                <label>@lang('general.blogCategories')</label>

                                <select class="form-control select2 @error("blog_category_id" ) is-invalid @enderror"
                                        name="blog_category_id">
                                    <option disabled>@lang('general.choose')</option>
                                    @forelse($categories as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @empty
                                        <option disabled>@lang('general.not_found_data')</option>
                                    @endforelse

                                </select>
                                @error("tags")
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror

                            </div>
                            <div class="col form-group">
                                <label>@lang('general.tags')</label>

                                <select class="form-control select2 @error("tags" ) is-invalid @enderror"
                                        name="tags[]" multiple="multiple">
                                    <option disabled>@lang('general.choose')</option>
                                    @forelse($tags as $value)

                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @empty
                                        <option disabled>@lang('general.not_found_data')</option>
                                    @endforelse

                                </select>
                                @error("tags")
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror

                            </div>
                        </div>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-light-success active">
                                <i class="far fa-save fa-sm"></i>
                                @lang('general.save')
                            </button>
                        </div>
                    </div>

            </form>
            <!--end::Form-->

    </div>

    @push('js')
        <script src="{{ asset('admin') }}/assets/js/pages/crud/forms/editors/summernote.js"></script>
        <script>


            $(document).ready(function() {
                $('.text_editor').summernote();
            });
        </script>
    @endpush
@endsection
