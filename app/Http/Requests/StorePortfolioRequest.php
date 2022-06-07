<?php

namespace App\Http\Requests;

use App\Project;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StorePortfolioRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('project_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'       => [
                'required',
            ],
            'category_id'  => [
                'required',
                'integer',
            ],
            'slug'        => [
                'required', 'unique:portfolios'
            ],

        ];
    }
}
