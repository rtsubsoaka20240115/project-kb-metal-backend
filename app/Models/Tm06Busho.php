<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm06Busho
 * 
 * @property int $tm06_BushoCode
 * @property string|null $tm06_BushoName
 * @property string|null $tm06_RyakuName
 * @property Carbon|null $tm06_RegistDate
 * @property Carbon|null $tm06_UpdateDate
 * @property int|null $tm06_UpdateTantoCode
 * @property bool|null $tm06_ReportTargetFlag
 *
 * @package App\Models
 */
class Tm06Busho extends Model
{
	protected $table = 'tm06_Busho';
	protected $primaryKey = 'tm06_BushoCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm06_BushoCode' => 'int',
		'tm06_RegistDate' => 'datetime',
		'tm06_UpdateDate' => 'datetime',
		'tm06_UpdateTantoCode' => 'int',
		'tm06_ReportTargetFlag' => 'bool'
	];

	protected $fillable = [
		'tm06_BushoName',
		'tm06_RyakuName',
		'tm06_RegistDate',
		'tm06_UpdateDate',
		'tm06_UpdateTantoCode',
		'tm06_ReportTargetFlag'
	];
}
