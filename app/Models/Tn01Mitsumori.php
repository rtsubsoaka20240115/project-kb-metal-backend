<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn01Mitsumori
 * 
 * @property int $tn01_MitsumoriNo
 * @property Carbon|null $tn01_MitsumoriDate
 * @property int|null $tn01_InputTantoCode
 * @property int|null $tn01_EigyoTantoCode
 * @property int|null $tn01_TokuisakiCode
 * @property string|null $tn01_TokuisakiShokuchi
 * @property int|null $tn01_ShukkasakiCode
 * @property string|null $tn01_ShukkasakiShokuchi
 * @property Carbon|null $tn01_NohinDate
 * @property string|null $tn01_NohinDateBiko
 * @property string|null $tn01_NohinPlace
 * @property string|null $tn01_ShiharaiJoken
 * @property string|null $tn01_HaisohiJoken
 * @property string|null $tn01_Biko1
 * @property string|null $tn01_Biko2
 * @property string|null $tn01_Biko3
 * @property string|null $tn01_Biko4
 * @property string|null $tn01_Biko5
 * @property string|null $tn01_ShanaiBiko1
 * @property string|null $tn01_ShanaiBiko2
 * @property string|null $tn01_ShanaiBiko3
 * @property string|null $tn01_ShanaiBiko4
 * @property string|null $tn01_ShanaiBiko5
 * @property int|null $tn01_MitsumorishoPrintKbn
 * @property int|null $tn01_MitsumoriJuchuKbn
 * @property string|null $tn01_TokuisakiTantoName
 * @property int|null $tn01_LotSu
 * @property string|null $tn01_KonpoHoho
 * @property string|null $tn01_KanriHoho
 * @property bool|null $tn01_SokuteishoHakoFlg
 * @property string|null $tn01_MitsumorishoYukoKigen
 * @property string|null $tn01_MitsumoriKingakuYukoKigen
 * @property float|null $tn01_Shokei
 * @property float|null $tn01_Gokei
 * @property float|null $tn01_ShohiZei
 * @property Carbon|null $tn01_RegistDate
 * @property Carbon|null $tn01_UpdateDate
 * @property int|null $tn01_UpdateTantoCode
 * @property int|null $tn01_RegistTantoCode
 * @property bool $tn01_KokuUchuFlg
 *
 * @package App\Models
 */
class Tn01Mitsumori extends Model
{
	protected $table = 'tn01_Mitsumori';
	protected $primaryKey = 'tn01_MitsumoriNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn01_MitsumoriNo' => 'int',
		'tn01_MitsumoriDate' => 'datetime',
		'tn01_InputTantoCode' => 'int',
		'tn01_EigyoTantoCode' => 'int',
		'tn01_TokuisakiCode' => 'int',
		'tn01_ShukkasakiCode' => 'int',
		'tn01_NohinDate' => 'datetime',
		'tn01_MitsumorishoPrintKbn' => 'int',
		'tn01_MitsumoriJuchuKbn' => 'int',
		'tn01_LotSu' => 'int',
		'tn01_SokuteishoHakoFlg' => 'bool',
		'tn01_Shokei' => 'float',
		'tn01_Gokei' => 'float',
		'tn01_ShohiZei' => 'float',
		'tn01_RegistDate' => 'datetime',
		'tn01_UpdateDate' => 'datetime',
		'tn01_UpdateTantoCode' => 'int',
		'tn01_RegistTantoCode' => 'int',
		'tn01_KokuUchuFlg' => 'bool'
	];

	protected $fillable = [
		'tn01_MitsumoriDate',
		'tn01_InputTantoCode',
		'tn01_EigyoTantoCode',
		'tn01_TokuisakiCode',
		'tn01_TokuisakiShokuchi',
		'tn01_ShukkasakiCode',
		'tn01_ShukkasakiShokuchi',
		'tn01_NohinDate',
		'tn01_NohinDateBiko',
		'tn01_NohinPlace',
		'tn01_ShiharaiJoken',
		'tn01_HaisohiJoken',
		'tn01_Biko1',
		'tn01_Biko2',
		'tn01_Biko3',
		'tn01_Biko4',
		'tn01_Biko5',
		'tn01_ShanaiBiko1',
		'tn01_ShanaiBiko2',
		'tn01_ShanaiBiko3',
		'tn01_ShanaiBiko4',
		'tn01_ShanaiBiko5',
		'tn01_MitsumorishoPrintKbn',
		'tn01_MitsumoriJuchuKbn',
		'tn01_TokuisakiTantoName',
		'tn01_LotSu',
		'tn01_KonpoHoho',
		'tn01_KanriHoho',
		'tn01_SokuteishoHakoFlg',
		'tn01_MitsumorishoYukoKigen',
		'tn01_MitsumoriKingakuYukoKigen',
		'tn01_Shokei',
		'tn01_Gokei',
		'tn01_ShohiZei',
		'tn01_RegistDate',
		'tn01_UpdateDate',
		'tn01_UpdateTantoCode',
		'tn01_RegistTantoCode',
		'tn01_KokuUchuFlg'
	];
}
