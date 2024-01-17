<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn13SagyoJisseki
 * 
 * @property int $id
 * @property Carbon $tn13_SagyoDateTime
 * @property int $tn13_LineCode
 * @property int $tn13_TantoCode
 * @property int $tn13_RenNo
 * @property int|null $tn13_ShijiNo
 * @property int|null $tn13_ShijiMeisaiNo
 * @property int|null $tn13_SagyoCode
 * @property string|null $tn13_JiguNo
 * @property bool|null $tn13_SaishoriFlg
 * @property Carbon|null $tn13_RegistDate
 * @property Carbon|null $tn13_UpdateDate
 * @property int|null $tn13_UpdateTantoCode
 * @property int|null $tn13_PipeNo
 * @property int|null $tn13_TantoCode2
 * @property int|null $tn13_TeacherCode
 * @property Carbon|null $tn13_SagyoEndDateTime
 *
 * @package App\Models
 */
class Tn13SagyoJisseki extends Model
{
	protected $table = 'tn13_SagyoJisseki';
	public $timestamps = false;

	protected $casts = [
		'tn13_SagyoDateTime' => 'datetime',
		'tn13_LineCode' => 'int',
		'tn13_TantoCode' => 'int',
		'tn13_RenNo' => 'int',
		'tn13_ShijiNo' => 'int',
		'tn13_ShijiMeisaiNo' => 'int',
		'tn13_SagyoCode' => 'int',
		'tn13_SaishoriFlg' => 'bool',
		'tn13_RegistDate' => 'datetime',
		'tn13_UpdateDate' => 'datetime',
		'tn13_UpdateTantoCode' => 'int',
		'tn13_PipeNo' => 'int',
		'tn13_TantoCode2' => 'int',
		'tn13_TeacherCode' => 'int',
		'tn13_SagyoEndDateTime' => 'datetime'
	];

	protected $fillable = [
		'tn13_SagyoDateTime',
		'tn13_LineCode',
		'tn13_TantoCode',
		'tn13_RenNo',
		'tn13_ShijiNo',
		'tn13_ShijiMeisaiNo',
		'tn13_SagyoCode',
		'tn13_JiguNo',
		'tn13_SaishoriFlg',
		'tn13_RegistDate',
		'tn13_UpdateDate',
		'tn13_UpdateTantoCode',
		'tn13_PipeNo',
		'tn13_TantoCode2',
		'tn13_TeacherCode',
		'tn13_SagyoEndDateTime'
	];
}
