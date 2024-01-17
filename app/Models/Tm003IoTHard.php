<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm003IoTHard
 * 
 * @property int $tm003_HardCode
 * @property string|null $tm003_HardName
 * @property string|null $tm003_RyakuName
 * @property string|null $tm003_KikiKbn
 * @property int|null $tm003_LineCode
 * @property Carbon|null $tm003_SetDateTime
 * @property string|null $tm003_Biko
 * @property Carbon|null $tm003_RegistDate
 * @property Carbon|null $tm003_UpdateDate
 * @property int|null $tm003_UpdateTantoCode
 * @property string|null $tm003_IPAddress
 * @property int|null $tm003_PassingKoteiCode
 * @property int|null $tm003_ReadType
 *
 * @package App\Models
 */
class Tm003IoTHard extends Model
{
	protected $table = 'tm003_IoTHard';
	protected $primaryKey = 'tm003_HardCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm003_HardCode' => 'int',
		'tm003_LineCode' => 'int',
		'tm003_SetDateTime' => 'datetime',
		'tm003_RegistDate' => 'datetime',
		'tm003_UpdateDate' => 'datetime',
		'tm003_UpdateTantoCode' => 'int',
		'tm003_PassingKoteiCode' => 'int',
		'tm003_ReadType' => 'int'
	];

	protected $fillable = [
		'tm003_HardName',
		'tm003_RyakuName',
		'tm003_KikiKbn',
		'tm003_LineCode',
		'tm003_SetDateTime',
		'tm003_Biko',
		'tm003_RegistDate',
		'tm003_UpdateDate',
		'tm003_UpdateTantoCode',
		'tm003_IPAddress',
		'tm003_PassingKoteiCode',
		'tm003_ReadType'
	];
}
