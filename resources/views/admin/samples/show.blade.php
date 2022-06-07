@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sample.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sample.fields.id') }}
                        </th>
                        <td>
                            {{ $sample->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sample.fields.sample_one_title') }}
                        </th>
                        <td>
                            {{ $sample->sample_one_title ?? '' }}
                        </td>
                    </tr>




                    <tr>
                        <th>
                            {{ trans('cruds.sample.fields.sample_one_description') }}
                        </th>
                        <td>
                            {!! $sample->sample_one_description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sample.fields.sample_one_image') }}
                        </th>
                        <td>
                            @if($sample->sample_one_image)
                                <a href="{{ $sample->sample_one_image->getUrl() }}" target="_blank">
                                    <img src="{{ $sample->sample_one_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sample.fields.sample_one_link') }}
                        </th>
                        <td>
                            {{ $sample->sample_one_link ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sample.fields.sample_two_title') }}
                        </th>
                        <td>
                            {{ $sample->sample_two_title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sample.fields.sample_two_description') }}
                        </th>
                        <td>
                            {!! $sample->sample_two_description !!}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.sample.fields.sample_two_image') }}
                        </th>
                        <td>
                            @if($sample->sample_two_image)
                                <a href="{{ $sample->sample_two_image->getUrl() }}" target="_blank">
                                    <img src="{{ $sample->sample_two_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.sample.fields.sample_two_link') }}
                        </th>
                        <td>
                            {{ $sample->sample_two_link ?? '' }}
                        </td>
                    </tr>





                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection
