<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm013SoElement
 * 
 * @property int $id
 * @property int $tm013_PassingKoteiCode
 * @property int $tm013_LineCode
 * @property string $tm013_ElementName
 * @property string|null $tm013_Tani
 * @property float|null $tm013_LowerLimit
 * @property float|null $tm013_UpperLimit
 * @property float|null $tm013_LowerLimitPeak
 * @property float|null $tm013_UpperLimitPeak
 * @property string|null $tm013_Target
 * @property Carbon|null $tm013_RegistDate
 * @property Carbon|null $tm013_UpdateDate
 * @property int|null $tm013_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm013SoElement extends Model
{
	protected $table = 'tm013_SoElement';
	public $timestamps = false;

	protected $casts = [
		'tm013_PassingKoteiCode' => 'int',
		'tm013_LineCode' => 'int',
		'tm013_LowerLimit' => 'float',
		'tm013_UpperLimit' => 'float',
		'tm013_LowerLimitPeak' => 'float',
		'tm013_UpperLimitPeak' => 'float',
		'tm013_RegistDate' => 'datetime',
		'tm013_UpdateDate' => 'datetime',
		'tm013_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm013_PassingKoteiCode',
		'tm013_LineCode',
		'tm013_ElementName',
		'tm013_Tani',
		'tm013_LowerLimit',
		'tm013_UpperLimit',
		'tm013_LowerLimitPeak',
		'tm013_UpperLimitPeak',
		'tm013_Target',
		'tm013_RegistDate',
		'tm013_UpdateDate',
		'tm013_UpdateTantoCode'
	];
}
