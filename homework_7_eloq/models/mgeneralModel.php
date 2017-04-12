<?php
class User extends \Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;
    public function profile()
     {
          return $this->hasOne('Profile');
     }
     public function image()
          {
               return $this->hasMany('Image');
          }

}

class Profile extends \Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;

    public function user()
    {
         return $this->belongsTo('User');
    }


}

class Image extends \Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;
    public function user()
    {
         return $this->belongsTo('User');
    }
}
