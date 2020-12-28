@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.blogs')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
{{--        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>--}}
{{--        <span class="text-muted font-weight-bold mr-4"> </span>--}}
{{--        <a href="{{ route('dashboard.blogs.create') }}" class="btn btn-primary btn-sm font-weight-bolder--}}
{{--        btn-sm"><i class="fas fa-plus-circle fa-sm"></i> @lang('general.add_new')</a>--}}
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.dashboard')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.blogs')  </span>
        <!--end::Actions-->

    </div>
    <!--end::Info-->
@endsection
@section('content')
<div class="col-12">
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap py-3">
            <div class="card-title">
                <h3 class="card-label">@lang('general.data')
                    <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
            </div>
            <div class="card-toolbar">

                <!--begin::Button-->
                <a href="{{ route('dashboard.blogs.create') }}" class="btn btn-primary font-weight-bolder">
                    <i class="fas fa-plus-circle fa-sm"></i>@lang('general.add_new')</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-bordered table-checkable" id="kt_datatable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>@lang('general.title')</th>
                    <th>@lang('general.author')</th>
                    <th>@lang('general.views')</th>
                    <th>@lang('general.status')</th>
                    <th>@lang('general.created_at')</th>
                    <th>@lang('general.control')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $key => $value)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $value->title }}</td>
                        <td>{{ $value->user->name }}</td>
                        <td>{{ $value->views }}</td>
                        <td>
                            <form action="{{route('dashboard.blog.publish',$value)}}" method="post">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-sm @if($value->status == 1) btn-light-danger @else btn-light-success
                                @endif btn-icon " title="{{
                                $value->publish }}">
                                    <i class="@if($value->status == 1) far fa-times-circle  @else far fa-paper-plane
@endif"></i>
                                </button>

                            </form>
                        </td>
                        <td>{{ $value->created_at }}</td>
                        <td>
                            <form class="delete-form" action="{{ route('dashboard.blogs.destroy',$value->id) }}"
                                  method="post">
                            <a href="{{route('dashboard.blogs.show',$value->id)}}" class="btn btn-sm btn-clean
                            btn-icon mr-2" title="@lang('general.show')">
                                <i class="fa fa-eye"></i>
                            </a>


                                <a href="{{route('dashboard.blogs.edit',$value->id)}}" class="btn btn-sm btn-clean
                                btn-icon mr-2" title="@lang('general.edit')">
                                    <i class="fa fa-edit"></i>
                                </a>
                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-sm btn-clean btn-icon"
                                        title="@lang('general.delete')" onclick="confirmDelete
                                ('delete-form')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach













                </tbody>
            </table>
            <div>
                {{ $blogs->links() }}
            </div>

        </div>
    </div>


</div>
@endsection
