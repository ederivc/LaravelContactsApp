<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameIdFromAddress extends Migration
{
    protected $primaryKey = 'address_id';
    // public $incremententing = false;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('address', function (Blueprint $table) {
            $table->renameColumn('id', 'address_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('address', function (Blueprint $table) {
            $table->renameColumn('address_id', 'id');
        });
    }
}
