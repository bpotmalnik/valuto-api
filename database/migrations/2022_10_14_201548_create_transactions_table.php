<?php

use App\Models\Transaction;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create((new Transaction)->getTable(), function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('account_id');
            $table->string('name');
            $table->bigInteger('amount');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists((new Transaction)->getTable());
    }
};
