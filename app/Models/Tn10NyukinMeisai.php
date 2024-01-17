<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn10NyukinMeisai
 * 
 * @property int $id
 * @property int $tn10_NyukinNo
 * @property int $tn10_NyukinMeisaiNo
 * @property int|null $tn10_DisplayOrder
 * @property int|null $tn10_NyukinKbn
 * @property float|null $tn10_Nyukingaku
 * @property Carbon|null $tn10_TegataKijitsu
 * @property int|null $tn10_Site
 * @property string|null $tn10_Biko
 * @property Carbon|null $tn10_RegistDate
 * @property Carbon|null $tn10_UpdateDate
 * @property int|null $tn10_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn10NyukinMeisai extends Model
{
	protected $table = 'tn10_NyukinMeisai';
	public $timestamps = false;

	protected $casts = [
		'tn10_NyukinNo' => 'int',
		'tn10_NyukinMeisaiNo' => 'int',
		'tn10_DisplayOrder' => 'int',
		'tn10_NyukinKbn' => 'int',
		'tn10_Nyukingaku' => 'float',
		'tn10_TegataKijitsu' => 'datetime',
		'tn10_Site' => 'int',
		'tn10_RegistDate' => 'datetime',
		'tn10_UpdateDate' => 'datetime',
		'tn10_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn10_NyukinNo',
		'tn10_NyukinMeisaiNo',
		'tn10_DisplayOrder',
		'tn10_NyukinKbn',
		'tn10_Nyukingaku',
		'tn10_TegataKijitsu',
		'tn10_Site',
		'tn10_Biko',
		'tn10_RegistDate',
		'tn10_UpdateDate',
		'tn10_UpdateTantoCode'
	];
}
