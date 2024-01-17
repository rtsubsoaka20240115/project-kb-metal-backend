<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm18TankaBunrui
 * 
 * @property int $tm18_TankaBunruiCode
 * @property string|null $tm18_TankaBunruiName
 * @property int|null $tm18_TankaKbn
 * @property Carbon|null $tm18_RegistDate
 * @property Carbon|null $tm18_UpdateDate
 * @property int|null $tm18_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm18TankaBunrui extends Model
{
	protected $table = 'tm18_TankaBunrui';
	protected $primaryKey = 'tm18_TankaBunruiCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm18_TankaBunruiCode' => 'int',
		'tm18_TankaKbn' => 'int',
		'tm18_RegistDate' => 'datetime',
		'tm18_UpdateDate' => 'datetime',
		'tm18_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm18_TankaBunruiName',
		'tm18_TankaKbn',
		'tm18_RegistDate',
		'tm18_UpdateDate',
		'tm18_UpdateTantoCode'
	];
}
