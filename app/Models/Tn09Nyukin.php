<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn09Nyukin
 * 
 * @property int $tn09_NyukinNo
 * @property int|null $tn09_TokuisakiCode
 * @property string|null $tn09_TokuisakiName
 * @property Carbon|null $tn09_InputDate
 * @property Carbon|null $tn09_NyukinDate
 * @property int|null $tn09_InputTantoCode
 * @property int|null $tn09_TantoCode
 * @property int|null $tn09_ShokuchiKbn
 * @property string|null $tn09_SeikyuKbn
 * @property int|null $tn09_SeikyuNo
 * @property Carbon|null $tn09_SeikyuDate
 * @property string|null $tn09_Biko
 * @property bool|null $tn09_ImportFlg
 * @property Carbon|null $tn09_RegistDate
 * @property Carbon|null $tn09_UpdateDate
 * @property int|null $tn09_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn09Nyukin extends Model
{
	protected $table = 'tn09_Nyukin';
	protected $primaryKey = 'tn09_NyukinNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn09_NyukinNo' => 'int',
		'tn09_TokuisakiCode' => 'int',
		'tn09_InputDate' => 'datetime',
		'tn09_NyukinDate' => 'datetime',
		'tn09_InputTantoCode' => 'int',
		'tn09_TantoCode' => 'int',
		'tn09_ShokuchiKbn' => 'int',
		'tn09_SeikyuNo' => 'int',
		'tn09_SeikyuDate' => 'datetime',
		'tn09_ImportFlg' => 'bool',
		'tn09_RegistDate' => 'datetime',
		'tn09_UpdateDate' => 'datetime',
		'tn09_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn09_TokuisakiCode',
		'tn09_TokuisakiName',
		'tn09_InputDate',
		'tn09_NyukinDate',
		'tn09_InputTantoCode',
		'tn09_TantoCode',
		'tn09_ShokuchiKbn',
		'tn09_SeikyuKbn',
		'tn09_SeikyuNo',
		'tn09_SeikyuDate',
		'tn09_Biko',
		'tn09_ImportFlg',
		'tn09_RegistDate',
		'tn09_UpdateDate',
		'tn09_UpdateTantoCode'
	];
}
