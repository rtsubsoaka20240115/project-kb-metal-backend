<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm28HokanBasho
 * 
 * @property int $tm28_HokanBashoCode
 * @property string|null $tm28_HokanBashoName
 * @property Carbon|null $tm28_RegistDate
 * @property Carbon|null $tm28_UpdateDate
 * @property int|null $tm28_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm28HokanBasho extends Model
{
	protected $table = 'tm28_HokanBasho';
	protected $primaryKey = 'tm28_HokanBashoCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm28_HokanBashoCode' => 'int',
		'tm28_RegistDate' => 'datetime',
		'tm28_UpdateDate' => 'datetime',
		'tm28_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm28_HokanBashoName',
		'tm28_RegistDate',
		'tm28_UpdateDate',
		'tm28_UpdateTantoCode'
	];
}
