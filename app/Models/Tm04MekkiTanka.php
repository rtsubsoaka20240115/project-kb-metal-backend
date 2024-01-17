<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm04MekkiTanka
 * 
 * @property int $tm04_MekkiTankaCode
 * @property int|null $tm04_MekkishuCode
 * @property int|null $tm04_TokuisakiCode
 * @property int|null $tm04_AreaWeightKbn
 * @property int|null $tm04_TankaBunruiCode
 * @property Carbon|null $tm04_RegistDate
 * @property Carbon|null $tm04_UpdateDate
 * @property int|null $tm04_UpdateTanto
 *
 * @package App\Models
 */
class Tm04MekkiTanka extends Model
{
	protected $table = 'tm04_MekkiTanka';
	protected $primaryKey = 'tm04_MekkiTankaCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm04_MekkiTankaCode' => 'int',
		'tm04_MekkishuCode' => 'int',
		'tm04_TokuisakiCode' => 'int',
		'tm04_AreaWeightKbn' => 'int',
		'tm04_TankaBunruiCode' => 'int',
		'tm04_RegistDate' => 'datetime',
		'tm04_UpdateDate' => 'datetime',
		'tm04_UpdateTanto' => 'int'
	];

	protected $fillable = [
		'tm04_MekkishuCode',
		'tm04_TokuisakiCode',
		'tm04_AreaWeightKbn',
		'tm04_TankaBunruiCode',
		'tm04_RegistDate',
		'tm04_UpdateDate',
		'tm04_UpdateTanto'
	];
}
