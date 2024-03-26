<?php

use App\Models\Member;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ammountables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('ammountable_id');
            $table->integer('ammountable_model');
            $table->foreignIdFor(Member::class, 'created_by');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ammountables');
    }
};
