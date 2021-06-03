<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("client");
            $table->foreignId("portfolio_category_id");
            $table->foreign("portfolio_category_id")->references('id')->on('portfolio_categories')->onDelete('cascade');
            $table->date("project_date");
            $table->longText("slug");
            $table->string("portfolio_url")->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
