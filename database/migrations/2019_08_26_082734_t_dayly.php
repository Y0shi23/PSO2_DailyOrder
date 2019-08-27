<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class TDayly extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('t_dayly', function (Blueprint $table) {
                           $table->bigIncrements('id');
                           $table->string('difficulty_N1');
                           $table->string('difficulty_N2');
                           $table->string('difficulty_H1');
                           $table->string('difficulty_H2');
                           $table->string('difficulty_VH1');
                           $table->string('difficulty_VH2');
                           $table->string('difficulty_SH1');
                           $table->string('difficulty_SH2');
                           $table->string('baster');
                           $table->string('gathering1');
                           $table->string('gathering2');
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
            Schema::dropIfExists('t_dayly');
        }
    }
