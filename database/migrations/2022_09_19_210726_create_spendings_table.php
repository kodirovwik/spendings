<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\SpendingType;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spendings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SpendingType::class)->references('id')->on('spending_types');
            $table->string('amount')->comment('Сумма траты');
            $table->timestamp('spending_date')->comment('Дата траты');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spendings');
    }
};
