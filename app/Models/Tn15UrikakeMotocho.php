<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn15UrikakeMotocho
 * 
 * @property int $tn15_UrikakeMotochoNo
 * @property Carbon|null $tn15_ShoriDate
 * @property int|null $tn15_TokuisakiCode
 * @property float|null $tn15_LastUrikakeZanDaka
 * @property float|null $tn15_UriageDaka
 * @property float|null $tn15_HenpinDaka
 * @property float|null $tn15_GenkinNadoNyukin
 * @property float|null $tn15_TegataNyukin
 * @property float|null $tn15_Sosai
 * @property float|null $tn15_ShohiZei
 * @property float|null $tn15_UrikakeZandaka
 * @property float|null $tn15_ShimeDateGoShohiZei
 * @property Carbon|null $tn15_RegistDate
 * @property Carbon|null $tn15_UpdateDate
 * @property int|null $tn15_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn15UrikakeMotocho extends Model
{
	protected $table = 'tn15_UrikakeMotocho';
	protected $primaryKey = 'tn15_UrikakeMotochoNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn15_UrikakeMotochoNo' => 'int',
		'tn15_ShoriDate' => 'datetime',
		'tn15_TokuisakiCode' => 'int',
		'tn15_LastUrikakeZanDaka' => 'float',
		'tn15_UriageDaka' => 'float',
		'tn15_HenpinDaka' => 'float',
		'tn15_GenkinNadoNyukin' => 'float',
		'tn15_TegataNyukin' => 'float',
		'tn15_Sosai' => 'float',
		'tn15_ShohiZei' => 'float',
		'tn15_UrikakeZandaka' => 'float',
		'tn15_ShimeDateGoShohiZei' => 'float',
		'tn15_RegistDate' => 'datetime',
		'tn15_UpdateDate' => 'datetime',
		'tn15_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn15_ShoriDate',
		'tn15_TokuisakiCode',
		'tn15_LastUrikakeZanDaka',
		'tn15_UriageDaka',
		'tn15_HenpinDaka',
		'tn15_GenkinNadoNyukin',
		'tn15_TegataNyukin',
		'tn15_Sosai',
		'tn15_ShohiZei',
		'tn15_UrikakeZandaka',
		'tn15_ShimeDateGoShohiZei',
		'tn15_RegistDate',
		'tn15_UpdateDate',
		'tn15_UpdateTantoCode'
	];
}
