<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class GetCompaniesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $ids = null)
    {
        if ($ids) {
            $companyIds = Arr::map(explode(',', $ids), function (string $value, string $key) {
                return (int) $value;
            });

            return CompanyResource::collection(Company::whereIn('companyId', $companyIds)->get());
        }

        return CompanyResource::collection(Company::all());
    }
}
