<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm03Mekkishu
 * 
 * @property int $tm03_MekkishuCode
 * @property string|null $tm03_MekkishuName
 * @property string|null $tm03_RyakuName
 * @property int|null $tm03_BumonCode
 * @property int|null $tm03_HinNameBunruiCode
 * @property bool|null $tm03_ShuhoAri
 * @property bool|null $tm03_TelKbn
 * @property int|null $tm03_WeightHijuCode
 * @property int|null $tm03_BumonCode1
 * @property int|null $tm03_BumonCode2
 * @property int|null $tm03_BumonCode3
 * @property int|null $tm03_BumonCode4
 * @property bool|null $tm03_GaichuDaiShukeiKbn
 * @property Carbon|null $tm03_RegistDate
 * @property Carbon|null $tm03_UpdateDate
 * @property int|null $tm03_UpdateTantoCode
 * @property bool|null $tm03_OutsourcingFlg
 * @property int|null $tm03_KihonNoki
 * @property bool|null $tm03_SeisanTeishiFlg
 * @property int|null $tm03_KijunNoki
 * @property string|null $tm03_MekkishuNameKangen
 * @property string|null $tm03_RyakuNameKangen
 *
 * @package App\Models
 */
class Tm03Mekkishu extends Model
{
	protected $table = 'tm03_Mekkishu';
	protected $primaryKey = 'tm03_MekkishuCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm03_MekkishuCode' => 'int',
		'tm03_BumonCode' => 'int',
		'tm03_HinNameBunruiCode' => 'int',
		'tm03_ShuhoAri' => 'bool',
		'tm03_TelKbn' => 'bool',
		'tm03_WeightHijuCode' => 'int',
		'tm03_BumonCode1' => 'int',
		'tm03_BumonCode2' => 'int',
		'tm03_BumonCode3' => 'int',
		'tm03_BumonCode4' => 'int',
		'tm03_GaichuDaiShukeiKbn' => 'bool',
		'tm03_RegistDate' => 'datetime',
		'tm03_UpdateDate' => 'datetime',
		'tm03_UpdateTantoCode' => 'int',
		'tm03_OutsourcingFlg' => 'bool',
		'tm03_KihonNoki' => 'int',
		'tm03_SeisanTeishiFlg' => 'bool',
		'tm03_KijunNoki' => 'int'
	];

	protected $fillable = [
		'tm03_MekkishuName',
		'tm03_RyakuName',
		'tm03_BumonCode',
		'tm03_HinNameBunruiCode',
		'tm03_ShuhoAri',
		'tm03_TelKbn',
		'tm03_WeightHijuCode',
		'tm03_BumonCode1',
		'tm03_BumonCode2',
		'tm03_BumonCode3',
		'tm03_BumonCode4',
		'tm03_GaichuDaiShukeiKbn',
		'tm03_RegistDate',
		'tm03_UpdateDate',
		'tm03_UpdateTantoCode',
		'tm03_OutsourcingFlg',
		'tm03_KihonNoki',
		'tm03_SeisanTeishiFlg',
		'tm03_KijunNoki',
		'tm03_MekkishuNameKangen',
		'tm03_RyakuNameKangen'
	];
}
