<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm07Buka
 * 
 * @property int $tm07_BukaCode
 * @property string|null $tm07_BukaName
 * @property string|null $tm07_RyakuName
 * @property Carbon|null $tm07_RegistDate
 * @property Carbon|null $tm07_UpdateDate
 * @property int|null $tm07_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm07Buka extends Model
{
	protected $table = 'tm07_Buka';
	protected $primaryKey = 'tm07_BukaCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm07_BukaCode' => 'int',
		'tm07_RegistDate' => 'datetime',
		'tm07_UpdateDate' => 'datetime',
		'tm07_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm07_BukaName',
		'tm07_RyakuName',
		'tm07_RegistDate',
		'tm07_UpdateDate',
		'tm07_UpdateTantoCode'
	];
}
