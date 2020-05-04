<?php

namespace App\Http\Controllers;

use App\Http\Requests\SackRequest;
use App\Models\Customer;
use App\Models\Filial;
use App\Models\Sack;
use App\Models\Section;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SackController extends Controller
{

    public function getSacks($position = null)
    {
        $results = new Sack();

        $position = self::position($results, $position);

        $results = $results->where('position', $position)->paginate(20);

        $stocks = Stock::where(['status' => true, 'delete' => false])->get();

        return view('admin.sack.sacks', ['results' => $results, "stocks" => $stocks, "position" => $position]);
    }

    public static function position($results, $position)
    {
        $position = $position == null ? 0 : $position;

        return [
            'count' => $position,
            'first' => $results->where('position', 0)->count(),
            'second' => $results->where('position', 1)->count(),
            'third' => $results->where('position', 2)->count(),
        ];
    }


    public function getSackView($id)
    {
        $sack = Sack::findOrFail($id);

        $filials = Filial::all();

        $results = Customer::paginate(20);

        return view('admin.sack.sack-view', ['sack' => $sack, 'results' => $results, 'filials' => $filials]);
    }

    public function getSackEdit(Request $request, $id)
    {
        $result = Section::find($id);

        $stocks = Stock::where(['status' => true, 'delete' => false])->get();

        return view('admin.sack.sack-edit', ['result' => $result, 'stocks' => $stocks]);
    }


    public function postSackEdit(SackRequest $request, $id = 0)
    {
        $request->validated();

        $message = !$id ? 'Çuval əlavə olundu' : 'Çuval redaktə olundu';

        $request->request->add(['user_id' => Auth::user()->id]);

        BaseController::postModuleEdit($request, $id, 'sacks', $message);

        return Redirect::back();
    }


}
