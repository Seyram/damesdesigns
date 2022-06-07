@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.contact.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.contacts.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.contact.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($contact) ? $contact->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="code">{{ trans('cruds.contact.fields.email') }}*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($contact) ? $contact->email : '') }}" required>
                @if($errors->has('email'))
                    <p class="help-block">
                        {{ $errors->first('email') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="phone">{{ trans('cruds.contact.fields.phone') }}*</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($contact) ? $contact->phone : '') }}" required>
                @if($errors->has('phone'))
                    <p class="help-block">
                        {{ $errors->first('phone') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.phone_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                <label for="subject">{{ trans('cruds.contact.fields.subject') }}*</label>
                <input type="text" id="subject" name="subject" class="form-control" value="{{ old('name', isset($subject) ? $subject->name : '') }}" required>
                @if($errors->has('subject'))
                    <p class="help-block">
                        {{ $errors->first('subject') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                <label for="note_text">{{ trans('cruds.contact.fields.message') }}*</label>
                <textarea id="note_text" name="message" class="form-control " required>{{ old('message', isset($contact) ? $contact->message : '') }}</textarea>
                @if($errors->has('message'))
                    <p class="help-block">
                        {{ $errors->first('message') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.message_helper') }}
                </p>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
