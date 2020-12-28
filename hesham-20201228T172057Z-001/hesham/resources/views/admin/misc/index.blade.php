@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.misc')</h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
        <span class="text-muted font-weight-bold mr-4"> </span>
        <a href="{{ route('dashboard.misc.create') }}" class="btn btn-light-warning font-weight-bolder btn-sm">@lang('general.add_new')</a>
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.dashboard')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.misc')</span>
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
                <th scope="col">@lang('general.sitename')</th>
                <th scope="col">@lang('general.about')</th>
                <th scope="col">@lang('general.siteword')</th>
                <th scope="col">@lang('general.vision')</th>
                <th scope="col">@lang('general.appointment_date')</th>
                <th scope="col">@lang('general.address')</th>
                <th scope="col">@lang('general.googlemap')</th>
                <th scope="col">@lang('general.links')</th>
                <th scope="col">@lang('general.video')</th>
                <th scope="col">@lang('general.phone')</th>
                <th scope="col">@lang('general.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($misc as $key => $value)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{$value->sitename  }}</td>
                    <td>{{$value->about  }}</td>
                    <td>{{$value->site_word  }}</td>
                    <td>{{$value->vision  }}</td>
                    <td>{{$value->appointment_date  }}</td>
                    <td>{{$value->address  }}</td>
                    <td>{{$value->google_map  }}</td>
                    <td>{{$value->links  }}</td>
                    <td>{{$value->video  }}</td>
                    <td>{{$value->phone  }}</td>
                    <td>
                        <form class="delete-form" action="{{ route('dashboard.misc.destroy',$value->id) }}" method="post">
                            <a href="{{route('dashboard.misc.show',$value->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-eye fa-sm"></i>  </a>
                            <a href="{{route('dashboard.misc.edit',$value->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit fa-sm"></i>  </a>
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
