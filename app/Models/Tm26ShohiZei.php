<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm26ShohiZei
 * 
 * @property int $tm26_ShohiZeiCode
 * @property int|null $tm26_Zeiritsu
 * @property int|null $tm26_KyuZeiritsu
 * @property Carbon|null $tm26_EffectiveDate
 * @property Carbon|null $tm26_RegistDate
 * @property Carbon|null $tm26_UpdateDate
 * @property int|null $tm26_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm26ShohiZei extends Model
{
	protected $table = 'tm26_ShohiZei';
	protected $primaryKey = 'tm26_ShohiZeiCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm26_ShohiZeiCode' => 'int',
		'tm26_Zeiritsu' => 'int',
		'tm26_KyuZeiritsu' => 'int',
		'tm26_EffectiveDate' => 'datetime',
		'tm26_RegistDate' => 'datetime',
		'tm26_UpdateDate' => 'datetime',
		'tm26_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm26_Zeiritsu',
		'tm26_KyuZeiritsu',
		'tm26_EffectiveDate',
		'tm26_RegistDate',
		'tm26_UpdateDate',
		'tm26_UpdateTantoCode'
	];
}
