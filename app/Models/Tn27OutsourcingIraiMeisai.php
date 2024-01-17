<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn27OutsourcingIraiMeisai
 * 
 * @property int $id
 * @property string $tn27_HacchuNo
 * @property int $tn27_HacchuMeisaiNo
 * @property int|null $tn27_JuchuNo
 * @property int|null $tn27_JuchuMeisaiNo
 * @property string|null $tn27_Zuban
 * @property int|null $tn27_MekkishuCode
 * @property string|null $tn27_HinName
 * @property int|null $tn27_Suryo
 * @property float|null $tn27_JuchuTanka
 * @property float|null $tn27_HacchuTanka
 * @property float|null $tn27_Kingaku
 * @property Carbon|null $tn27_NohinDate
 * @property int|null $tn27_NohinTime
 * @property string|null $tn27_OrderNo
 * @property string|null $tn27_Biko
 * @property bool|null $tn27_NohinZumiFlg
 * @property Carbon|null $tn27_NohinZumiDate
 * @property bool|null $tn27_KenpinFlg
 * @property Carbon|null $tn27_RegistDate
 * @property Carbon|null $tn27_UpdateDate
 * @property int|null $tn27_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn27OutsourcingIraiMeisai extends Model
{
	protected $table = 'tn27_OutsourcingIraiMeisai';
	public $timestamps = false;

	protected $casts = [
		'tn27_HacchuMeisaiNo' => 'int',
		'tn27_JuchuNo' => 'int',
		'tn27_JuchuMeisaiNo' => 'int',
		'tn27_MekkishuCode' => 'int',
		'tn27_Suryo' => 'int',
		'tn27_JuchuTanka' => 'float',
		'tn27_HacchuTanka' => 'float',
		'tn27_Kingaku' => 'float',
		'tn27_NohinDate' => 'datetime',
		'tn27_NohinTime' => 'int',
		'tn27_NohinZumiFlg' => 'bool',
		'tn27_NohinZumiDate' => 'datetime',
		'tn27_KenpinFlg' => 'bool',
		'tn27_RegistDate' => 'datetime',
		'tn27_UpdateDate' => 'datetime',
		'tn27_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn27_HacchuNo',
		'tn27_HacchuMeisaiNo',
		'tn27_JuchuNo',
		'tn27_JuchuMeisaiNo',
		'tn27_Zuban',
		'tn27_MekkishuCode',
		'tn27_HinName',
		'tn27_Suryo',
		'tn27_JuchuTanka',
		'tn27_HacchuTanka',
		'tn27_Kingaku',
		'tn27_NohinDate',
		'tn27_NohinTime',
		'tn27_OrderNo',
		'tn27_Biko',
		'tn27_NohinZumiFlg',
		'tn27_NohinZumiDate',
		'tn27_KenpinFlg',
		'tn27_RegistDate',
		'tn27_UpdateDate',
		'tn27_UpdateTantoCode'
	];
}
