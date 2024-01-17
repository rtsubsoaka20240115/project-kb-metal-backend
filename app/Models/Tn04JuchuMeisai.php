<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn04JuchuMeisai
 * 
 * @property int $id
 * @property int $tn04_JuchuNo
 * @property int $tn04_JuchuMeisaiNo
 * @property int|null $tn04_DisplayOrder
 * @property int|null $tn04_ZubanCode
 * @property string|null $tn04_Zuban
 * @property int|null $tn04_MekkishuCode
 * @property string|null $tn04_HinName
 * @property string|null $tn04_HinNameOpt
 * @property int|null $tn04_BumonCode
 * @property int|null $tn04_AreaWeightKbn
 * @property int|null $tn04_KeijoKbn
 * @property float|null $tn04_Height
 * @property float|null $tn04_Length
 * @property float|null $tn04_Width
 * @property float|null $tn04_Thick
 * @property float|null $tn04_Area
 * @property float|null $tn04_Weight
 * @property int|null $tn04_SaiMekkiKbn
 * @property int|null $tn04_TankaBunruiCode
 * @property int|null $tn04_OptionKbn1
 * @property int|null $tn04_OptionKbn2
 * @property float|null $tn04_MakuThickFrom
 * @property float|null $tn04_MakuThickTo
 * @property int|null $tn04_MakuThickHaniKbn
 * @property int|null $tn04_ShuhoKbn
 * @property bool|null $tn04_IsshikiFlg
 * @property int|null $tn04_Suryo
 * @property float|null $tn04_MekkiDai
 * @property float|null $tn04_Tanka
 * @property float|null $tn04_Kingaku
 * @property Carbon|null $tn04_ShanaiNohinDate
 * @property int|null $tn04_HaisoKbn
 * @property int|null $tn04_Time
 * @property float|null $tn04_MaskingDai
 * @property float|null $tn04_HairLineDai
 * @property float|null $tn04_BuffDai
 * @property float|null $tn04_MakuatsuDai
 * @property float|null $tn04_GaichuDai
 * @property float|null $tn04_Tesuryo
 * @property bool|null $tn04_CosmoLineFlg
 * @property bool|null $tn04_KingakuNoseFlg
 * @property string|null $tn04_Zaishitsu
 * @property string|null $tn04_OrderNo
 * @property string|null $tn04_Biko
 * @property string|null $tn04_GaichuBiko
 * @property string|null $tn04_ChumonNo
 * @property int|null $tn04_HirataNonyuBushoCode
 * @property int|null $tn04_HirataYokyuBushoCode
 * @property Carbon|null $tn04_RegistDate
 * @property Carbon|null $tn04_UpdateDate
 * @property int|null $tn04_UpdateTantoCode
 * @property int|null $tn04_ShijiNo
 * @property int|null $tn04_ShijiMeisaiNo
 * @property int|null $tn04_Service
 *
 * @package App\Models
 */
class Tn04JuchuMeisai extends Model
{
	protected $table = 'tn04_JuchuMeisai';
	public $timestamps = false;

	protected $casts = [
		'tn04_JuchuNo' => 'int',
		'tn04_JuchuMeisaiNo' => 'int',
		'tn04_DisplayOrder' => 'int',
		'tn04_ZubanCode' => 'int',
		'tn04_MekkishuCode' => 'int',
		'tn04_BumonCode' => 'int',
		'tn04_AreaWeightKbn' => 'int',
		'tn04_KeijoKbn' => 'int',
		'tn04_Height' => 'float',
		'tn04_Length' => 'float',
		'tn04_Width' => 'float',
		'tn04_Thick' => 'float',
		'tn04_Area' => 'float',
		'tn04_Weight' => 'float',
		'tn04_SaiMekkiKbn' => 'int',
		'tn04_TankaBunruiCode' => 'int',
		'tn04_OptionKbn1' => 'int',
		'tn04_OptionKbn2' => 'int',
		'tn04_MakuThickFrom' => 'float',
		'tn04_MakuThickTo' => 'float',
		'tn04_MakuThickHaniKbn' => 'int',
		'tn04_ShuhoKbn' => 'int',
		'tn04_IsshikiFlg' => 'bool',
		'tn04_Suryo' => 'int',
		'tn04_MekkiDai' => 'float',
		'tn04_Tanka' => 'float',
		'tn04_Kingaku' => 'float',
		'tn04_ShanaiNohinDate' => 'datetime',
		'tn04_HaisoKbn' => 'int',
		'tn04_Time' => 'int',
		'tn04_MaskingDai' => 'float',
		'tn04_HairLineDai' => 'float',
		'tn04_BuffDai' => 'float',
		'tn04_MakuatsuDai' => 'float',
		'tn04_GaichuDai' => 'float',
		'tn04_Tesuryo' => 'float',
		'tn04_CosmoLineFlg' => 'bool',
		'tn04_KingakuNoseFlg' => 'bool',
		'tn04_HirataNonyuBushoCode' => 'int',
		'tn04_HirataYokyuBushoCode' => 'int',
		'tn04_RegistDate' => 'datetime',
		'tn04_UpdateDate' => 'datetime',
		'tn04_UpdateTantoCode' => 'int',
		'tn04_ShijiNo' => 'int',
		'tn04_ShijiMeisaiNo' => 'int',
		'tn04_Service' => 'int'
	];

	protected $fillable = [
		'tn04_JuchuNo',
		'tn04_JuchuMeisaiNo',
		'tn04_DisplayOrder',
		'tn04_ZubanCode',
		'tn04_Zuban',
		'tn04_MekkishuCode',
		'tn04_HinName',
		'tn04_HinNameOpt',
		'tn04_BumonCode',
		'tn04_AreaWeightKbn',
		'tn04_KeijoKbn',
		'tn04_Height',
		'tn04_Length',
		'tn04_Width',
		'tn04_Thick',
		'tn04_Area',
		'tn04_Weight',
		'tn04_SaiMekkiKbn',
		'tn04_TankaBunruiCode',
		'tn04_OptionKbn1',
		'tn04_OptionKbn2',
		'tn04_MakuThickFrom',
		'tn04_MakuThickTo',
		'tn04_MakuThickHaniKbn',
		'tn04_ShuhoKbn',
		'tn04_IsshikiFlg',
		'tn04_Suryo',
		'tn04_MekkiDai',
		'tn04_Tanka',
		'tn04_Kingaku',
		'tn04_ShanaiNohinDate',
		'tn04_HaisoKbn',
		'tn04_Time',
		'tn04_MaskingDai',
		'tn04_HairLineDai',
		'tn04_BuffDai',
		'tn04_MakuatsuDai',
		'tn04_GaichuDai',
		'tn04_Tesuryo',
		'tn04_CosmoLineFlg',
		'tn04_KingakuNoseFlg',
		'tn04_Zaishitsu',
		'tn04_OrderNo',
		'tn04_Biko',
		'tn04_GaichuBiko',
		'tn04_ChumonNo',
		'tn04_HirataNonyuBushoCode',
		'tn04_HirataYokyuBushoCode',
		'tn04_RegistDate',
		'tn04_UpdateDate',
		'tn04_UpdateTantoCode',
		'tn04_ShijiNo',
		'tn04_ShijiMeisaiNo',
		'tn04_Service'
	];
}
