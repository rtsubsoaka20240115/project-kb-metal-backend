<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn08UriageMeisai
 * 
 * @property int $id
 * @property int $tn08_UriageNo
 * @property int $tn08_UriageMeisaiNo
 * @property int|null $tn08_DisplayOrder
 * @property int|null $tn08_ZubanCode
 * @property string|null $tn08_Zuban
 * @property int|null $tn08_MekkishuCode
 * @property string|null $tn08_HinName
 * @property string|null $tn08_HinNameOpt
 * @property int|null $tn08_BumonCode
 * @property int|null $tn08_AreaWeightKbn
 * @property int|null $tn08_KeijoKbn
 * @property float|null $tn08_Height
 * @property float|null $tn08_Length
 * @property float|null $tn08_Width
 * @property float|null $tn08_Thick
 * @property float|null $tn08_Area
 * @property float|null $tn08_Weight
 * @property int|null $tn08_SaiMekkiKbn
 * @property int|null $tn08_TankaBunruiCode
 * @property int|null $tn08_OptionKbn1
 * @property int|null $tn08_OptionKbn2
 * @property float|null $tn08_MakuThickFrom
 * @property float|null $tn08_MakuThickTo
 * @property int|null $tn08_MakuThickHaniKbn
 * @property int|null $tn08_ShuhoKbn
 * @property bool|null $tn08_IsshikiFlg
 * @property int|null $tn08_Suryo
 * @property float|null $tn08_MekkiDai
 * @property float|null $tn08_Tanka
 * @property float|null $tn08_Kingaku
 * @property float|null $tn08_MaskingDai
 * @property float|null $tn08_HairLineDai
 * @property float|null $tn08_BuffDai
 * @property float|null $tn08_MakuatsuDai
 * @property float|null $tn08_GaichuDai
 * @property float|null $tn08_Tesuryo
 * @property bool|null $tn08_CosmoLineFlg
 * @property bool|null $tn08_KingakuNoseFlg
 * @property string|null $tn08_Zaishitsu
 * @property string|null $tn08_OrderNo
 * @property string|null $tn08_Biko
 * @property string|null $tn08_GaichuBiko
 * @property Carbon|null $tn08_RegistDate
 * @property Carbon|null $tn08_UpdateDate
 * @property int|null $tn08_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn08UriageMeisai extends Model
{
	protected $table = 'tn08_UriageMeisai';
	public $timestamps = false;

	protected $casts = [
		'tn08_UriageNo' => 'int',
		'tn08_UriageMeisaiNo' => 'int',
		'tn08_DisplayOrder' => 'int',
		'tn08_ZubanCode' => 'int',
		'tn08_MekkishuCode' => 'int',
		'tn08_BumonCode' => 'int',
		'tn08_AreaWeightKbn' => 'int',
		'tn08_KeijoKbn' => 'int',
		'tn08_Height' => 'float',
		'tn08_Length' => 'float',
		'tn08_Width' => 'float',
		'tn08_Thick' => 'float',
		'tn08_Area' => 'float',
		'tn08_Weight' => 'float',
		'tn08_SaiMekkiKbn' => 'int',
		'tn08_TankaBunruiCode' => 'int',
		'tn08_OptionKbn1' => 'int',
		'tn08_OptionKbn2' => 'int',
		'tn08_MakuThickFrom' => 'float',
		'tn08_MakuThickTo' => 'float',
		'tn08_MakuThickHaniKbn' => 'int',
		'tn08_ShuhoKbn' => 'int',
		'tn08_IsshikiFlg' => 'bool',
		'tn08_Suryo' => 'int',
		'tn08_MekkiDai' => 'float',
		'tn08_Tanka' => 'float',
		'tn08_Kingaku' => 'float',
		'tn08_MaskingDai' => 'float',
		'tn08_HairLineDai' => 'float',
		'tn08_BuffDai' => 'float',
		'tn08_MakuatsuDai' => 'float',
		'tn08_GaichuDai' => 'float',
		'tn08_Tesuryo' => 'float',
		'tn08_CosmoLineFlg' => 'bool',
		'tn08_KingakuNoseFlg' => 'bool',
		'tn08_RegistDate' => 'datetime',
		'tn08_UpdateDate' => 'datetime',
		'tn08_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn08_UriageNo',
		'tn08_UriageMeisaiNo',
		'tn08_DisplayOrder',
		'tn08_ZubanCode',
		'tn08_Zuban',
		'tn08_MekkishuCode',
		'tn08_HinName',
		'tn08_HinNameOpt',
		'tn08_BumonCode',
		'tn08_AreaWeightKbn',
		'tn08_KeijoKbn',
		'tn08_Height',
		'tn08_Length',
		'tn08_Width',
		'tn08_Thick',
		'tn08_Area',
		'tn08_Weight',
		'tn08_SaiMekkiKbn',
		'tn08_TankaBunruiCode',
		'tn08_OptionKbn1',
		'tn08_OptionKbn2',
		'tn08_MakuThickFrom',
		'tn08_MakuThickTo',
		'tn08_MakuThickHaniKbn',
		'tn08_ShuhoKbn',
		'tn08_IsshikiFlg',
		'tn08_Suryo',
		'tn08_MekkiDai',
		'tn08_Tanka',
		'tn08_Kingaku',
		'tn08_MaskingDai',
		'tn08_HairLineDai',
		'tn08_BuffDai',
		'tn08_MakuatsuDai',
		'tn08_GaichuDai',
		'tn08_Tesuryo',
		'tn08_CosmoLineFlg',
		'tn08_KingakuNoseFlg',
		'tn08_Zaishitsu',
		'tn08_OrderNo',
		'tn08_Biko',
		'tn08_GaichuBiko',
		'tn08_RegistDate',
		'tn08_UpdateDate',
		'tn08_UpdateTantoCode'
	];
}
