<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm009ErrorSendSchedule
 * 
 * @property int $id
 * @property int $tm009_LineCode
 * @property int $tm009_Type
 * @property int $tm009_SendWeek
 * @property bool|null $tm009_YukouFlg
 * @property Carbon|null $tm009_SendDate
 * @property int|null $tm009_SendStartHour
 * @property int|null $tm009_SendStartMinute
 * @property int|null $tm009_SendEndHour
 * @property int|null $tm009_SendEndMinute
 * @property Carbon|null $tm009_RegistDate
 * @property Carbon|null $tm009_UpdateDate
 * @property int|null $tm009_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm009ErrorSendSchedule extends Model
{
	protected $table = 'tm009_ErrorSendSchedule';
	public $timestamps = false;

	protected $casts = [
		'tm009_LineCode' => 'int',
		'tm009_Type' => 'int',
		'tm009_SendWeek' => 'int',
		'tm009_YukouFlg' => 'bool',
		'tm009_SendDate' => 'datetime',
		'tm009_SendStartHour' => 'int',
		'tm009_SendStartMinute' => 'int',
		'tm009_SendEndHour' => 'int',
		'tm009_SendEndMinute' => 'int',
		'tm009_RegistDate' => 'datetime',
		'tm009_UpdateDate' => 'datetime',
		'tm009_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm009_LineCode',
		'tm009_Type',
		'tm009_SendWeek',
		'tm009_YukouFlg',
		'tm009_SendDate',
		'tm009_SendStartHour',
		'tm009_SendStartMinute',
		'tm009_SendEndHour',
		'tm009_SendEndMinute',
		'tm009_RegistDate',
		'tm009_UpdateDate',
		'tm009_UpdateTantoCode'
	];
}
