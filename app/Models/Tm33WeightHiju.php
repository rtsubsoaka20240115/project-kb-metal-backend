<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm33WeightHiju
 * 
 * @property int $tm33_WeightHijuCode
 * @property string|null $tm33_WeightHijuName
 * @property float|null $tm33_WeightHijuValue
 * @property Carbon|null $tm33_RegistDate
 * @property Carbon|null $tm33_UpdateDate
 * @property int|null $tm33_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm33WeightHiju extends Model
{
	protected $table = 'tm33_WeightHiju';
	protected $primaryKey = 'tm33_WeightHijuCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm33_WeightHijuCode' => 'int',
		'tm33_WeightHijuValue' => 'float',
		'tm33_RegistDate' => 'datetime',
		'tm33_UpdateDate' => 'datetime',
		'tm33_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm33_WeightHijuName',
		'tm33_WeightHijuValue',
		'tm33_RegistDate',
		'tm33_UpdateDate',
		'tm33_UpdateTantoCode'
	];
}
