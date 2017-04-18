<?php
require 'vendor/autoload.php';

require 'connect.php';

class Category extends Illuminate\Database\Eloquent\Model {
    public function goods() {
        return $this->hasMany('Good', 'categories_id');
    }
}

class Good extends Illuminate\Database\Eloquent\Model {
    public function categories() {
        return $this->belongsTo('Category');
    }
}
