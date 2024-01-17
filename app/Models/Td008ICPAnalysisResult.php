<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Td008ICPAnalysisResult
 * 
 * @property int $ID
 * @property Carbon $td008_InputDateTime
 * @property int $td008_LineCode
 * @property int $td008_PassingKoteiCode
 * @property int|null $td008_YakuhinCode1
 * @property int|null $td008_YakuhinCode2
 * @property int|null $td008_YakuhinCode3
 * @property float|null $td008_YakuhinNodo1
 * @property float|null $td008_YakuhinNodo2
 * @property float|null $td008_YakuhinNodo3
 * @property float|null $td008_Tekitei1
 * @property float|null $td008_Tekitei2
 * @property float|null $td008_Dendodokei
 * @property float|null $td008_EchingRate
 * @property string|null $td008_Biko
 * @property Carbon|null $td008_RegistDate
 * @property Carbon|null $td008_UpdateDate
 * @property int|null $td008_UpdateTantoCode
 *
 * @package App\Models
 */
class Td008ICPAnalysisResult extends Model
{
	protected $table = 'td008_ICPAnalysisResult';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'td008_InputDateTime' => 'datetime',
		'td008_LineCode' => 'int',
		'td008_PassingKoteiCode' => 'int',
		'td008_YakuhinCode1' => 'int',
		'td008_YakuhinCode2' => 'int',
		'td008_YakuhinCode3' => 'int',
		'td008_YakuhinNodo1' => 'float',
		'td008_YakuhinNodo2' => 'float',
		'td008_YakuhinNodo3' => 'float',
		'td008_Tekitei1' => 'float',
		'td008_Tekitei2' => 'float',
		'td008_Dendodokei' => 'float',
		'td008_EchingRate' => 'float',
		'td008_RegistDate' => 'datetime',
		'td008_UpdateDate' => 'datetime',
		'td008_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'td008_InputDateTime',
		'td008_LineCode',
		'td008_PassingKoteiCode',
		'td008_YakuhinCode1',
		'td008_YakuhinCode2',
		'td008_YakuhinCode3',
		'td008_YakuhinNodo1',
		'td008_YakuhinNodo2',
		'td008_YakuhinNodo3',
		'td008_Tekitei1',
		'td008_Tekitei2',
		'td008_Dendodokei',
		'td008_EchingRate',
		'td008_Biko',
		'td008_RegistDate',
		'td008_UpdateDate',
		'td008_UpdateTantoCode'
	];
}
