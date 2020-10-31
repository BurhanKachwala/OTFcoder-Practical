@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.roles.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.roles.fields.title')</th>
                            <td>{{ $role->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.roles.fields.permission')</th>
                            <td>
                                @foreach ($role->permission as $singlePermission)
                                    <span class="label label-info label-many">{{ $singlePermission->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

            <a href="{{ route('admin.roles.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop