<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn02MitsumoriMeisaiKakoDetail
 * 
 * @property int $id
 * @property int $tn02_MitsumoriNo
 * @property int $tn02_MitsumoriMeisaiNo
 * @property int $tn02_MitsumoriMeisaiKakoNo
 * @property int|null $tn02_ShireId
 * @property int|null $tn02_SagyoId
 * @property float|null $tn02_Amount
 * @property Carbon|null $tn02_RegistDate
 * @property Carbon|null $tn02_UpdateDate
 * @property int|null $tn02_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn02MitsumoriMeisaiKakoDetail extends Model
{
	protected $table = 'tn02_MitsumoriMeisaiKakoDetail';
	public $timestamps = false;

	protected $casts = [
		'tn02_MitsumoriNo' => 'int',
		'tn02_MitsumoriMeisaiNo' => 'int',
		'tn02_MitsumoriMeisaiKakoNo' => 'int',
		'tn02_ShireId' => 'int',
		'tn02_SagyoId' => 'int',
		'tn02_Amount' => 'float',
		'tn02_RegistDate' => 'datetime',
		'tn02_UpdateDate' => 'datetime',
		'tn02_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn02_MitsumoriNo',
		'tn02_MitsumoriMeisaiNo',
		'tn02_MitsumoriMeisaiKakoNo',
		'tn02_ShireId',
		'tn02_SagyoId',
		'tn02_Amount',
		'tn02_RegistDate',
		'tn02_UpdateDate',
		'tn02_UpdateTantoCode'
	];
}
