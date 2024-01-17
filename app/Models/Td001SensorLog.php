<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Td001SensorLog
 * 
 * @property int $id
 * @property int $td001_SensorCode
 * @property int $td001_Type
 * @property Carbon $td001_KeisokuDateTime
 * @property float|null $td001_SensorNum
 *
 * @package App\Models
 */
class Td001SensorLog extends Model
{
	protected $table = 'td001_SensorLog';
	public $timestamps = false;

	protected $casts = [
		'td001_SensorCode' => 'int',
		'td001_Type' => 'int',
		'td001_KeisokuDateTime' => 'datetime',
		'td001_SensorNum' => 'float'
	];

	protected $fillable = [
		'td001_SensorCode',
		'td001_Type',
		'td001_KeisokuDateTime',
		'td001_SensorNum'
	];
}
