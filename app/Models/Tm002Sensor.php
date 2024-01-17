<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm002Sensor
 * 
 * @property int $id
 * @property int $tm002_SensorCode
 * @property int $tm002_Type
 * @property int $tm002_LineCode
 * @property string|null $tm002_SensorName
 * @property string|null $tm002_RyakuName
 * @property float|null $tm002_LowerLimit
 * @property float|null $tm002_UpperLimit
 * @property float|null $tm002_LowerLimitPeak
 * @property float|null $tm002_UpperLimitPeak
 * @property Carbon|null $tm002_ErrorSendStopDateTime
 * @property Carbon|null $tm002_SetDateTime
 * @property Carbon|null $tm002_RegistDate
 * @property Carbon|null $tm002_UpdateDate
 * @property int|null $tm002_UpdateTantoCode
 * @property int $tm002_HardCode
 * @property string|null $tm002_ASightDeviceID
 * @property bool|null $tm002_YukouFlg
 *
 * @package App\Models
 */
class Tm002Sensor extends Model
{
	protected $table = 'tm002_Sensor';
	public $timestamps = false;

	protected $casts = [
		'tm002_SensorCode' => 'int',
		'tm002_Type' => 'int',
		'tm002_LineCode' => 'int',
		'tm002_LowerLimit' => 'float',
		'tm002_UpperLimit' => 'float',
		'tm002_LowerLimitPeak' => 'float',
		'tm002_UpperLimitPeak' => 'float',
		'tm002_ErrorSendStopDateTime' => 'datetime',
		'tm002_SetDateTime' => 'datetime',
		'tm002_RegistDate' => 'datetime',
		'tm002_UpdateDate' => 'datetime',
		'tm002_UpdateTantoCode' => 'int',
		'tm002_HardCode' => 'int',
		'tm002_YukouFlg' => 'bool'
	];

	protected $fillable = [
		'tm002_SensorCode',
		'tm002_Type',
		'tm002_LineCode',
		'tm002_SensorName',
		'tm002_RyakuName',
		'tm002_LowerLimit',
		'tm002_UpperLimit',
		'tm002_LowerLimitPeak',
		'tm002_UpperLimitPeak',
		'tm002_ErrorSendStopDateTime',
		'tm002_SetDateTime',
		'tm002_RegistDate',
		'tm002_UpdateDate',
		'tm002_UpdateTantoCode',
		'tm002_HardCode',
		'tm002_ASightDeviceID',
		'tm002_YukouFlg'
	];
}
