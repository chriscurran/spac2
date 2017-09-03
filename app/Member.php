<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = ['widget_name'];    

	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'members';


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

}
