@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.portfolio.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.portfolios.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                <label for="category">{{ trans('cruds.portfolio.fields.category') }}*</label>
                <select name="category_id" id="category" class="form-control select2" required>
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" {{ (isset($portfolio) && $portfolio->category ? $portfolio->category->id : old('category_id')) == $id ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
                @if($errors->has('category_id'))
                    <p class="help-block">
                        {{ $errors->first('category_id') }}
                    </p>
                @endif
            </div>

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.portfolio.fields.title') }}*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($portfolio) ? $portfolio->title : '') }}" required>
                @if($errors->has('title'))
                    <p class="help-block">
                        {{ $errors->first('title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="slug">{{ trans('cruds.portfolio.fields.slug') }}*</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', isset($portfolio) ? $portfolio->slug : '') }}">
                @if($errors->has('slug'))
                    <em class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.slug_helper') }}
                </p>
            </div>


            <div class="form-group">
                <label for="photo">{{ trans('cruds.portfolio.fields.photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                </div>
                @if($errors->has('photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.photo_helper') }}</span>
            </div>
            <div class="form-group {{ $errors->has('client_name') ? 'has-error' : '' }}">
                <label for="client_name">{{ trans('cruds.portfolio.fields.client_name') }}*</label>
                <input type="text" id="client_name" name="client_name" class="form-control" value="{{ old('client_name', isset($portfolio) ? $portfolio->client_name : '') }}" required>
                @if($errors->has('client_name'))
                    <p class="help-block">
                        {{ $errors->first('client_name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.client_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('duration') ? 'has-error' : '' }}">
                <label for="duration">{{ trans('cruds.portfolio.fields.duration') }}*</label>
                <input type="text" id="duration" name="duration" class="form-control" value="{{ old('duration', isset($portfolio) ? $portfolio->duration : '') }}" required>
                @if($errors->has('duration'))
                    <p class="help-block">
                        {{ $errors->first('duration') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.duration_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('team') ? 'has-error' : '' }}">
                <label for="team">{{ trans('cruds.portfolio.fields.team') }}*</label>
                <input type="text" id="team" name="team" class="form-control" value="{{ old('team', isset($portfolio) ? $portfolio->team : '') }}" required>
                @if($errors->has('team'))
                    <p class="help-block">
                        {{ $errors->first('team') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.team_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
                <label for="role">{{ trans('cruds.portfolio.fields.role') }}*</label>
                <input type="text" id="role" name="role" class="form-control" value="{{ old('role', isset($portfolio) ? $portfolio->role : '') }}" required>
                @if($errors->has('role'))
                    <p class="help-block">
                        {{ $errors->first('role') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.role_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('context_text') ? 'has-error' : '' }}">
                <label for="context_text">{{ trans('cruds.portfolio.fields.context_text') }}</label>
                <textarea id="context_text" name="context_text" class="form-control ckeditor">{{ old('context_text', isset($portfolio) ? $portfolio->context_text : '') }}</textarea>
                @if($errors->has('context_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('context_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.context_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="context_image">{{ trans('cruds.portfolio.fields.context_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('context_image') ? 'is-invalid' : '' }}" id="context-dropzone">
                </div>
                @if($errors->has('context_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('context_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.context_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('challenge_text') ? 'has-error' : '' }}">
                <label for="challenge_text">{{ trans('cruds.portfolio.fields.challenge_text') }}</label>
                <textarea id="challenge_text" name="challenge_text" class="form-control ckeditor">{{ old('challenge_text', isset($portfolio) ? $portfolio->challenge_text : '') }}</textarea>
                @if($errors->has('challenge_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('challenge_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.challenge_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="challenge_image">{{ trans('cruds.portfolio.fields.challenge_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('challenge_image') ? 'is-invalid' : '' }}" id="challenge-dropzone">
                </div>
                @if($errors->has('challenge_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('challenge_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.challenge_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('research_text') ? 'has-error' : '' }}">
                <label for="research_text">{{ trans('cruds.portfolio.fields.research_text') }}</label>
                <textarea id="research_text" name="research_text" class="form-control ckeditor">{{ old('research_text', isset($portfolio) ? $portfolio->research_text : '') }}</textarea>
                @if($errors->has('research_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('research_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.research_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="research_image">{{ trans('cruds.portfolio.fields.research_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('research_image') ? 'is-invalid' : '' }}" id="research-dropzone">
                </div>
                @if($errors->has('research_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('research_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.challenge_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('user_text') ? 'has-error' : '' }}">
                <label for="user_text">{{ trans('cruds.portfolio.fields.user_text') }}</label>
                <textarea id="user_text" name="user_text" class="form-control ckeditor">{{ old('user_text', isset($portfolio) ? $portfolio->user_text : '') }}</textarea>
                @if($errors->has('user_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('user_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.user_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="user_image">{{ trans('cruds.portfolio.fields.user_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('user_image') ? 'is-invalid' : '' }}" id="user-dropzone">
                </div>
                @if($errors->has('user_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.user_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('design_process_text') ? 'has-error' : '' }}">
                <label for="design_process_text">{{ trans('cruds.portfolio.fields.design_process_text') }}</label>
                <textarea id="design_process_text" name="design_process_text" class="form-control ckeditor">{{ old('design_process_text', isset($portfolio) ? $portfolio->design_process_text : '') }}</textarea>
                @if($errors->has('design_process_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('design_process_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.design_process_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="design_process_image">{{ trans('cruds.portfolio.fields.design_process_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('design_process_image') ? 'is-invalid' : '' }}" id="design-process-dropzone">
                </div>
                @if($errors->has('design-process_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('design_process_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.design_process_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('wireframe_text') ? 'has-error' : '' }}">
                <label for="wireframe_text">{{ trans('cruds.portfolio.fields.wireframe_text') }}</label>
                <textarea id="wireframe_text" name="wireframe_text" class="form-control ckeditor">{{ old('wireframe_text', isset($portfolio) ? $portfolio->wireframe_text : '') }}</textarea>
                @if($errors->has('wireframe_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('wireframe_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.wireframe_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="wireframe_image">{{ trans('cruds.portfolio.fields.wireframe_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('wireframe_image') ? 'is-invalid' : '' }}" id="wireframe-dropzone">
                </div>
                @if($errors->has('wireframe_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('wireframe_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.wireframe_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('interactive_prototype_text') ? 'has-error' : '' }}">
                <label for="interactive_prototype_text">{{ trans('cruds.portfolio.fields.interactive_prototype_text') }}</label>
                <textarea id="interactive_prototype_text" name="interactive_prototype_text" class="form-control ckeditor">{{ old('interactive_prototype_text', isset($portfolio) ? $portfolio->interactive_prototype_text : '') }}</textarea>
                @if($errors->has('interactive_prototype_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('interactive_prototype_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.interactive_prototype_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="interactive_prototype_image">{{ trans('cruds.portfolio.fields.interactive_prototype_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('interactive_prototype_image') ? 'is-invalid' : '' }}" id="interactive-prototype-dropzone">
                </div>
                @if($errors->has('interactive_prototype_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('interactive_prototype_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.interactive_prototype_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('design_iteration_text') ? 'has-error' : '' }}">
                <label for="design_iteration_text">{{ trans('cruds.portfolio.fields.design_iteration_text') }}</label>
                <textarea id="design_iteration_text" name="design_iteration_text" class="form-control ckeditor">{{ old('design_iteration_text', isset($portfolio) ? $portfolio->design_iteration_text : '') }}</textarea>
                @if($errors->has('design_iteration_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('design_iteration_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.iteration_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="design_iteration_image">{{ trans('cruds.portfolio.fields.design_iteration_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('design_iteration_image') ? 'is-invalid' : '' }}" id="design-iteration-dropzone">
                </div>
                @if($errors->has('design_iteration_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('design_iteration_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.design_iteration_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('final_prototype_text') ? 'has-error' : '' }}">
                <label for="final_prototype_text">{{ trans('cruds.portfolio.fields.final_prototype_text') }}</label>
                <textarea id="final_prototype_text" name="final_prototype_text" class="form-control ckeditor">{{ old('final_prototype_text', isset($portfolio) ? $portfolio->final_prototype_text : '') }}</textarea>
                @if($errors->has('final_prototype_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('final_prototype_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.final_prototype_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="final_prototype_image">{{ trans('cruds.portfolio.fields.final_prototype_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('final_prototype_image') ? 'is-invalid' : '' }}" id="final-prototype-dropzone">
                </div>
                @if($errors->has('final_prototype_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('final_prototype_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.final_prototype_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('design_system_text') ? 'has-error' : '' }}">
                <label for="design_system_text">{{ trans('cruds.portfolio.fields.design_system_text') }}</label>
                <textarea id="design_system_text" name="design_system_text" class="form-control ckeditor">{{ old('design_system_text', isset($portfolio) ? $portfolio->design_system_text : '') }}</textarea>
                @if($errors->has('design_system_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('design_system_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.design_system_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="design_system_image">{{ trans('cruds.portfolio.fields.design_system_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('design_system_image') ? 'is-invalid' : '' }}" id="design-system-dropzone">
                </div>
                @if($errors->has('design_system_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('design_system_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.design_system_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('final_design_text') ? 'has-error' : '' }}">
                <label for="final_design_text">{{ trans('cruds.portfolio.fields.final_design_text') }}</label>
                <textarea id="final_design_text" name="final_design_text" class="form-control ckeditor">{{ old('final_design_text', isset($portfolio) ? $portfolio->final_design_text : '') }}</textarea>
                @if($errors->has('final_design_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('final_design_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.final_design_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="final_design_image">{{ trans('cruds.portfolio.fields.final_design_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('final_design_image') ? 'is-invalid' : '' }}" id="final-design-dropzone">
                </div>
                @if($errors->has('final_design_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('final_design_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.final_design_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('outcome_text') ? 'has-error' : '' }}">
                <label for="outcome_text">{{ trans('cruds.portfolio.fields.outcome_text') }}</label>
                <textarea id="outcome_text" name="outcome_text" class="form-control ckeditor">{{ old('outcome_text', isset($portfolio) ? $portfolio->outcome_text : '') }}</textarea>
                @if($errors->has('outcome_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('outcome_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.outcome_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="outcome_image">{{ trans('cruds.portfolio.fields.outcome_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('outcome_image') ? 'is-invalid' : '' }}" id="outcome-dropzone">
                </div>
                @if($errors->has('outcome_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('outcome_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.outcome_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('learning_text') ? 'has-error' : '' }}">
                <label for="learning_text">{{ trans('cruds.portfolio.fields.learning_text') }}</label>
                <textarea id="learning_text" name="learning_text" class="form-control ckeditor">{{ old('learning_text', isset($portfolio) ? $portfolio->learning_text : '') }}</textarea>
                @if($errors->has('learning_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('learning_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.learning_text_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="learning_image">{{ trans('cruds.portfolio.fields.learning_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('learning_image') ? 'is-invalid' : '' }}" id="learning-dropzone">
                </div>
                @if($errors->has('learning_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('learning_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.portfolio.fields.learning_image_helper') }}</span>
            </div>

            <div class="form-group {{ $errors->has('testimonial_text') ? 'has-error' : '' }}">
                <label for="testimonial_text">{{ trans('cruds.portfolio.fields.testimonial_text') }}</label>
                <textarea id="testimonial_text" name="testimonial_text" class="form-control ">{{ old('testimonial_text', isset($portfolio) ? $portfolio->testimonial_text : '') }}</textarea>
                @if($errors->has('testimonial_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('testimonial_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.testimonial_text_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('testimonial_name') ? 'has-error' : '' }}">
                <label for="testimonial_name">{{ trans('cruds.portfolio.fields.testimonial_name') }}*</label>
                <input type="text" id="testimonial_name" name="testimonial_name" class="form-control" value="{{ old('testimonial_name', isset($portfolio) ? $portfolio->testimonial_name : '') }}" >
                @if($errors->has('testimonial_name'))
                    <p class="help-block">
                        {{ $errors->first('testimonial_name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.portfolio.fields.testimonial_name_helper') }}
                </p>
            </div>



            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $('input[name="title"]').change(function(e) {
      $.get('{{ route('portfolios.check_slug') }}',
        { 'title': $(this).val() },
        function( data ) {
          $('input[name="slug"]').val(data.slug);
        }
      );
    });
  </script>

<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->photo)
      var file = {!! json_encode($portfolio->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->photo->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
// context image
Dropzone.options.contextDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="context_image"]').remove()
      $('form').append('<input type="hidden" name="context_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="context_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->context_image)
      var file = {!! json_encode($portfolio->context_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->context_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="context_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

// Challenge
/***
Dropzone.options.challengeDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 4,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 400,
      height: 400
    },
    success: function (file, response) {
      $('form').find('input[name="challenge_image"]').remove()
      $('form').append('<input type="hidden" name="challenge_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="challenge_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->challenge_image)
      var file = {!! json_encode($portfolio->challenge_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->challenge_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="challenge_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

***/

var uploadedPhotosMap = {}
Dropzone.options.challengeDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 1024, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 1024,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="challenge_images[]" value="' + response.name + '">')
      uploadedPhotosMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedPhotosMap[file.name]
      }
      $('form').find('input[name="challenge_images[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($production) && $production->challenge_images)
      var files =
        {!! json_encode($production->challenge_images) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="challenge_images[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}

//Research
Dropzone.options.researchDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="research_image"]').remove()
      $('form').append('<input type="hidden" name="research_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="research_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->research_image)
      var file = {!! json_encode($portfolio->research_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->research_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="research_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}


// User
Dropzone.options.userDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="user_image"]').remove()
      $('form').append('<input type="hidden" name="user_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="user_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->user_image)
      var file = {!! json_encode($portfolio->user_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->user_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="user_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

// Design Process Image
Dropzone.options.designProcessDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="design_process_image"]').remove()
      $('form').append('<input type="hidden" name="design_process_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="design_process_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->design_process_image)
      var file = {!! json_encode($portfolio->design_process_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->design_process_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="design_process_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

//Wireframe
Dropzone.options.wireframeDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="wireframe_image"]').remove()
      $('form').append('<input type="hidden" name="wireframe_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="wireframe_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->wireframe_image)
      var file = {!! json_encode($portfolio->wireframe_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->wireframe_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="wireframe_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

//Interactive Prototype
Dropzone.options.interactivePrototypeDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="interactive_prototype_image"]').remove()
      $('form').append('<input type="hidden" name="interactive_prototype_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="interactive_prototype_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->interactive_prototype_image)
      var file = {!! json_encode($portfolio->interactive_prototype_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->interactive_prototype_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="interactive_prototype_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

// Design Iteration
Dropzone.options.designIterationDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="design_iteraction_image"]').remove()
      $('form').append('<input type="hidden" name="design_iteration_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="design_iteration_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->design_iteration_image)
      var file = {!! json_encode($portfolio->design_iteration_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->design_iteration_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="design_iteration_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

// Final Prototype
Dropzone.options.finalPrototypeDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="final_prototype_image"]').remove()
      $('form').append('<input type="hidden" name="final_prototype_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="final_prototype_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->final_prototype_image)
      var file = {!! json_encode($portfolio->final_prototype_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->final_prototype_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="final_prototype_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

// Design System
Dropzone.options.designSystemDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="design_system_image"]').remove()
      $('form').append('<input type="hidden" name="design_system_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="design_system_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->design_system_image)
      var file = {!! json_encode($portfolio->design_system_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->design_system_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="design_system_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

// Final Design
Dropzone.options.finalDesignDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="final_design_image"]').remove()
      $('form').append('<input type="hidden" name="final_design_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="final_design_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->final_design_image)
      var file = {!! json_encode($portfolio->final_design_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->final_design_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="final_design_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}


// Outcome
Dropzone.options.outcomeDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="outcome_image"]').remove()
      $('form').append('<input type="hidden" name="outcome_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="outcome_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->outcome_image)
      var file = {!! json_encode($portfolio->outcome_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->outcome_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="outcome_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

// Learning
Dropzone.options.learningDropzone = {
    url: '{{ route('admin.portfolios.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 8040,
      width: 1920,
      height: 1920
    },
    success: function (file, response) {
      $('form').find('input[name="learning_image"]').remove()
      $('form').append('<input type="hidden" name="learning_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="learning_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($portfolio) && $portfolio->learning_image)
      var file = {!! json_encode($portfolio->learning_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $portfolio->learning_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="learning_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection
