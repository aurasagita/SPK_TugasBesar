<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class criteriaController extends Controller
{
    //
    public function index()
    {
        $criterias = Criteria::paginate(10);
        return view('criteria', ['criterias' => $criterias]);
    }

    public function edit($id)
    {
        $criteria = Criteria::find($id);

        return view('editCriteria', compact('criteria'));
        // dd($criteria);
    }

    public function update(Request $request, $id)
    {
        Criteria::find($id)->update($request->all());

        return redirect('/criterias');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $criterias = Criteria::where('type', 'like', "%$query%")
                ->orderBy('type', 'asc')
                ->paginate(10);
        } else {
            $criterias = Criteria::paginate(10);
        }

        return view('criteria', ['criterias' => $criterias, 'query' => $query]);
    }

}
