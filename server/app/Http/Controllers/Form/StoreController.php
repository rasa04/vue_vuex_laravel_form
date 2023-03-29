<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form\StoreRequest;
use App\Http\Resources\Form\FormResource;
use Illuminate\Http\Request;
use App\Models\Form;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $form = $request->validated();
        $new_form = Form::create($form);
        return FormResource::make($new_form)->resolve();
    }
}
