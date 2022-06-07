@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.portfolio.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.id') }}
                        </th>
                        <td>
                            {{ $portfolio->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.category') }}
                        </th>
                        <td>
                            {{ $portfolio->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.title') }}
                        </th>
                        <td>
                            {{ $portfolio->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.slug') }}
                        </th>
                        <td>
                            {{ $portfolio->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.photo') }}
                        </th>
                        <td>
                            @if($portfolio->photo)
                                <a href="{{ $portfolio->photo->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->photo->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.client_name') }}
                        </th>
                        <td>
                            {{ $portfolio->client_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.duration') }}
                        </th>
                        <td>
                            {{ $portfolio->duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.team') }}
                        </th>
                        <td>
                            {{ $portfolio->team }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.role') }}
                        </th>
                        <td>
                            {{ $portfolio->role }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.context_text') }}
                        </th>
                        <td>
                            {!! $portfolio->context_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.context_image') }}
                        </th>
                        <td>
                            @if($portfolio->context_image)
                                <a href="{{ $portfolio->context_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->context_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.challenge_text') }}
                        </th>
                        <td>
                            {!! $portfolio->challenge_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.challenge_image') }}
                        </th>
                        <td>
                            @if($portfolio->challenge_images)
                            {{--}}
                                <a href="{{ $portfolio->challenge_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->challenge_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            ---}}

                                @foreach($portfolio->challenge_images as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                                @endforeach
                            @endif




                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.research_text') }}
                        </th>
                        <td>
                            {!! $portfolio->research_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.research_image') }}
                        </th>
                        <td>
                            @if($portfolio->research_image)
                                <a href="{{ $portfolio->research_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->research_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.user_text') }}
                        </th>
                        <td>
                            {!! $portfolio->user_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.user_image') }}
                        </th>
                        <td>
                            @if($portfolio->user_image)
                                <a href="{{ $portfolio->user_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->user_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.design_process_text') }}
                        </th>
                        <td>
                            {!! $portfolio->design_process_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.design_process_image') }}
                        </th>
                        <td>
                            @if($portfolio->design_process_image)
                                <a href="{{ $portfolio->design_process_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->design_process_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.wireframe_text') }}
                        </th>
                        <td>
                            {!! $portfolio->wireframe_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.wireframe_image') }}
                        </th>
                        <td>
                            @if($portfolio->wireframe_image)
                                <a href="{{ $portfolio->wireframe_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->wireframe_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.interactive_prototype_text') }}
                        </th>
                        <td>
                            {!! $portfolio->interactive_prototype_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.interactive_prototype_image') }}
                        </th>
                        <td>
                            @if($portfolio->interactive_prototype_image)
                                <a href="{{ $portfolio->interactive_prototype_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->interactive_prototype_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.design_iteration_text') }}
                        </th>
                        <td>
                            {!! $portfolio->design_iteration_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.design_iteration_image') }}
                        </th>
                        <td>
                            @if($portfolio->design_iteration_image)
                                <a href="{{ $portfolio->design_iteration_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->design_iteration_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.final_prototype_text') }}
                        </th>
                        <td>
                            {!! $portfolio->final_prototype_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.final_prototype_image') }}
                        </th>
                        <td>
                            @if($portfolio->final_prototype_image)
                                <a href="{{ $portfolio->final_prototype_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->final_prototype_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.design_system_text') }}
                        </th>
                        <td>
                            {!! $portfolio->design_system_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.design_system_image') }}
                        </th>
                        <td>
                            @if($portfolio->design_system_image)
                                <a href="{{ $portfolio->design_system_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->design_system_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.final_design_text') }}
                        </th>
                        <td>
                            {!! $portfolio->final_design_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.final_design_image') }}
                        </th>
                        <td>
                            @if($portfolio->final_design_image)
                                <a href="{{ $portfolio->final_design_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->final_design_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.outcome_text') }}
                        </th>
                        <td>
                            {!! $portfolio->outcome_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.outcome_image') }}
                        </th>
                        <td>
                            @if($portfolio->outcome_image)
                                <a href="{{ $portfolio->outcome_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->outcome_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.learning_text') }}
                        </th>
                        <td>
                            {!! $portfolio->learning_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.learning_image') }}
                        </th>
                        <td>
                            @if($portfolio->learning_image)
                                <a href="{{ $portfolio->learning_image->getUrl() }}" target="_blank">
                                    <img src="{{ $portfolio->learning_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.testimonial_text') }}
                        </th>
                        <td>
                            {{ $portfolio->testimonial_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.portfolio.fields.testimonial_name') }}
                        </th>
                        <td>
                            {{ $portfolio->testimonial_name }}
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
