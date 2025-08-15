<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('sales', function (Blueprint $table) {
            if (!Schema::hasColumn('sales', 'quantity')) {
                $table->integer('quantity');
            }
            if (!Schema::hasColumn('sales', 'price')) {
                $table->decimal('price', 10, 2);
            }
            if (!Schema::hasColumn('sales', 'total')) {
                $table->decimal('total', 10, 2);
            }
        });
    }

    public function down()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropColumn(['quantity', 'price', 'total']);
        });
    }
};

