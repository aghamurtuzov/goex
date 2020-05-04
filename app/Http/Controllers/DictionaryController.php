<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DictionaryController extends Controller
{
    public function getDictionary()
    {

        $results = Country::all();

        $results_ = Category::all();

        return view("site-admin.dictionary.dictionaries", ['results' => $results, 'results_' => $results_]);
    }

    public function getCountryEdit(Request $request, $id)
    {
        $result = Country::find($id);

        return view('site-admin.dictionary.country-edit', ['result' => $result]);
    }

    public function postCountryEdit(CountryRequest $request, $id = 0)
    {
        $request->validated();

        $message = !$id ? 'Ölkə əlavə olundu' : 'Ölkə redaktə olundu';

//        $request->request->add(['user_id' => Auth::user()->id]);

        BaseController::postModuleEdit($request, $id, 'countries', $message);

        return Redirect::back();
    }


    public function getCategoryEdit($id)
    {
        $results = Country::find($id);

        return view('site-admin.dictionary.category-edit', ['results' => $results]);
    }

    public function postCategoryEdit(CategoryRequest $request, $id = 0)
    {
        $request->validated();

        $message = !$id ? 'Kategoriya əlavə olundu' : 'Kategoriya redaktə olundu';

        $request->request->add(['user_id' => Auth::user()->id]);

        BaseController::postModuleEdit($request, $id, 'categories', $message);

        return Redirect::back();
    }
}
