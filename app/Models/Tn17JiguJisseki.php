<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn17JiguJisseki
 * 
 * @property int $id
 * @property int $tn17_ShijiNo
 * @property int $tn17_ShijiMeisaiNo
 * @property int|null $tn17_LineCode
 * @property string|null $tn17_JiguNo
 * @property Carbon|null $tn17_RegistDate
 * @property Carbon|null $tn17_UpdateDate
 * @property int|null $tn17_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn17JiguJisseki extends Model
{
	protected $table = 'tn17_JiguJisseki';
	public $timestamps = false;

	protected $casts = [
		'tn17_ShijiNo' => 'int',
		'tn17_ShijiMeisaiNo' => 'int',
		'tn17_LineCode' => 'int',
		'tn17_RegistDate' => 'datetime',
		'tn17_UpdateDate' => 'datetime',
		'tn17_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn17_ShijiNo',
		'tn17_ShijiMeisaiNo',
		'tn17_LineCode',
		'tn17_JiguNo',
		'tn17_RegistDate',
		'tn17_UpdateDate',
		'tn17_UpdateTantoCode'
	];
}
