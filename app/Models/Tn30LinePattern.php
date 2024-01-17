<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn30LinePattern
 * 
 * @property int $id
 * @property int|null $tn30_LineCode
 * @property int|null $tn30_MekkishuCode
 * @property float|null $tn30_Area
 * @property float|null $tn30_Weight
 * @property int|null $tn30_DisplayOrder
 * @property Carbon|null $tn30_RegistDatetime
 * @property Carbon|null $tn30_UpdateDatetime
 *
 * @package App\Models
 */
class Tn30LinePattern extends Model
{
	protected $table = 'tn30_LinePattern';
	public $timestamps = false;

	protected $casts = [
		'tn30_LineCode' => 'int',
		'tn30_MekkishuCode' => 'int',
		'tn30_Area' => 'float',
		'tn30_Weight' => 'float',
		'tn30_DisplayOrder' => 'int',
		'tn30_RegistDatetime' => 'datetime',
		'tn30_UpdateDatetime' => 'datetime'
	];

	protected $fillable = [
		'tn30_LineCode',
		'tn30_MekkishuCode',
		'tn30_Area',
		'tn30_Weight',
		'tn30_DisplayOrder',
		'tn30_RegistDatetime',
		'tn30_UpdateDatetime'
	];
}
