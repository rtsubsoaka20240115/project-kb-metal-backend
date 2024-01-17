<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm16Zaishitsu
 * 
 * @property int $tm16_ZaishitsuCode
 * @property string|null $tm16_ZaishitsuName
 * @property Carbon|null $tm16_RegistDate
 * @property Carbon|null $tm16_UpdateDate
 * @property int|null $tm16_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm16Zaishitsu extends Model
{
	protected $table = 'tm16_Zaishitsu';
	protected $primaryKey = 'tm16_ZaishitsuCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm16_ZaishitsuCode' => 'int',
		'tm16_RegistDate' => 'datetime',
		'tm16_UpdateDate' => 'datetime',
		'tm16_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm16_ZaishitsuName',
		'tm16_RegistDate',
		'tm16_UpdateDate',
		'tm16_UpdateTantoCode'
	];
}
