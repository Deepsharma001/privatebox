@extends('layouts.admin')
@section('content')
@can('event_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.testimonials.create") }}">
                Create Testimonial
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        Testimonial List
    </div>

    <div class="card-body">
        <div class="table-responsive">
        <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th width="10">
                            Sr.
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Details
                        </th>
                      
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonial as $key => $item)
                        <tr data-entry-id="{{ $item->id }}">
                            <td>

                            </td>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                {{ $item->name ?? '' }}
                            </td>
                            <td>
                                {{ $item->title ?? '' }}
                            </td>
                            <td>
                                {!! $item->description ?? '' !!}
                            </td>
                          
                            <td>
                                @can('testimonial_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.testimonials.show', $item->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('testimonial_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.testimonials.edit', $item->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('testimonial_delete')
                                    <form action="{{ route('admin.testimonials.destroy', $item->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection