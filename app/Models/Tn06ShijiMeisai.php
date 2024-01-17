<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn06ShijiMeisai
 * 
 * @property int $id
 * @property int $tn06_ShijiNo
 * @property int $tn06_ShijiMeisaiNo
 * @property int|null $tn06_DisplayOrder
 * @property int|null $tn06_ZubanCode
 * @property string|null $tn06_Zuban
 * @property int|null $tn06_MekkishuCode
 * @property string|null $tn06_HinName
 * @property string|null $tn06_HinNameOpt
 * @property int|null $tn06_BumonCode
 * @property int|null $tn06_SaiMekkiKbn
 * @property int|null $tn06_OptionKbn1
 * @property int|null $tn06_OptionKbn2
 * @property float|null $tn06_MakuThickFrom
 * @property float|null $tn06_MakuThickTo
 * @property int|null $tn06_MakuThickHaniKbn
 * @property int|null $tn06_ShuhoKbn
 * @property int|null $tn06_Suryo
 * @property int|null $tn06_SuryoUchiwake1
 * @property int|null $tn06_SuryoUchiwake2
 * @property int|null $tn06_SuryoUchiwake3
 * @property int|null $tn06_SuryoUchiwake4
 * @property int|null $tn06_SuryoUchiwake5
 * @property int|null $tn06_SuryoUchiwake6
 * @property int|null $tn06_SuryoUchiwake7
 * @property int|null $tn06_SuryoUchiwake8
 * @property int|null $tn06_SuryoUchiwake9
 * @property int|null $tn06_SuryoUchiwake10
 * @property int|null $tn06_SuryoUchiwake11
 * @property int|null $tn06_SuryoUchiwake12
 * @property int|null $tn06_SuryoUchiwake13
 * @property int|null $tn06_SuryoUchiwake14
 * @property int|null $tn06_SuryoUchiwake15
 * @property int|null $tn06_SuryoUchiwake16
 * @property int|null $tn06_SuryoUchiwake17
 * @property int|null $tn06_SuryoUchiwake18
 * @property int|null $tn06_SuryoUchiwake19
 * @property int|null $tn06_SuryoUchiwake20
 * @property int|null $tn06_HaisoKbn
 * @property bool|null $tn06_CosmoLineFlg
 * @property Carbon|null $tn06_NohinDate
 * @property int|null $tn06_NohinTime
 * @property string|null $tn06_Zaishitsu
 * @property int|null $tn06_ShukkasakiCode
 * @property string|null $tn06_ShukkasakiShokuchi
 * @property string|null $tn06_OrderNo
 * @property string|null $tn06_Biko
 * @property bool|null $tn06_HaraidashiEndFlg
 * @property Carbon|null $tn06_HaraidashiDate
 * @property int|null $tn06_NewSagyoCode
 * @property bool|null $tn06_SaishoriFlg
 * @property Carbon|null $tn06_SaishoriDate
 * @property string|null $tn06_SaishoriRiyu
 * @property int|null $tn06_HassobinKbn
 * @property string|null $tn06_HassobinBiko
 * @property int|null $tn06_HokanBashoCode
 * @property string|null $tn06_HokanBashoBiko
 * @property bool|null $tn06_DeleteFlg
 * @property Carbon|null $tn06_RegistDate
 * @property Carbon|null $tn06_UpdateDate
 * @property int|null $tn06_UpdateTantoCode
 * @property string|null $tn06_ICCode
 * @property bool $tn06_KensaFlg
 * @property bool|null $tn06_KokuUchuFlg
 * @property int|null $tn06_ShijiBox
 * @property int|null $tn06_SagyoStatus
 * @property int|null $tn06_Service
 *
 * @package App\Models
 */
class Tn06ShijiMeisai extends Model
{
	protected $table = 'tn06_ShijiMeisai';
	public $timestamps = false;

	protected $casts = [
		'tn06_ShijiNo' => 'int',
		'tn06_ShijiMeisaiNo' => 'int',
		'tn06_DisplayOrder' => 'int',
		'tn06_ZubanCode' => 'int',
		'tn06_MekkishuCode' => 'int',
		'tn06_BumonCode' => 'int',
		'tn06_SaiMekkiKbn' => 'int',
		'tn06_OptionKbn1' => 'int',
		'tn06_OptionKbn2' => 'int',
		'tn06_MakuThickFrom' => 'float',
		'tn06_MakuThickTo' => 'float',
		'tn06_MakuThickHaniKbn' => 'int',
		'tn06_ShuhoKbn' => 'int',
		'tn06_Suryo' => 'int',
		'tn06_SuryoUchiwake1' => 'int',
		'tn06_SuryoUchiwake2' => 'int',
		'tn06_SuryoUchiwake3' => 'int',
		'tn06_SuryoUchiwake4' => 'int',
		'tn06_SuryoUchiwake5' => 'int',
		'tn06_SuryoUchiwake6' => 'int',
		'tn06_SuryoUchiwake7' => 'int',
		'tn06_SuryoUchiwake8' => 'int',
		'tn06_SuryoUchiwake9' => 'int',
		'tn06_SuryoUchiwake10' => 'int',
		'tn06_SuryoUchiwake11' => 'int',
		'tn06_SuryoUchiwake12' => 'int',
		'tn06_SuryoUchiwake13' => 'int',
		'tn06_SuryoUchiwake14' => 'int',
		'tn06_SuryoUchiwake15' => 'int',
		'tn06_SuryoUchiwake16' => 'int',
		'tn06_SuryoUchiwake17' => 'int',
		'tn06_SuryoUchiwake18' => 'int',
		'tn06_SuryoUchiwake19' => 'int',
		'tn06_SuryoUchiwake20' => 'int',
		'tn06_HaisoKbn' => 'int',
		'tn06_CosmoLineFlg' => 'bool',
		'tn06_NohinDate' => 'datetime',
		'tn06_NohinTime' => 'int',
		'tn06_ShukkasakiCode' => 'int',
		'tn06_HaraidashiEndFlg' => 'bool',
		'tn06_HaraidashiDate' => 'datetime',
		'tn06_NewSagyoCode' => 'int',
		'tn06_SaishoriFlg' => 'bool',
		'tn06_SaishoriDate' => 'datetime',
		'tn06_HassobinKbn' => 'int',
		'tn06_HokanBashoCode' => 'int',
		'tn06_DeleteFlg' => 'bool',
		'tn06_RegistDate' => 'datetime',
		'tn06_UpdateDate' => 'datetime',
		'tn06_UpdateTantoCode' => 'int',
		'tn06_KensaFlg' => 'bool',
		'tn06_KokuUchuFlg' => 'bool',
		'tn06_ShijiBox' => 'int',
		'tn06_SagyoStatus' => 'int',
		'tn06_Service' => 'int'
	];

	protected $fillable = [
		'tn06_ShijiNo',
		'tn06_ShijiMeisaiNo',
		'tn06_DisplayOrder',
		'tn06_ZubanCode',
		'tn06_Zuban',
		'tn06_MekkishuCode',
		'tn06_HinName',
		'tn06_HinNameOpt',
		'tn06_BumonCode',
		'tn06_SaiMekkiKbn',
		'tn06_OptionKbn1',
		'tn06_OptionKbn2',
		'tn06_MakuThickFrom',
		'tn06_MakuThickTo',
		'tn06_MakuThickHaniKbn',
		'tn06_ShuhoKbn',
		'tn06_Suryo',
		'tn06_SuryoUchiwake1',
		'tn06_SuryoUchiwake2',
		'tn06_SuryoUchiwake3',
		'tn06_SuryoUchiwake4',
		'tn06_SuryoUchiwake5',
		'tn06_SuryoUchiwake6',
		'tn06_SuryoUchiwake7',
		'tn06_SuryoUchiwake8',
		'tn06_SuryoUchiwake9',
		'tn06_SuryoUchiwake10',
		'tn06_SuryoUchiwake11',
		'tn06_SuryoUchiwake12',
		'tn06_SuryoUchiwake13',
		'tn06_SuryoUchiwake14',
		'tn06_SuryoUchiwake15',
		'tn06_SuryoUchiwake16',
		'tn06_SuryoUchiwake17',
		'tn06_SuryoUchiwake18',
		'tn06_SuryoUchiwake19',
		'tn06_SuryoUchiwake20',
		'tn06_HaisoKbn',
		'tn06_CosmoLineFlg',
		'tn06_NohinDate',
		'tn06_NohinTime',
		'tn06_Zaishitsu',
		'tn06_ShukkasakiCode',
		'tn06_ShukkasakiShokuchi',
		'tn06_OrderNo',
		'tn06_Biko',
		'tn06_HaraidashiEndFlg',
		'tn06_HaraidashiDate',
		'tn06_NewSagyoCode',
		'tn06_SaishoriFlg',
		'tn06_SaishoriDate',
		'tn06_SaishoriRiyu',
		'tn06_HassobinKbn',
		'tn06_HassobinBiko',
		'tn06_HokanBashoCode',
		'tn06_HokanBashoBiko',
		'tn06_DeleteFlg',
		'tn06_RegistDate',
		'tn06_UpdateDate',
		'tn06_UpdateTantoCode',
		'tn06_ICCode',
		'tn06_KensaFlg',
		'tn06_KokuUchuFlg',
		'tn06_ShijiBox',
		'tn06_SagyoStatus',
		'tn06_Service'
	];
}
