<?php


use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Article extends Eloquent {


	 public $timestamps = false;
	 protected $table = 'articles';
	
	/*
	protected $fillable = ['username','password'];
	//protected $fillable = ['id','content','createdby'];

	use UserTrait, RemindableTrait;

	*
	 * The database table used by the model.
	 *
	 * @var string
	 
	protected $table = 'users';
	//protected $table = 'articles';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 
	protected $hidden = array('password', 'remember_token');*/

}
