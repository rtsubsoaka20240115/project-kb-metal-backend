<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn05Shiji
 * 
 * @property int $tn05_ShijiNo
 * @property Carbon|null $tn05_UkeireDate
 * @property int|null $tn05_InputTantoCode
 * @property int|null $tn05_TokuisakiCode
 * @property string|null $tn05_TokuisakiShokuchi
 * @property int|null $tn05_ShukkasakiCode
 * @property string|null $tn05_ShukkasakiShokuchi
 * @property Carbon|null $tn05_NohinDate
 * @property int|null $tn05_NohinTime
 * @property int|null $tn05_HaisoKbn
 * @property string|null $tn05_OrderNo
 * @property string|null $tn05_Biko1
 * @property string|null $tn05_Biko2
 * @property string|null $tn05_Biko3
 * @property string|null $tn05_Biko4
 * @property string|null $tn05_Biko5
 * @property bool|null $tn05_NokiFukusuFlg
 * @property int|null $tn05_JuchuNo
 * @property Carbon|null $tn05_RegistDate
 * @property Carbon|null $tn05_UpdateDate
 * @property int|null $tn05_UpdateTantoCode
 * @property int|null $tn05_RegistTantoCode
 *
 * @package App\Models
 */
class Tn05Shiji extends Model
{
	protected $table = 'tn05_Shiji';
	protected $primaryKey = 'tn05_ShijiNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn05_ShijiNo' => 'int',
		'tn05_UkeireDate' => 'datetime',
		'tn05_InputTantoCode' => 'int',
		'tn05_TokuisakiCode' => 'int',
		'tn05_ShukkasakiCode' => 'int',
		'tn05_NohinDate' => 'datetime',
		'tn05_NohinTime' => 'int',
		'tn05_HaisoKbn' => 'int',
		'tn05_NokiFukusuFlg' => 'bool',
		'tn05_JuchuNo' => 'int',
		'tn05_RegistDate' => 'datetime',
		'tn05_UpdateDate' => 'datetime',
		'tn05_UpdateTantoCode' => 'int',
		'tn05_RegistTantoCode' => 'int'
	];

	protected $fillable = [
		'tn05_UkeireDate',
		'tn05_InputTantoCode',
		'tn05_TokuisakiCode',
		'tn05_TokuisakiShokuchi',
		'tn05_ShukkasakiCode',
		'tn05_ShukkasakiShokuchi',
		'tn05_NohinDate',
		'tn05_NohinTime',
		'tn05_HaisoKbn',
		'tn05_OrderNo',
		'tn05_Biko1',
		'tn05_Biko2',
		'tn05_Biko3',
		'tn05_Biko4',
		'tn05_Biko5',
		'tn05_NokiFukusuFlg',
		'tn05_JuchuNo',
		'tn05_RegistDate',
		'tn05_UpdateDate',
		'tn05_UpdateTantoCode',
		'tn05_RegistTantoCode'
	];
}
