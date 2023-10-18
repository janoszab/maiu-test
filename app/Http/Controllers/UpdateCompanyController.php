<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;

class UpdateCompanyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Company $company, UpdateCompanyRequest $request)
    {
        $company->update($request->validated());

        return CompanyResource::make($company->fresh());
    }
}
