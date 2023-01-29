<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Token
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Token newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Token newQuery()
 * @method static \Illuminate\Database\Query\Builder|Token onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Token query()
 * @method static \Illuminate\Database\Query\Builder|Token withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Token withoutTrashed()
 * @mixin \Eloquent
 */
class Token extends Model
{

	use SoftDeletes;
	 public $table = 'tokens'; 

	  protected $fillable = ['user_id','device_type','fcm_token','accept'];
	  protected $hidden = ['updated_at','deleted_at'];

}
