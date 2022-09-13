<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
             $table->string('coupon_title');
              $table->string('coupon_dics');
               $table->string('coupon_url');
                $table->string('coupon_code');
                 $table->string('expire_date');
                 $table->string('brand_id');
                 $table->string('discount');
                 $table->string('type');
                  $table->string('status');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
