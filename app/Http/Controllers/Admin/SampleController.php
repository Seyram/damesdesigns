<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySampleRequest;
use App\Http\Requests\StoreSampleRequest;
use App\Http\Requests\UpdateSampleRequest;
use App\Project;
use App\Sample;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SampleController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $samples = Sample::all();

        return view('admin.samples.index', compact('samples'));
    }

    public function create()
    {
        abort_if(Gate::denies('document_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$projects = Project::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.samples.create', );
    }

    public function store(StoreSampleRequest $request)
    {
        $sample = Sample::create($request->all());


        if ($request->input('sample_one_image', false)) {
            $sample->addMedia(storage_path('tmp/uploads/' . $request->input('sample_one_image')))->toMediaCollection('sample_one_image');
        }
        if ($request->input('sample_two_image', false)) {
            $sample->addMedia(storage_path('tmp/uploads/' . $request->input('sample_two_image')))->toMediaCollection('sample_two_image');
        }

        return redirect()->route('admin.samples.index');
    }

    public function edit(Sample $sample)
    {
        abort_if(Gate::denies('document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$projects = Project::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

      //  $document->load('project');

        return view('admin.samples.edit', compact( 'sample'));
    }
    public function update(UpdateSampleRequest $request, Sample $sample)
    {
        $sample->update($request->all());


        if ($request->input('sample_one_image', false)) {
            if (!$sample->sample_one_image || $request->input('sample_one_image') !== $sample->sample_one_image->file_name) {
                $sample->addMedia(storage_path('tmp/uploads/' . $request->input('sample_one_image')))->toMediaCollection('sample_one_image');
            }
        } elseif ($sample->sample_one_image) {
            $sample->sample_one_image->delete();
        }

        if ($request->input('sample_two_image', false)) {
            if (!$sample->sample_one_image || $request->input('sample_two_image') !== $sample->sample_two_image->file_name) {
                $sample->addMedia(storage_path('tmp/uploads/' . $request->input('sample_two_image')))->toMediaCollection('sample_two_image');
            }
        } elseif ($sample->sample_one_image) {
            $sample->sample_one_image->delete();
        }

        return redirect()->route('admin.samples.index');
    }

    public function show(Sample $sample)
    {
        abort_if(Gate::denies('document_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$document->load('project');

        return view('admin.samples.show', compact('sample'));
    }

    public function destroy(Sample $sample)
    {
        abort_if(Gate::denies('document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sample->delete();

        return back();
    }

    public function massDestroy(MassDestroySampleRequest $request)
    {
        Sample::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
