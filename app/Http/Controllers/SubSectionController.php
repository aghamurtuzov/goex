<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubSectionRequest;
use App\Models\Filial;
use App\Models\Section;
use App\Models\SubSection;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Country;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SubSectionController extends Controller
{
    public function getSubSections()
    {

        $results = SubSection::paginate(20);

        $sections = Section::all();

        return view('admin.subsection.subsection', ['results' => $results, "sections" => $sections]);
    }


    public function getSubSectionEdit(Request $request, $id)
    {
        $result = SubSection::find($id);

        $sections = Section::where(['status' => true, 'delete' => false])->get();

        return view('admin.subsection.subsection-edit', ['result' => $result, 'sections' => $sections]);
    }


    public function postSubSectionEdit(SubSectionRequest $request, $id = 0)
    {
        $request->validated();

        $message = !$id ? ' əlavə olundu' : ' redaktə olundu';

        $request->request->add(['user_id' => Auth::user()->id]);

        BaseController::postModuleEdit($request, $id, 'sub_sections', $message);

        return Redirect::back();
    }


}
