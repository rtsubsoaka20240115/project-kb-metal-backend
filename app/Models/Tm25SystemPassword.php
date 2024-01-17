<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm25SystemPassword
 * 
 * @property int $tm25_SystemPasswordCode
 * @property string|null $tm25_SystemPassword
 * @property Carbon|null $tm25_RegistDate
 * @property Carbon|null $tm25_UpdateDate
 * @property int|null $tm25_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm25SystemPassword extends Model
{
	protected $table = 'tm25_SystemPassword';
	protected $primaryKey = 'tm25_SystemPasswordCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm25_SystemPasswordCode' => 'int',
		'tm25_RegistDate' => 'datetime',
		'tm25_UpdateDate' => 'datetime',
		'tm25_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm25_SystemPassword',
		'tm25_RegistDate',
		'tm25_UpdateDate',
		'tm25_UpdateTantoCode'
	];
}
