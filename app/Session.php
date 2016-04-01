<?php namespace twentyseven;

use Illuminate\Database\Eloquent\Model;

class Session extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['url', 'company_id', 'browser', 'time_on_page'];


	/**
	 * Get the company assoicated with the session
	 */
	public function company() {
		return $this->belongsTo('twentyseven\Company');
	}

	

}
