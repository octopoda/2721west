<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class daily extends Model {
	protected $fillable = ['day', 'image', 'type', 'published'];
}
