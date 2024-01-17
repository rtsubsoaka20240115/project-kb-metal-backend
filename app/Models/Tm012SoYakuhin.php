<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm012SoYakuhin
 * 
 * @property int $id
 * @property int $tm012_PassingKoteiCode
 * @property int $tm012_LineCode
 * @property int $tm012_YakuhinCode
 * @property float|null $tm012_LowerLimit
 * @property float|null $tm012_UpperLimit
 * @property float|null $tm012_LowerLimitPeak
 * @property float|null $tm012_UpperLimitPeak
 * @property float|null $tm012_WarningDown
 * @property float|null $tm012_WarningUp
 * @property string|null $tm012_Target
 * @property Carbon|null $tm012_RegistDate
 * @property Carbon|null $tm012_UpdateDate
 * @property int|null $tm012_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm012SoYakuhin extends Model
{
	protected $table = 'tm012_SoYakuhin';
	public $timestamps = false;

	protected $casts = [
		'tm012_PassingKoteiCode' => 'int',
		'tm012_LineCode' => 'int',
		'tm012_YakuhinCode' => 'int',
		'tm012_LowerLimit' => 'float',
		'tm012_UpperLimit' => 'float',
		'tm012_LowerLimitPeak' => 'float',
		'tm012_UpperLimitPeak' => 'float',
		'tm012_WarningDown' => 'float',
		'tm012_WarningUp' => 'float',
		'tm012_RegistDate' => 'datetime',
		'tm012_UpdateDate' => 'datetime',
		'tm012_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm012_PassingKoteiCode',
		'tm012_LineCode',
		'tm012_YakuhinCode',
		'tm012_LowerLimit',
		'tm012_UpperLimit',
		'tm012_LowerLimitPeak',
		'tm012_UpperLimitPeak',
		'tm012_WarningDown',
		'tm012_WarningUp',
		'tm012_Target',
		'tm012_RegistDate',
		'tm012_UpdateDate',
		'tm012_UpdateTantoCode'
	];
}
