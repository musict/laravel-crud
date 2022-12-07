<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Worker;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkerController extends Controller
{

    public function index(): View
    {
        return view("workers.index", [
            'workers' => worker::paginate(8)
        ]);
    }

    public function create(): View
    {
        $companies = DB::table('companies')->get();
        return view("workers.create")->with('companies', $companies);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'max:20',
        ]);
        $worker = new Worker($request->all());
        $worker->save();
        return redirect(route('workers.index'));
    }

    public function edit(Worker $worker): View
    {
        $companies = DB::table('companies')->get();
        return view("workers.edit", [
            'worker' => $worker
        ])->with('companies', $companies);
    }

    public function update(Request $request, Worker $worker): RedirectResponse
    {
        $worker->fill($request->all());
        $worker->save();
        return redirect(route('workers.index'));
    }

    public function destroy(Worker $worker): RedirectResponse
    {
        $worker->delete();
        return redirect(route('workers.index'));
    }

}
