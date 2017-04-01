<?php

    class Userdata extends Eloquent {


        /**
        * The database table used by the model.
        *
        * @var string
        */
        protected $table = 'userdatas';
        /**
        * The attributes excluded from the model's JSON form.
        *
        * @var array
        */
        protected $fillable = array('username','level');

    }
