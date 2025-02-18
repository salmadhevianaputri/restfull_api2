<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::table('orders', function (Blueprint $table) {
        $table->unsignedBigInteger('customer_id')->after('id');

        // Menambahkan foreign key constraint
        $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
    });
}
public function orders()
{
    return $this->hasMany(Order::class);
}
};
