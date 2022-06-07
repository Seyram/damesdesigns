@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.sample.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.samples.store") }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="form-group {{ $errors->has('sample_one_title') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.sample.fields.sample_one_title') }}*</label>
                <input type="text" id="sample_one_title" name="sample_one_title" class="form-control" value="{{ old('sample_one_title', isset($sample) ? $sample->sample_one_title : '') }}" required>
                @if($errors->has('sample_one_title'))
                    <p class="help-block">
                        {{ $errors->first('sample_one_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.sample.fields.sample_one_title_helper') }}
                </p>
            </div>



            <div class="form-group {{ $errors->has('sample_one_description') ? 'has-error' : '' }}">
                <label for="sample_one_description">{{ trans('cruds.sample.fields.sample_one_description') }}</label>
                <textarea id="sample_one_description" name="sample_one_description" class="form-control ckeditor">{{ old('sample_one_description', isset($sample) ? $sample->sample_one_description : '') }}</textarea>
                @if($errors->has('sample_one_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('sample_one_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.sample.fields.sample_one_description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('sample_one_link') ? 'has-error' : '' }}">
                <label for="sample_one_link">{{ trans('cruds.sample.fields.sample_one_link') }}*</label>
                <input type="text" id="sample_one_link" name="sample_one_link" class="form-control" value="{{ old('sample_one_link', isset($sample) ? $sample->sample_one_link : '') }}" required>
                @if($errors->has('sample_one_link'))
                    <p class="help-block">
                        {{ $errors->first('sample_one_link') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.sample.fields.sample_one_link_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="sample_one_image">{{ trans('cruds.sample.fields.sample_one_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('sample_one_image') ? 'is-invalid' : '' }}" id="photo-dropzone">
                </div>
                @if($errors->has('sample_one_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sample_one_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sample.fields.sample_one_image_helper') }}</span>
            </div>


            <div class="form-group {{ $errors->has('sample_two_title') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.sample.fields.sample_two_title') }}*</label>
                <input type="text" id="sample_two_title" name="sample_two_title" class="form-control" value="{{ old('sample_two_title', isset($sample) ? $sample->sample_two_title : '') }}" required>
                @if($errors->has('sample_two_title'))
                    <p class="help-block">
                        {{ $errors->first('sample_two_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.sample.fields.sample_two_title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('sample_two_description') ? 'has-error' : '' }}">
                <label for="sample_two_description">{{ trans('cruds.sample.fields.sample_two_description') }}</label>
                <textarea id="sample_two_description" name="sample_two_description" class="form-control ckeditor">{{ old('sample_two_description', isset($sample) ? $sample->sample_two_description : '') }}</textarea>
                @if($errors->has('sample_two_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('sample_two_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.sample.fields.sample_two_description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('sample_two_link') ? 'has-error' : '' }}">
                <label for="sample_two_link">{{ trans('cruds.sample.fields.sample_two_link') }}*</label>
                <input type="text" id="sample_two_link" name="sample_two_link" class="form-control" value="{{ old('sample_two_link', isset($sample) ? $sample->sample_two_link : '') }}" required>
                @if($errors->has('sample_two_link'))
                    <p class="help-block">
                        {{ $errors->first('sample_two_link') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.sample.fields.sample_two_link_helper') }}
                </p>
            </div>
            <div class="form-group">
                <label for="sample_two_image">{{ trans('cruds.sample.fields.sample_two_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('sample_two_image') ? 'is-invalid' : '' }}" id="context-dropzone">
                </div>
                @if($errors->has('sample_two_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sample_two_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sample.fields.sample_two_image_helper') }}</span>
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




 Dropzone.options.photoDropzone = {
    url: '{{ route('admin.samples.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
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
      $('form').find('input[name="sample_one_image"]').remove()
      $('form').append('<input type="hidden" name="sample_one_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="sample_one_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($sample) && $sample->sample_one_image)
      var file = {!! json_encode($sample->sample_one_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $sample->sample_one_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="sample_one_image" value="' + file.file_name + '">')
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



Dropzone.options.contextDropzone = {
    url: '{{ route('admin.samples.storeMedia') }}',
    maxFilesize: 8042, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif, .mpeg, .ogg, .mp4, .webm, .3gp, .mov, .flv, .avi, .wmv',
    maxFiles: 1,
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
      $('form').find('input[name="sample_two_image"]').remove()
      $('form').append('<input type="hidden" name="sample_two_image" value="' + response.name + '">')


    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="sample_two_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($sample) && $sample->sample_two_image)
      var file = {!! json_encode($sample->sample_two_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $sample->sample_two_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="sample_two_image" value="' + file.file_name + '">')
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
