<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm30AllNebiki
 * 
 * @property int $id
 * @property int $tm30_TokuisakiCode
 * @property int $tm30_KingakuRange
 * @property int|null $tm30_ZnNebikiRitsu
 * @property int|null $tm30_AlNebikiRitsu
 * @property int|null $tm30_SuNebikiRitsu
 * @property int|null $tm30_DenNebikiRitsu
 * @property int|null $tm30_EiNebikiRitsu
 * @property int|null $tm30_EMightNebikiRitsu
 * @property Carbon|null $tm30_RegistDate
 * @property Carbon|null $tm30_UpdateDate
 * @property int|null $tm30_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm30AllNebiki extends Model
{
	protected $table = 'tm30_AllNebiki';
	public $timestamps = false;

	protected $casts = [
		'tm30_TokuisakiCode' => 'int',
		'tm30_KingakuRange' => 'int',
		'tm30_ZnNebikiRitsu' => 'int',
		'tm30_AlNebikiRitsu' => 'int',
		'tm30_SuNebikiRitsu' => 'int',
		'tm30_DenNebikiRitsu' => 'int',
		'tm30_EiNebikiRitsu' => 'int',
		'tm30_EMightNebikiRitsu' => 'int',
		'tm30_RegistDate' => 'datetime',
		'tm30_UpdateDate' => 'datetime',
		'tm30_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm30_TokuisakiCode',
		'tm30_KingakuRange',
		'tm30_ZnNebikiRitsu',
		'tm30_AlNebikiRitsu',
		'tm30_SuNebikiRitsu',
		'tm30_DenNebikiRitsu',
		'tm30_EiNebikiRitsu',
		'tm30_EMightNebikiRitsu',
		'tm30_RegistDate',
		'tm30_UpdateDate',
		'tm30_UpdateTantoCode'
	];
}
