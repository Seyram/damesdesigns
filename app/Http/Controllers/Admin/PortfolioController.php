<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPortfolioRequest;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Portfolio;
use App\ProjectStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Traits\MediaUploadingTrait;

class PortfolioController extends Controller
{
    use MediaUploadingTrait;
    public function index()
    {
        abort_if(Gate::denies('project_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $portfolios = Portfolio::all();

        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        abort_if(Gate::denies('project_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

      //  $statuses = ProjectStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.portfolios.create', compact('categories'));
    }

    public function store(StorePortfolioRequest $request)
    {
        $portfolio = Portfolio::create($request->all());
        if ($request->input('photo', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }
        if ($request->input('context_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('context_image')))->toMediaCollection('context_image');
        }
        //if ($request->input('challenge_image', false)) {
       //     $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('challenge_image')))->toMediaCollection('challenge_image');
       // }

        foreach ($request->input('challenge_images', []) as $file) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('challenge_images');
        }

        if ($request->input('research_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('research_image')))->toMediaCollection('research_image');
        }
        if ($request->input('user_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('user_image')))->toMediaCollection('user_image');
        }
        if ($request->input('design_process_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('design_process_image')))->toMediaCollection('design_process_image');
        }
        if ($request->input('wireframe_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('wireframe_image')))->toMediaCollection('wireframe_image');
        }
        if ($request->input('interactive_prototype_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('interactive_prototype_image')))->toMediaCollection('interactive_prototype_image');
        }
        if ($request->input('design_iteration_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('design_iteration_image')))->toMediaCollection('design_iteration_image');
        }
        if ($request->input('final_prototype_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('final_prototype_image')))->toMediaCollection('final_prototype_image');
        }
        if ($request->input('outcome_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('outcome_image')))->toMediaCollection('outcome_image');
        }
        if ($request->input('learning_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('learning_image')))->toMediaCollection('learning_image');
        }
        if ($request->input('design_system_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('design_system_image')))->toMediaCollection('design_system_image');
        }
        if ($request->input('final_design_image', false)) {
            $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('final_design_image')))->toMediaCollection('final_design_image');
        }

        return redirect()->route('admin.portfolios.index');
    }

    public function edit(Portfolio $portfolio)
    {
        abort_if(Gate::denies('project_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

      //  $statuses = ProjectStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $portfolio->load('category');

        return view('admin.portfolios.edit', compact('categories', 'portfolio'));
    }

    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $portfolio->update($request->all());
        if ($request->input('photo', false)) {
            if (!$portfolio->photo || $request->input('photo') !== $portfolio->photo->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($portfolio->photo) {
            $portfolio->photo->delete();
        }
        // Context Image

        if ($request->input('context_image', false)) {
            if (!$portfolio->context_image || $request->input('context_image') !== $portfolio->context_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('context_image')))->toMediaCollection('context_image');
            }
        } elseif ($portfolio->context_image) {
            $portfolio->context_image->delete();
        }

        if (count($portfolio->challenge_images) > 0) {
            foreach ($portfolio->challenge_images as $media) {
                if (!in_array($media->file_name, $request->input('challenge_images', []))) {
                    $media->delete();
                }
            }
        }
        $media = $portfolio->challenge_images->pluck('file_name')->toArray();

        foreach ($request->input('challenge_images', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('challenge_images');
            }
        }
        /***
        if ($request->input('challenge_image', false)) {
            if (!$portfolio->challenge_image || $request->input('challenge_image') !== $portfolio->challenge_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('challenge_image')))->toMediaCollection('challenge_image');
            }
        } elseif ($portfolio->challenge_image) {
            $portfolio->challenge_image->delete();
        }
        ***/

        if ($request->input('research_image', false)) {
            if (!$portfolio->research_image || $request->input('research_image') !== $portfolio->research_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('research_image')))->toMediaCollection('research_image');
            }
        } elseif ($portfolio->research_image) {
            $portfolio->research_image->delete();
        }

        if ($request->input('user_image', false)) {
            if (!$portfolio->user_image || $request->input('user_image') !== $portfolio->user_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('user_image')))->toMediaCollection('user_image');
            }
        } elseif ($portfolio->user_image) {
            $portfolio->user_image->delete();
        }

        if ($request->input('design_process_image', false)) {
            if (!$portfolio->design_process_image || $request->input('design_process_image') !== $portfolio->design_process_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('design_process_image')))->toMediaCollection('design_process_image');
            }
        } elseif ($portfolio->design_process_image) {
            $portfolio->design_process_image->delete();
        }

        if ($request->input('wireframe_image', false)) {
            if (!$portfolio->wireframe_image || $request->input('wireframe_image') !== $portfolio->wireframe_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('wireframe_image')))->toMediaCollection('wireframe_image');
            }
        } elseif ($portfolio->wireframe_image) {
            $portfolio->wireframe_image->delete();
        }

        if ($request->input('interactive_prototype_image', false)) {
            if (!$portfolio->interactive_prototype_image || $request->input('interactive_prototype_image') !== $portfolio->interactive_prototype_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('interactive_prototype_image')))->toMediaCollection('interactive_prototype_image');
            }
        } elseif ($portfolio->interactive_prototype_image) {
            $portfolio->interactive_prototype_image->delete();
        }

        if ($request->input('design_iteration_image', false)) {
            if (!$portfolio->design_iteration_image || $request->input('design_iteration_image') !== $portfolio->design_iteration_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('design_iteration_image')))->toMediaCollection('design_iteration_image');
            }
        } elseif ($portfolio->design_iteration_image) {
            $portfolio->design_iteration_image->delete();
        }

        if ($request->input('final_prototype_image', false)) {
            if (!$portfolio->final_prototype_image || $request->input('final_prototype_image') !== $portfolio->final_prototype_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('final_prototype_image')))->toMediaCollection('final_prototype_image');
            }
        } elseif ($portfolio->final_prototype_image) {
            $portfolio->final_prototype_image->delete();
        }

        if ($request->input('outcome_image', false)) {
            if (!$portfolio->outcome_image || $request->input('outcome_image') !== $portfolio->outcome_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('outcome_image')))->toMediaCollection('outcome_image');
            }
        } elseif ($portfolio->outcome_image) {
            $portfolio->outcome_image->delete();
        }

        if ($request->input('learning_image', false)) {
            if (!$portfolio->learning_image || $request->input('learning_image') !== $portfolio->learning_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('learning_image')))->toMediaCollection('learning_image');
            }
        } elseif ($portfolio->learning_image) {
            $portfolio->learning_image->delete();
        }
        if ($request->input('design_system_image', false)) {
            if (!$portfolio->design_system_image || $request->input('design_system_image') !== $portfolio->design_system_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('design_system_image')))->toMediaCollection('design_system_image');
            }
        } elseif ($portfolio->design_system_image) {
            $portfolio->design_system_image->delete();
        }
        if ($request->input('final_design_image', false)) {
            if (!$portfolio->final_design_image || $request->input('final_design_image') !== $portfolio->final_design_image->file_name) {
                $portfolio->addMedia(storage_path('tmp/uploads/' . $request->input('final_design_image')))->toMediaCollection('final_design_image');
            }
        } elseif ($portfolio->final_design_image) {
            $portfolio->final_design_image->delete();
        }

        return redirect()->route('admin.portfolios.index');
    }

    public function show(Portfolio $portfolio)
    {
        abort_if(Gate::denies('project_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $portfolio->load('category', );

        return view('admin.portfolios.show', compact('portfolio'));
    }

    public function destroy(Portfolio $portfolio)
    {
        abort_if(Gate::denies('project_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $portfolio->delete();

        return back();
    }

    public function massDestroy(MassDestroyPortfolioRequest $request)
    {
        Portfolio::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
