<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Td006NohinDelayMailSendLog
 * 
 * @property int $id
 * @property int $td006_ShijiNo
 * @property int $td006_ShijiMeisaiNo
 * @property int $td006_SagyoCode
 * @property Carbon|null $td006_SendDate
 * @property string|null $td006_MailAddress
 *
 * @package App\Models
 */
class Td006NohinDelayMailSendLog extends Model
{
	protected $table = 'td006_NohinDelayMailSendLog';
	public $timestamps = false;

	protected $casts = [
		'td006_ShijiNo' => 'int',
		'td006_ShijiMeisaiNo' => 'int',
		'td006_SagyoCode' => 'int',
		'td006_SendDate' => 'datetime'
	];

	protected $fillable = [
		'td006_ShijiNo',
		'td006_ShijiMeisaiNo',
		'td006_SagyoCode',
		'td006_SendDate',
		'td006_MailAddress'
	];
}
