<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Http\Resources\Form\FormResource;
use App\Models\Form;

class IndexController extends Controller
{
    public function __invoke()
    {
        $forms = Form::orderBy('id', 'desc')->paginate(12);
        return FormResource::collection($forms);
    }
}
