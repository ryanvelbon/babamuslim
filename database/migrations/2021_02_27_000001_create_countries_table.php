<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCountriesTable extends Migration
{
    public function up()
    {
        $sql = file_get_contents(dirname(__DIR__, 1) . "/sql/countries.sql");
        DB::unprepared($sql);
    }

    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
