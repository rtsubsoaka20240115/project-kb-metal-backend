<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn26OutsourcingIrai
 * 
 * @property string $tn26_HacchuNo
 * @property Carbon|null $tn26_HacchuDate
 * @property int|null $tn26_HacchuTantoCode
 * @property int|null $tn26_OutsoucingCode
 * @property int|null $tn26_OutsoucingTantoCode
 * @property Carbon|null $tn26_TokuisakiNohinDate
 * @property Carbon|null $tn26_NohinDate
 * @property string|null $tn26_Biko
 * @property Carbon|null $tn26_RegistDate
 * @property Carbon|null $tn26_UpdateDate
 * @property int|null $tn26_UpdateTantoCode
 * @property string|null $tn26_Bin
 *
 * @package App\Models
 */
class Tn26OutsourcingIrai extends Model
{
	protected $table = 'tn26_OutsourcingIrai';
	protected $primaryKey = 'tn26_HacchuNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn26_HacchuDate' => 'datetime',
		'tn26_HacchuTantoCode' => 'int',
		'tn26_OutsoucingCode' => 'int',
		'tn26_OutsoucingTantoCode' => 'int',
		'tn26_TokuisakiNohinDate' => 'datetime',
		'tn26_NohinDate' => 'datetime',
		'tn26_RegistDate' => 'datetime',
		'tn26_UpdateDate' => 'datetime',
		'tn26_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn26_HacchuDate',
		'tn26_HacchuTantoCode',
		'tn26_OutsoucingCode',
		'tn26_OutsoucingTantoCode',
		'tn26_TokuisakiNohinDate',
		'tn26_NohinDate',
		'tn26_Biko',
		'tn26_RegistDate',
		'tn26_UpdateDate',
		'tn26_UpdateTantoCode',
		'tn26_Bin'
	];
}
