<?php
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

$capsule = new Capsule();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'loft_shop',
    'username' => 'root',
    'password' => '123',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();


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

class Category extends Illuminate\Database\Eloquent\Model {
    public function goods() {
        return $this->hasMany('Good');
    }
}

class Good extends Illuminate\Database\Eloquent\Model {
    public function categories() {
        return $this->belongsTo('Category');
    }
}
