<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view("companies.index", [
            'companies' => Company::paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("companies.create");
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
           'nip' => 'required|max:20',
           'address' => 'required|max:500',
           'city' => 'required|max:50',
           'postal_code' => 'required|max:20',
        ]);
        $company = new Company($request->all());
        $company->save();
        return redirect(route('companies.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Company  $company
     * @return View
     */
    public function edit(Company $company): View
    {
        return view("companies.edit", [
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Company  $company
     * @return RedirectResponse
     */
    public function update(Request $request, Company $company): RedirectResponse
    {
        $company->fill($request->all());
        $company->save();
        return redirect(route('companies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Company  $company
     * @return RedirectResponse
     */
    public function destroy(Company $company): RedirectResponse
    {
        $company->delete();
        return redirect(route('companies.index'));
    }
}
