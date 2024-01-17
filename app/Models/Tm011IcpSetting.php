<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm011IcpSetting
 * 
 * @property int $ID
 * @property int|null $tm011_LineCode
 * @property int $tm011_PassingKoteiCode
 * @property int $tm011_YakuhinCode
 * @property float|null $tm011_LowerLimit
 * @property float|null $tm011_UpperLimit
 * @property float|null $tm011_LowerLimitPeak
 * @property float|null $tm011_UpperLimitPeak
 * @property float|null $tm011_WarningDown
 * @property float|null $tm011_WarningUp
 * @property Carbon|null $tm011_RegistDate
 * @property Carbon|null $tm011_UpdateDate
 * @property int|null $tm011_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm011IcpSetting extends Model
{
	protected $table = 'tm011_IcpSetting';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'tm011_LineCode' => 'int',
		'tm011_PassingKoteiCode' => 'int',
		'tm011_YakuhinCode' => 'int',
		'tm011_LowerLimit' => 'float',
		'tm011_UpperLimit' => 'float',
		'tm011_LowerLimitPeak' => 'float',
		'tm011_UpperLimitPeak' => 'float',
		'tm011_WarningDown' => 'float',
		'tm011_WarningUp' => 'float',
		'tm011_RegistDate' => 'datetime',
		'tm011_UpdateDate' => 'datetime',
		'tm011_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm011_LineCode',
		'tm011_PassingKoteiCode',
		'tm011_YakuhinCode',
		'tm011_LowerLimit',
		'tm011_UpperLimit',
		'tm011_LowerLimitPeak',
		'tm011_UpperLimitPeak',
		'tm011_WarningDown',
		'tm011_WarningUp',
		'tm011_RegistDate',
		'tm011_UpdateDate',
		'tm011_UpdateTantoCode'
	];
}
