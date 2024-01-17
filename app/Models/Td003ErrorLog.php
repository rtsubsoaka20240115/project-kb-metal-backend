<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Td003ErrorLog
 * 
 * @property int $td003_Id
 * @property Carbon $td003_DateTime
 * @property int $td003_Type
 * @property int|null $td003_LineCode
 * @property int $td001_SensorCode
 * @property string|null $td003_HardName
 * @property string $td003_Jyokyo
 * @property int|null $td003_ErrorLevel
 * @property bool|null $td003_SendFlg
 *
 * @package App\Models
 */
class Td003ErrorLog extends Model
{
	protected $table = 'td003_ErrorLog';
	protected $primaryKey = 'td003_Id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'td003_Id' => 'int',
		'td003_DateTime' => 'datetime',
		'td003_Type' => 'int',
		'td003_LineCode' => 'int',
		'td001_SensorCode' => 'int',
		'td003_ErrorLevel' => 'int',
		'td003_SendFlg' => 'bool'
	];

	protected $fillable = [
		'td003_DateTime',
		'td003_Type',
		'td003_LineCode',
		'td001_SensorCode',
		'td003_HardName',
		'td003_Jyokyo',
		'td003_ErrorLevel',
		'td003_SendFlg'
	];
}
