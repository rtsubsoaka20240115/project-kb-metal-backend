<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn02MitsumoriMeisai
 * 
 * @property int $id
 * @property int $tn02_MitsumoriNo
 * @property int $tn02_MitsumoriMeisaiNo
 * @property int|null $tn02_DisplayOrder
 * @property int|null $tn02_ZubanCode
 * @property string|null $tn02_Zuban
 * @property int|null $tn02_MekkishuCode
 * @property string|null $tn02_HinName
 * @property string|null $tn02_HinNameOpt
 * @property int|null $tn02_BumonCode
 * @property int|null $tn02_AreaWeightKbn
 * @property int|null $tn02_KeijoKbn
 * @property float|null $tn02_Height
 * @property float|null $tn02_Length
 * @property float|null $tn02_Width
 * @property float|null $tn02_Thick
 * @property float|null $tn02_Area
 * @property float|null $tn02_Weight
 * @property int|null $tn02_SaiMekkiKbn
 * @property int|null $tn02_TankaBunruiCode
 * @property int|null $tn02_OptionKbn1
 * @property int|null $tn02_OptionKbn2
 * @property float|null $tn02_MakuThickFrom
 * @property float|null $tn02_MakuThickTo
 * @property int|null $tn02_MakuThickHaniKbn
 * @property int|null $tn02_ShuhoKbn
 * @property bool|null $tn02_IsshikiFlg
 * @property int|null $tn02_Suryo
 * @property float|null $tn02_MekkiDai
 * @property float|null $tn02_Tanka
 * @property float|null $tn02_Kingaku
 * @property float|null $tn02_MaskingDai
 * @property float|null $tn02_HairLineDai
 * @property float|null $tn02_BuffDai
 * @property float|null $tn02_MakuatsuDai
 * @property float|null $tn02_GaichuDai
 * @property float|null $tn02_Tesuryo
 * @property bool|null $tn02_CosmoLineFlg
 * @property bool|null $tn02_KingakuNoseFlg
 * @property string|null $tn02_Zaishitsu
 * @property string|null $tn02_Biko
 * @property string|null $tn02_GaichuBiko
 * @property bool|null $tn02_SetenFlg
 * @property bool|null $tn02_ShiyoChangeFlg
 * @property Carbon|null $tn02_RegistDate
 * @property Carbon|null $tn02_UpdateDate
 * @property int|null $tn02_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn02MitsumoriMeisai extends Model
{
	protected $table = 'tn02_MitsumoriMeisai';
	public $timestamps = false;

	protected $casts = [
		'tn02_MitsumoriNo' => 'int',
		'tn02_MitsumoriMeisaiNo' => 'int',
		'tn02_DisplayOrder' => 'int',
		'tn02_ZubanCode' => 'int',
		'tn02_MekkishuCode' => 'int',
		'tn02_BumonCode' => 'int',
		'tn02_AreaWeightKbn' => 'int',
		'tn02_KeijoKbn' => 'int',
		'tn02_Height' => 'float',
		'tn02_Length' => 'float',
		'tn02_Width' => 'float',
		'tn02_Thick' => 'float',
		'tn02_Area' => 'float',
		'tn02_Weight' => 'float',
		'tn02_SaiMekkiKbn' => 'int',
		'tn02_TankaBunruiCode' => 'int',
		'tn02_OptionKbn1' => 'int',
		'tn02_OptionKbn2' => 'int',
		'tn02_MakuThickFrom' => 'float',
		'tn02_MakuThickTo' => 'float',
		'tn02_MakuThickHaniKbn' => 'int',
		'tn02_ShuhoKbn' => 'int',
		'tn02_IsshikiFlg' => 'bool',
		'tn02_Suryo' => 'int',
		'tn02_MekkiDai' => 'float',
		'tn02_Tanka' => 'float',
		'tn02_Kingaku' => 'float',
		'tn02_MaskingDai' => 'float',
		'tn02_HairLineDai' => 'float',
		'tn02_BuffDai' => 'float',
		'tn02_MakuatsuDai' => 'float',
		'tn02_GaichuDai' => 'float',
		'tn02_Tesuryo' => 'float',
		'tn02_CosmoLineFlg' => 'bool',
		'tn02_KingakuNoseFlg' => 'bool',
		'tn02_SetenFlg' => 'bool',
		'tn02_ShiyoChangeFlg' => 'bool',
		'tn02_RegistDate' => 'datetime',
		'tn02_UpdateDate' => 'datetime',
		'tn02_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn02_MitsumoriNo',
		'tn02_MitsumoriMeisaiNo',
		'tn02_DisplayOrder',
		'tn02_ZubanCode',
		'tn02_Zuban',
		'tn02_MekkishuCode',
		'tn02_HinName',
		'tn02_HinNameOpt',
		'tn02_BumonCode',
		'tn02_AreaWeightKbn',
		'tn02_KeijoKbn',
		'tn02_Height',
		'tn02_Length',
		'tn02_Width',
		'tn02_Thick',
		'tn02_Area',
		'tn02_Weight',
		'tn02_SaiMekkiKbn',
		'tn02_TankaBunruiCode',
		'tn02_OptionKbn1',
		'tn02_OptionKbn2',
		'tn02_MakuThickFrom',
		'tn02_MakuThickTo',
		'tn02_MakuThickHaniKbn',
		'tn02_ShuhoKbn',
		'tn02_IsshikiFlg',
		'tn02_Suryo',
		'tn02_MekkiDai',
		'tn02_Tanka',
		'tn02_Kingaku',
		'tn02_MaskingDai',
		'tn02_HairLineDai',
		'tn02_BuffDai',
		'tn02_MakuatsuDai',
		'tn02_GaichuDai',
		'tn02_Tesuryo',
		'tn02_CosmoLineFlg',
		'tn02_KingakuNoseFlg',
		'tn02_Zaishitsu',
		'tn02_Biko',
		'tn02_GaichuBiko',
		'tn02_SetenFlg',
		'tn02_ShiyoChangeFlg',
		'tn02_RegistDate',
		'tn02_UpdateDate',
		'tn02_UpdateTantoCode'
	];
}
