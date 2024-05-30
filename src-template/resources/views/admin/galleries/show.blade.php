@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.kendaraan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.kendaraans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.kendaraan.fields.id') }}
                        </th>
                        <td>
                            {{ $kendaraan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.kendaraan.fields.title') }}
                        </th>
                        <td>
                            {{ $kendaraan->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.kendaraan.fields.description') }}
                        </th>
                        <td>
                            {!! $kendaraan->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.kendaraan.fields.image') }}
                        </th>
                        <td>
                            @if($kendaraan->image)
                                <a href="{{ $kendaraan->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $kendaraan->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.kendaraan.fields.price') }}
                        </th>
                        <td>
                            {{ $kendaraan->price }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.kendaraans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection