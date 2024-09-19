<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('financial_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained();
            $table->enum('report_type', ['project', 'company']);
            $table->date('start_date');
            $table->date('end_date');
            $table->json('report_data');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('financial_reports');
    }
};
