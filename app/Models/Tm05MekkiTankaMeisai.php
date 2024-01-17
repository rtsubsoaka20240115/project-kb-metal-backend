<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm05MekkiTankaMeisai
 * 
 * @property int $id
 * @property int $tm05_MekkiTankaCode
 * @property int $tm05_MekkiTankaMeisaiCode
 * @property float|null $tm05_CalcRange
 * @property int|null $tm05_CalcKbn
 * @property float|null $tm05_Tanka
 * @property float|null $tm05_MinTanka
 * @property Carbon|null $tm05_RegistDate
 * @property Carbon|null $tm05_UpdateDate
 * @property int|null $tm05_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm05MekkiTankaMeisai extends Model
{
	protected $table = 'tm05_MekkiTankaMeisai';
	public $timestamps = false;

	protected $casts = [
		'tm05_MekkiTankaCode' => 'int',
		'tm05_MekkiTankaMeisaiCode' => 'int',
		'tm05_CalcRange' => 'float',
		'tm05_CalcKbn' => 'int',
		'tm05_Tanka' => 'float',
		'tm05_MinTanka' => 'float',
		'tm05_RegistDate' => 'datetime',
		'tm05_UpdateDate' => 'datetime',
		'tm05_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm05_MekkiTankaCode',
		'tm05_MekkiTankaMeisaiCode',
		'tm05_CalcRange',
		'tm05_CalcKbn',
		'tm05_Tanka',
		'tm05_MinTanka',
		'tm05_RegistDate',
		'tm05_UpdateDate',
		'tm05_UpdateTantoCode'
	];
}
