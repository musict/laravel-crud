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
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view("workers.index", [
            'workers' => worker::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $companies = DB::table('companies')->get('name');
        return view("workers.create")->with('companies', $companies);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Worker  $worker
     * @return View
     */
    public function edit(Worker $worker): View
    {
        $companies = DB::table('companies')->get('name');
        return view("workers.edit", [
            'worker' => $worker
        ])->with('companies', $companies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Worker  $worker
     * @return RedirectResponse
     */
    public function update(Request $request, Worker $worker): RedirectResponse
    {
        $worker->fill($request->all());
        $worker->save();
        return redirect(route('workers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Worker  $worker
     * @return RedirectResponse
     */
    public function destroy(Worker $worker): RedirectResponse
    {
        $worker->delete();
        return redirect(route('workers.index'));
    }

    public function company(){
        return $this->hasOne(Company::class);
    }
}
