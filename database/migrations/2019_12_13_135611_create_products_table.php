
<?php

  use Illuminate\Support\Facades\Schema;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;

  class CreateProductsTable extends Migration
  {
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
          Schema::create('products', function (Blueprint $table) {
              $table->engine = 'InnoDB';
              $table->increments('id');
              $table->integer('numArticle')->nullable();
              $table->string('title')->nullable();
              $table->string('photo')->nullable();
              $table->text('description')->nullable();
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
          Schema::dropIfExists('products');
      }
  }
