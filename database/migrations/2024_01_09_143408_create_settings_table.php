<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->text('short_des');
            $table->string('logo');
            $table->string('photo');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
        DB::table('settings')->insert([
            'description'=>'Chào mừng bạn đến với cửa hàng của Khánh!',
            'short_des'=>'shsshsggs',
            'logo'=>'/storage/photos/1/Settings/logo.png',
            'photo'=>'/storage/photos/1/Settings/footer-logo.png',
            'address'=>'Điện Biên Phủ,Bình Thạnh,TP HCM',
            'phone'=>'0123456789',
            'email'=>'admin@gmail.com',
        ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
