<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm27MakuatsuCalc
 * 
 * @property int $tm27_MakuatsuCalcCode
 * @property int|null $tm27_TokuisakiCode
 * @property int|null $tm27_MakuatsuRange
 * @property int|null $tm27_TankaRange
 * @property int|null $tm27_UwanoseKbn
 * @property float|null $tm27_UwanoseKingaku
 * @property Carbon|null $tm27_RegistDate
 * @property Carbon|null $tm27_UpdateDate
 * @property int|null $tm27_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm27MakuatsuCalc extends Model
{
	protected $table = 'tm27_MakuatsuCalc';
	protected $primaryKey = 'tm27_MakuatsuCalcCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm27_MakuatsuCalcCode' => 'int',
		'tm27_TokuisakiCode' => 'int',
		'tm27_MakuatsuRange' => 'int',
		'tm27_TankaRange' => 'int',
		'tm27_UwanoseKbn' => 'int',
		'tm27_UwanoseKingaku' => 'float',
		'tm27_RegistDate' => 'datetime',
		'tm27_UpdateDate' => 'datetime',
		'tm27_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm27_TokuisakiCode',
		'tm27_MakuatsuRange',
		'tm27_TankaRange',
		'tm27_UwanoseKbn',
		'tm27_UwanoseKingaku',
		'tm27_RegistDate',
		'tm27_UpdateDate',
		'tm27_UpdateTantoCode'
	];
}
