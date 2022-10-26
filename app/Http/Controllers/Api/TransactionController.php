<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TransactionController extends Controller
{
    public function index(): ResourceCollection
    {
        $transactions = Transaction::all();

        return TransactionResource::collection($transactions);
    }

    public function show(Transaction $transaction): TransactionResource
    {
        return TransactionResource::make($transaction);
    }

    public function store(StoreTransactionRequest $request): void
    {
        //
    }


    public function update(
        UpdateTransactionRequest $request,
        Transaction $transaction
    ): void
    {
        //
    }

    public function destroy(Transaction $transaction): void
    {
        //
    }
}
