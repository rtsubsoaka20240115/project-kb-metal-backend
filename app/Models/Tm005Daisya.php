<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm005Daisya
 * 
 * @property int $tm005_DaisyaCode
 * @property string $tm005_DaisyaName
 * @property string|null $tm005_ICCode
 * @property Carbon|null $tm005_BuyDate
 * @property Carbon|null $tm005_RegistDate
 * @property Carbon|null $tm005_UpdateDate
 * @property int|null $tm005_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm005Daisya extends Model
{
	protected $table = 'tm005_Daisya';
	protected $primaryKey = 'tm005_DaisyaCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm005_DaisyaCode' => 'int',
		'tm005_BuyDate' => 'datetime',
		'tm005_RegistDate' => 'datetime',
		'tm005_UpdateDate' => 'datetime',
		'tm005_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm005_DaisyaName',
		'tm005_ICCode',
		'tm005_BuyDate',
		'tm005_RegistDate',
		'tm005_UpdateDate',
		'tm005_UpdateTantoCode'
	];
}
