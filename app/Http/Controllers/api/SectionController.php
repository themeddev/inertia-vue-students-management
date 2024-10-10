<?php

namespace App\Http\Controllers\Api;

use App\Models\Section;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ListSectionRequest;
use App\Http\Resources\SectionResource;

class SectionController extends Controller
{
    public function __invoke(ListSectionRequest $request)
    {
        $classe_id = $request->classe_id;

        return SectionResource::collection(Section::where('classe_id', $classe_id)->get());
    }
}