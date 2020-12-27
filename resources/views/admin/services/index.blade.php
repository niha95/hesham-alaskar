@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.services')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
        <span class="text-muted font-weight-bold mr-4"> </span>
        <a href="{{ route('dashboard.services.create') }}" class="btn btn-light-warning font-weight-bolder btn-sm">@lang('general.add_new')</a>
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.dashboard')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.services')</span>
        <!--end::Actions-->

    </div>
    <!--end::Info-->
@endsection
@section('content')
<div class="col-12">
    <table class="table mb-5">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('general.name')</th>
                <th scope="col">@lang('general.description')</th>
                <th scope="col">@lang('general.icone')</th>
                <th scope="col">@lang('general.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $key => $value)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{$value->title  }}</td>
                    <td>{{$value->description  }}</td>
                    <td>{{$value->icone  }}</td>
                    <td>
                        <form class="delete-form" action="{{ route('dashboard.services.destroy',$value->id) }}" method="post">
                            <a href="{{route('dashboard.services.show',$value->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-eye fa-sm"></i>  </a>
                            <a href="{{route('dashboard.services.edit',$value->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit fa-sm"></i>  </a>
                            @csrf
                            @method('delete')
                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                <i class="btn btn-danger btn-sm"></i>

                            </button>

                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
