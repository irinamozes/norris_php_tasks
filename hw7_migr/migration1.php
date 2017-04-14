<?php
require 'vendor/autoload.php';

require 'connect.php';


class CreateCategoryTable extends Migration
{
    public function up()
    {
        $schema = Capsule::schema();
        $schema->create('categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('categoryname');
            $table->timestamps();
        });
    }

    public function down()
    {
        $schema = Capsule::schema();
        $schema->drop('categories');
    }
}


class CreateGoodsTable extends Migration
{
    public function up()
    {
        $schema = Capsule::schema();
        $schema->create('goods', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('goodname');
            $table->timestamps();
            $table->integer('categories_id');
        });
    }
    public function down()
    {
        $schema = Capsule::schema();
        $schema->drop('goods');
    }
}
