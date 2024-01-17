<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm014SoDendodo
 * 
 * @property int $id
 * @property int $tm014_PassingKoteiCode
 * @property int $tm014_LineCode
 * @property float|null $tm014_LowerLimit
 * @property float|null $tm014_UpperLimit
 * @property float|null $tm014_LowerLimitPeak
 * @property float|null $tm014_UpperLimitPeak
 * @property string|null $tm014_Target
 * @property Carbon|null $tm014_RegistDate
 * @property Carbon|null $tm014_UpdateDate
 * @property int|null $tm014_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm014SoDendodo extends Model
{
	protected $table = 'tm014_SoDendodo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'tm014_PassingKoteiCode' => 'int',
		'tm014_LineCode' => 'int',
		'tm014_LowerLimit' => 'float',
		'tm014_UpperLimit' => 'float',
		'tm014_LowerLimitPeak' => 'float',
		'tm014_UpperLimitPeak' => 'float',
		'tm014_RegistDate' => 'datetime',
		'tm014_UpdateDate' => 'datetime',
		'tm014_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm014_PassingKoteiCode',
		'tm014_LineCode',
		'tm014_LowerLimit',
		'tm014_UpperLimit',
		'tm014_LowerLimitPeak',
		'tm014_UpperLimitPeak',
		'tm014_Target',
		'tm014_RegistDate',
		'tm014_UpdateDate',
		'tm014_UpdateTantoCode'
	];
}
