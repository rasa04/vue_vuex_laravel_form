<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form\StoreRequest;
use App\Http\Resources\Form\FormResource;
use App\Models\Form;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $form = Form::factory()->make($data);
        $form->save();
        return FormResource::make($form)->resolve();
    }
}
