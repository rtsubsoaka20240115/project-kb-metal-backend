<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm21Todofuken
 * 
 * @property int $tm21_TodofukenCode
 * @property string|null $tm21_TodofukenName
 * @property int|null $tm21_ChihoCode
 * @property Carbon|null $tm21_RegistDate
 * @property Carbon|null $tm21_UpdateDate
 * @property int|null $tm21_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm21Todofuken extends Model
{
	protected $table = 'tm21_Todofuken';
	protected $primaryKey = 'tm21_TodofukenCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm21_TodofukenCode' => 'int',
		'tm21_ChihoCode' => 'int',
		'tm21_RegistDate' => 'datetime',
		'tm21_UpdateDate' => 'datetime',
		'tm21_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm21_TodofukenName',
		'tm21_ChihoCode',
		'tm21_RegistDate',
		'tm21_UpdateDate',
		'tm21_UpdateTantoCode'
	];
}
