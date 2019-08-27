<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class TReferenceDate extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            //
            Schema::create('t_reference_date', function (Blueprint $table) {
                           $table->bigIncrements('id');
                           $table->date('reference_date');
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
            //
        }
    }
