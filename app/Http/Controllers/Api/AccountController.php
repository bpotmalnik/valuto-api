<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use App\Http\Resources\AccountResource;
use App\Models\Account;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AccountController extends Controller
{
    public function index(): ResourceCollection
    {
        $accounts = Account::all();

        return AccountResource::collection($accounts);
    }

    public function show(Account $account): AccountResource
    {
        return AccountResource::make($account);
    }

    public function store(StoreAccountRequest $request): void
    {
        //
    }

    public function update(UpdateAccountRequest $request, Account $account): void
    {
        //
    }

    public function destroy(Account $account): void
    {
        //
    }
}
