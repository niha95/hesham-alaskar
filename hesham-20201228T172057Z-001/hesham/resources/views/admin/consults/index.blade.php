@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.consults')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
        <span class="text-muted font-weight-bold mr-4"> </span>
        {{-- <a href="{{ route('dashboard.rules.create') }}" class="btn btn-light-warning font-weight-bolder btn-sm">@lang('general.add_new')</a> --}}
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.dashboard')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.consults')</span>
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
                <th scope="col">@lang('general.sender_name')</th>
                <th scope="col">@lang('general.phone')</th>
                <th scope="col">@lang('general.email')</th>
                <th scope="col">@lang('general.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consults as $key => $value)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{$value->sender_name  }}</td>
                    <td>{{$value->phone  }}</td>
                    <td>{{$value->email  }}</td>
                    <td>
                        <form class="delete-form" action="#" method="post">
                            <a href="{{route('dashboard.consults.show',$value->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-eye fa-sm"></i>  </a>



                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
