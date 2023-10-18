<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;

class StoreCompanyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreCompanyRequest $request)
    {
        $company = Company::create($request->validated());

        return CompanyResource::make($company);
    }
}
