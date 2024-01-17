<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm006Jigu
 * 
 * @property int $tm006_LineCode
 * @property string $tm006_JiguNo
 * @property string $tm006_JiguKbn
 * @property Carbon|null $tm006_RegistDate
 * @property Carbon|null $tm006_UpdateDate
 * @property int|null $tm006_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm006Jigu extends Model
{
	protected $table = 'tm006_Jigu';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm006_LineCode' => 'int',
		'tm006_RegistDate' => 'datetime',
		'tm006_UpdateDate' => 'datetime',
		'tm006_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm006_LineCode',
		'tm006_JiguNo',
		'tm006_JiguKbn',
		'tm006_RegistDate',
		'tm006_UpdateDate',
		'tm006_UpdateTantoCode'
	];
}
