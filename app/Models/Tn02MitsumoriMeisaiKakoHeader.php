<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn02MitsumoriMeisaiKakoHeader
 * 
 * @property int $id
 * @property int $tn02_MitsumoriNo
 * @property int $tn02_MitsumoriMeisaiNo
 * @property float|null $tn02_GaichuAmount
 * @property float|null $tn02_KanriAmount
 * @property float|null $tn02_UkeireAmount
 * @property float|null $tn02_HaisoAmount
 * @property string|null $tn02_Biko
 * @property Carbon|null $tn02_RegistDate
 * @property Carbon|null $tn02_UpdateDate
 * @property int|null $tn02_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn02MitsumoriMeisaiKakoHeader extends Model
{
	protected $table = 'tn02_MitsumoriMeisaiKakoHeader';
	public $timestamps = false;

	protected $casts = [
		'tn02_MitsumoriNo' => 'int',
		'tn02_MitsumoriMeisaiNo' => 'int',
		'tn02_GaichuAmount' => 'float',
		'tn02_KanriAmount' => 'float',
		'tn02_UkeireAmount' => 'float',
		'tn02_HaisoAmount' => 'float',
		'tn02_RegistDate' => 'datetime',
		'tn02_UpdateDate' => 'datetime',
		'tn02_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn02_MitsumoriNo',
		'tn02_MitsumoriMeisaiNo',
		'tn02_GaichuAmount',
		'tn02_KanriAmount',
		'tn02_UkeireAmount',
		'tn02_HaisoAmount',
		'tn02_Biko',
		'tn02_RegistDate',
		'tn02_UpdateDate',
		'tn02_UpdateTantoCode'
	];
}
