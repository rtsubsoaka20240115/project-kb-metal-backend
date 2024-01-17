<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm31MekkishubetsuNebiki
 * 
 * @property int $id
 * @property int $tm31_TokuisakiCode
 * @property int $tm31_MekkishuCode
 * @property int|null $tm31_NebikiRitsu
 * @property Carbon|null $tm31_RegistDate
 * @property Carbon|null $tm31_UpdateDate
 * @property int|null $tm31_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm31MekkishubetsuNebiki extends Model
{
	protected $table = 'tm31_MekkishubetsuNebiki';
	public $timestamps = false;

	protected $casts = [
		'tm31_TokuisakiCode' => 'int',
		'tm31_MekkishuCode' => 'int',
		'tm31_NebikiRitsu' => 'int',
		'tm31_RegistDate' => 'datetime',
		'tm31_UpdateDate' => 'datetime',
		'tm31_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm31_TokuisakiCode',
		'tm31_MekkishuCode',
		'tm31_NebikiRitsu',
		'tm31_RegistDate',
		'tm31_UpdateDate',
		'tm31_UpdateTantoCode'
	];
}
