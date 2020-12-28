@extends('admin.layouts.app')
@section('subheader')
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('general.sliders')</h5>
        <!--end::Page Title-->  
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.dashboard')</a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1">@lang('general.sliders')</span> <span> / </span> 
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
                <a href="{{ route('dashboard.sliders.create') }}" class="btn btn-primary font-weight-bolder">
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
                    <th scope="col">@lang('general.title')</th>
                    <th scope="col">@lang('general.description')</th>
                    <th scope="col">@lang('general.created_at')</th>
                    <th scope="col">@lang('general.control')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $key => $value)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $value->title }}</td>
                        <td>{{ $value->description }}</td>
                        <td>{{ $value->created_at }}</td>
                         
                        <td>
                            <form class="delete-form" action="{{ route('dashboard.sliders.destroy',$value->id) }}"
                                  method="post">
                            <a href="{{route('dashboard.sliders.show',$value->id)}}" class="btn btn-sm btn-clean
                            btn-icon mr-2" title="@lang('general.show')">
                                <i class="fa fa-eye"></i>
                            </a>


                                <a href="{{route('dashboard.sliders.edit',$value->id)}}" class="btn btn-sm btn-clean
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
                {{ $sliders->links() }}
            </div>

        </div>
    </div>
 
</div>
@endsection
