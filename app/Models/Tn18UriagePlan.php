<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn18UriagePlan
 * 
 * @property int $tn18_UriagePlanNo
 * @property int|null $tn18_Year
 * @property int|null $tn18_TantoCode
 * @property float|null $tn18_1Month
 * @property float|null $tn18_2Month
 * @property float|null $tn18_3Month
 * @property float|null $tn18_4Month
 * @property float|null $tn18_5Month
 * @property float|null $tn18_6Month
 * @property float|null $tn18_7Month
 * @property float|null $tn18_8Month
 * @property float|null $tn18_9Month
 * @property float|null $tn18_10Month
 * @property float|null $tn18_11Month
 * @property float|null $tn18_12Month
 * @property float|null $tn18_KamikiTotal
 * @property float|null $tn18_ShimokiTotal
 * @property float|null $tn18_Total
 * @property Carbon|null $tn18_RegistDate
 * @property Carbon|null $tn18_UpdateDate
 * @property int|null $tn18_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn18UriagePlan extends Model
{
	protected $table = 'tn18_UriagePlan';
	protected $primaryKey = 'tn18_UriagePlanNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn18_UriagePlanNo' => 'int',
		'tn18_Year' => 'int',
		'tn18_TantoCode' => 'int',
		'tn18_1Month' => 'float',
		'tn18_2Month' => 'float',
		'tn18_3Month' => 'float',
		'tn18_4Month' => 'float',
		'tn18_5Month' => 'float',
		'tn18_6Month' => 'float',
		'tn18_7Month' => 'float',
		'tn18_8Month' => 'float',
		'tn18_9Month' => 'float',
		'tn18_10Month' => 'float',
		'tn18_11Month' => 'float',
		'tn18_12Month' => 'float',
		'tn18_KamikiTotal' => 'float',
		'tn18_ShimokiTotal' => 'float',
		'tn18_Total' => 'float',
		'tn18_RegistDate' => 'datetime',
		'tn18_UpdateDate' => 'datetime',
		'tn18_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn18_Year',
		'tn18_TantoCode',
		'tn18_1Month',
		'tn18_2Month',
		'tn18_3Month',
		'tn18_4Month',
		'tn18_5Month',
		'tn18_6Month',
		'tn18_7Month',
		'tn18_8Month',
		'tn18_9Month',
		'tn18_10Month',
		'tn18_11Month',
		'tn18_12Month',
		'tn18_KamikiTotal',
		'tn18_ShimokiTotal',
		'tn18_Total',
		'tn18_RegistDate',
		'tn18_UpdateDate',
		'tn18_UpdateTantoCode'
	];
}
