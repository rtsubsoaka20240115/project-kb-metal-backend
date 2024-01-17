<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn16UrikakeMotochoWork
 * 
 * @property int $tn16_UrikakeMotochoNo
 * @property Carbon|null $tn16_ShoriDate
 * @property int|null $tn16_TokuisakiCode
 * @property float|null $tn16_LastUrikakeZanDaka
 * @property float|null $tn16_UriageDaka
 * @property float|null $tn16_HenpinDaka
 * @property float|null $tn16_GenkinNadoNyukin
 * @property float|null $tn16_TegataNyukin
 * @property float|null $tn16_Sosai
 * @property float|null $tn16_ShohiZei
 * @property float|null $tn16_UrikakeZandaka
 * @property float|null $tn16_ShimeDateGoShohiZei
 * @property Carbon|null $tn16_RegistDate
 * @property Carbon|null $tn16_UpdateDate
 * @property int|null $tn16_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn16UrikakeMotochoWork extends Model
{
	protected $table = 'tn16_UrikakeMotochoWork';
	protected $primaryKey = 'tn16_UrikakeMotochoNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn16_UrikakeMotochoNo' => 'int',
		'tn16_ShoriDate' => 'datetime',
		'tn16_TokuisakiCode' => 'int',
		'tn16_LastUrikakeZanDaka' => 'float',
		'tn16_UriageDaka' => 'float',
		'tn16_HenpinDaka' => 'float',
		'tn16_GenkinNadoNyukin' => 'float',
		'tn16_TegataNyukin' => 'float',
		'tn16_Sosai' => 'float',
		'tn16_ShohiZei' => 'float',
		'tn16_UrikakeZandaka' => 'float',
		'tn16_ShimeDateGoShohiZei' => 'float',
		'tn16_RegistDate' => 'datetime',
		'tn16_UpdateDate' => 'datetime',
		'tn16_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn16_ShoriDate',
		'tn16_TokuisakiCode',
		'tn16_LastUrikakeZanDaka',
		'tn16_UriageDaka',
		'tn16_HenpinDaka',
		'tn16_GenkinNadoNyukin',
		'tn16_TegataNyukin',
		'tn16_Sosai',
		'tn16_ShohiZei',
		'tn16_UrikakeZandaka',
		'tn16_ShimeDateGoShohiZei',
		'tn16_RegistDate',
		'tn16_UpdateDate',
		'tn16_UpdateTantoCode'
	];
}
