@extends('layouts.admin')
@section('content')
@can('institute_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.institutions.create") }}">
                Create Institute
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        Institute List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Category">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                           Id
                        </th>
                        <th>
                           Institute Name
                        </th>

                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($institute as $item)
                        <tr data-entry-id="{{ $item->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $item->id ?? '' }}
                            </td>
                            <td>
                                {{ $item->name ?? '' }}
                            </td>
                           
                            <td>
                                @can('institute_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.institutions.show', $item->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('institute_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.institutions.edit', $item->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('institute_delete')
                                    <form action="{{ route('admin.institutions.destroy', $item->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Category:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection