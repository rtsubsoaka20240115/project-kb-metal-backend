<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm22Chiho
 * 
 * @property int $tm22_ChihoCode
 * @property string|null $tm22_ChihoName
 * @property Carbon|null $tm22_RegistDate
 * @property Carbon|null $tm22_UpdateDate
 * @property int|null $tm22_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm22Chiho extends Model
{
	protected $table = 'tm22_Chiho';
	protected $primaryKey = 'tm22_ChihoCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm22_ChihoCode' => 'int',
		'tm22_RegistDate' => 'datetime',
		'tm22_UpdateDate' => 'datetime',
		'tm22_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm22_ChihoName',
		'tm22_RegistDate',
		'tm22_UpdateDate',
		'tm22_UpdateTantoCode'
	];
}
