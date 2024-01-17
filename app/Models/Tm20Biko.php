<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm20Biko
 * 
 * @property int $tm20_BikoCode
 * @property int|null $tm20_BikoKbn
 * @property string|null $tm20_Biko
 * @property Carbon|null $tm20_RegistDate
 * @property Carbon|null $tm20_UpdateDate
 * @property int|null $tm20_UpdateTantoCode
 * @property int|null $tm20_OrderNo
 *
 * @package App\Models
 */
class Tm20Biko extends Model
{
	protected $table = 'tm20_Biko';
	protected $primaryKey = 'tm20_BikoCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm20_BikoCode' => 'int',
		'tm20_BikoKbn' => 'int',
		'tm20_RegistDate' => 'datetime',
		'tm20_UpdateDate' => 'datetime',
		'tm20_UpdateTantoCode' => 'int',
		'tm20_OrderNo' => 'int'
	];

	protected $fillable = [
		'tm20_BikoKbn',
		'tm20_Biko',
		'tm20_RegistDate',
		'tm20_UpdateDate',
		'tm20_UpdateTantoCode',
		'tm20_OrderNo'
	];
}
