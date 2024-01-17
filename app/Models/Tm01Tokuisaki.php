<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm01Tokuisaki
 * 
 * @property int $tm01_TokuisakiCode
 * @property int|null $tm01_SeikyusakiCode
 * @property string|null $tm01_TokuisakiName
 * @property string|null $tm01_RyakuName
 * @property string|null $tm01_SearchKana
 * @property string|null $tm01_PostNo
 * @property string|null $tm01_Address1
 * @property string|null $tm01_Address2
 * @property string|null $tm01_Tel
 * @property string|null $tm01_Fax
 * @property int|null $tm01_Bunrui1
 * @property int|null $tm01_Bunrui2
 * @property int|null $tm01_NohinshoKeishikiKyu
 * @property int|null $tm01_NohinshoGyo
 * @property int|null $tm01_ShimeDate
 * @property int|null $tm01_ShohizeiKbn
 * @property int|null $tm01_HasuKbn
 * @property int|null $tm01_KaishuShubetsu
 * @property int|null $tm01_KaishuKikan
 * @property int|null $tm01_KaishuDate
 * @property int|null $tm01_Site
 * @property float|null $tm01_YoshinGendogaku
 * @property int|null $tm01_TantoCode
 * @property int|null $tm01_BushoCode
 * @property int|null $tm01_BukaCode
 * @property int|null $tm01_Kbn1
 * @property int|null $tm01_KyuTantoCode
 * @property Carbon|null $tm01_TantoModDate
 * @property int|null $tm01_Label
 * @property bool|null $tm01_AlNebikiFlg
 * @property int|null $tm01_AlNebikiRitsu
 * @property float|null $tm01_AlJokenKingaku
 * @property int|null $tm01_AlTankaBunrui
 * @property bool|null $tm01_NiNebikiFlg
 * @property int|null $tm01_NiNebikiRitsu
 * @property float|null $tm01_NiJokenKingaku
 * @property int|null $tm01_NiTankaBunrui
 * @property bool|null $tm01_ShokuchiKbn
 * @property int|null $tm01_NohinshoOutputKbn
 * @property int|null $tm01_TaframCalcKbn
 * @property int|null $tm01_TankaKbn
 * @property string|null $tm01_ABC
 * @property int|null $tm01_HirataG
 * @property int|null $tm01_Yobi2
 * @property int|null $tm01_Yobi3
 * @property int|null $tm01_HanbaiRute
 * @property int|null $tm01_Chiho
 * @property int|null $tm01_TodoFuken
 * @property int|null $tm01_Gyoshu
 * @property string|null $tm01_ShiharaiJoken
 * @property string|null $tm01_HaisohiJoken
 * @property float|null $tm01_StartZandaka
 * @property float|null $tm01_FurikomiTesuryo
 * @property bool|null $tm01_ZubanTankaUpdateInfoFlg
 * @property Carbon|null $tm01_ZubanTankaUpdateFrom
 * @property Carbon|null $tm01_ZubanTankaUpdateTo
 * @property string|null $tm01_ShijiAttention
 * @property string|null $tm01_ShijiBiko
 * @property Carbon|null $tm01_TorihikiKaishiDate
 * @property int|null $tm01_ShiharaiMonth
 * @property int|null $tm01_ShiharaiDay
 * @property Carbon|null $tm01_RegistDate
 * @property Carbon|null $tm01_UpdateDate
 * @property int|null $tm01_UpdateTantoCode
 * @property bool|null $tm01_TanpinKanri
 *
 * @package App\Models
 */
class Tm01Tokuisaki extends Model
{
	protected $table = 'tm01_Tokuisaki';
	protected $primaryKey = 'tm01_TokuisakiCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm01_TokuisakiCode' => 'int',
		'tm01_SeikyusakiCode' => 'int',
		'tm01_Bunrui1' => 'int',
		'tm01_Bunrui2' => 'int',
		'tm01_NohinshoKeishikiKyu' => 'int',
		'tm01_NohinshoGyo' => 'int',
		'tm01_ShimeDate' => 'int',
		'tm01_ShohizeiKbn' => 'int',
		'tm01_HasuKbn' => 'int',
		'tm01_KaishuShubetsu' => 'int',
		'tm01_KaishuKikan' => 'int',
		'tm01_KaishuDate' => 'int',
		'tm01_Site' => 'int',
		'tm01_YoshinGendogaku' => 'float',
		'tm01_TantoCode' => 'int',
		'tm01_BushoCode' => 'int',
		'tm01_BukaCode' => 'int',
		'tm01_Kbn1' => 'int',
		'tm01_KyuTantoCode' => 'int',
		'tm01_TantoModDate' => 'datetime',
		'tm01_Label' => 'int',
		'tm01_AlNebikiFlg' => 'bool',
		'tm01_AlNebikiRitsu' => 'int',
		'tm01_AlJokenKingaku' => 'float',
		'tm01_AlTankaBunrui' => 'int',
		'tm01_NiNebikiFlg' => 'bool',
		'tm01_NiNebikiRitsu' => 'int',
		'tm01_NiJokenKingaku' => 'float',
		'tm01_NiTankaBunrui' => 'int',
		'tm01_ShokuchiKbn' => 'bool',
		'tm01_NohinshoOutputKbn' => 'int',
		'tm01_TaframCalcKbn' => 'int',
		'tm01_TankaKbn' => 'int',
		'tm01_HirataG' => 'int',
		'tm01_Yobi2' => 'int',
		'tm01_Yobi3' => 'int',
		'tm01_HanbaiRute' => 'int',
		'tm01_Chiho' => 'int',
		'tm01_TodoFuken' => 'int',
		'tm01_Gyoshu' => 'int',
		'tm01_StartZandaka' => 'float',
		'tm01_FurikomiTesuryo' => 'float',
		'tm01_ZubanTankaUpdateInfoFlg' => 'bool',
		'tm01_ZubanTankaUpdateFrom' => 'datetime',
		'tm01_ZubanTankaUpdateTo' => 'datetime',
		'tm01_TorihikiKaishiDate' => 'datetime',
		'tm01_ShiharaiMonth' => 'int',
		'tm01_ShiharaiDay' => 'int',
		'tm01_RegistDate' => 'datetime',
		'tm01_UpdateDate' => 'datetime',
		'tm01_UpdateTantoCode' => 'int',
		'tm01_TanpinKanri' => 'bool'
	];

	protected $fillable = [
		'tm01_SeikyusakiCode',
		'tm01_TokuisakiName',
		'tm01_RyakuName',
		'tm01_SearchKana',
		'tm01_PostNo',
		'tm01_Address1',
		'tm01_Address2',
		'tm01_Tel',
		'tm01_Fax',
		'tm01_Bunrui1',
		'tm01_Bunrui2',
		'tm01_NohinshoKeishikiKyu',
		'tm01_NohinshoGyo',
		'tm01_ShimeDate',
		'tm01_ShohizeiKbn',
		'tm01_HasuKbn',
		'tm01_KaishuShubetsu',
		'tm01_KaishuKikan',
		'tm01_KaishuDate',
		'tm01_Site',
		'tm01_YoshinGendogaku',
		'tm01_TantoCode',
		'tm01_BushoCode',
		'tm01_BukaCode',
		'tm01_Kbn1',
		'tm01_KyuTantoCode',
		'tm01_TantoModDate',
		'tm01_Label',
		'tm01_AlNebikiFlg',
		'tm01_AlNebikiRitsu',
		'tm01_AlJokenKingaku',
		'tm01_AlTankaBunrui',
		'tm01_NiNebikiFlg',
		'tm01_NiNebikiRitsu',
		'tm01_NiJokenKingaku',
		'tm01_NiTankaBunrui',
		'tm01_ShokuchiKbn',
		'tm01_NohinshoOutputKbn',
		'tm01_TaframCalcKbn',
		'tm01_TankaKbn',
		'tm01_ABC',
		'tm01_HirataG',
		'tm01_Yobi2',
		'tm01_Yobi3',
		'tm01_HanbaiRute',
		'tm01_Chiho',
		'tm01_TodoFuken',
		'tm01_Gyoshu',
		'tm01_ShiharaiJoken',
		'tm01_HaisohiJoken',
		'tm01_StartZandaka',
		'tm01_FurikomiTesuryo',
		'tm01_ZubanTankaUpdateInfoFlg',
		'tm01_ZubanTankaUpdateFrom',
		'tm01_ZubanTankaUpdateTo',
		'tm01_ShijiAttention',
		'tm01_ShijiBiko',
		'tm01_TorihikiKaishiDate',
		'tm01_ShiharaiMonth',
		'tm01_ShiharaiDay',
		'tm01_RegistDate',
		'tm01_UpdateDate',
		'tm01_UpdateTantoCode',
		'tm01_TanpinKanri'
	];
}
