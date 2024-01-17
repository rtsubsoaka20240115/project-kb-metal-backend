<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm09ZubanMeisai2
 * 
 * @property int $id
 * @property int $tm09_ZubanCode
 * @property int $tm09_ZubanMeisaiCode
 * @property int|null $tm09_DisplayOrder
 * @property int|null $tm09_MekkishuCode
 * @property int|null $tm09_AreaWeightKbn
 * @property int|null $tm09_KeijoKbn
 * @property float|null $tm09_Height
 * @property float|null $tm09_Length
 * @property float|null $tm09_Width
 * @property float|null $tm09_Thick
 * @property float|null $tm09_Area
 * @property float|null $tm09_Weight
 * @property int|null $tm09_SaiMekkiKbn
 * @property int|null $tm09_TankaBunruiCode
 * @property int|null $tm09_OptionKbn1
 * @property int|null $tm09_OptionKbn2
 * @property float|null $tm09_MakuThickFrom
 * @property float|null $tm09_MakuThickTo
 * @property int|null $tm09_MakuThickHaniKbn
 * @property int|null $tm09_ShuhoKbn
 * @property float|null $tm09_CalcTanka
 * @property float|null $tm09_ZubanTanka
 * @property float|null $tm09_BefZubanTanka
 * @property Carbon|null $tm09_ZubanTankaUpdateDate
 * @property float|null $tm09_MaskingDai
 * @property float|null $tm09_HairLineDai
 * @property float|null $tm09_BuffDai
 * @property float|null $tm09_MakuatsuDai
 * @property float|null $tm09_GaichuDai
 * @property float|null $tm09_Tesuryo
 * @property bool|null $tm09_KingakuNoseFlg
 * @property string|null $tm09_Zaishitsu
 * @property bool|null $tm09_OldDataFlg
 * @property Carbon|null $tm09_FirstJuchuDate
 * @property Carbon|null $tm09_NewJuchuDate
 * @property string|null $tm09_Biko
 * @property string|null $tm09_GaichuBiko
 * @property Carbon|null $tm09_RegistDate
 * @property Carbon|null $tm09_UpdateDate
 * @property int|null $tm09_UpdateTantoCode
 * @property float|null $tm09_OldTanka
 *
 * @package App\Models
 */
class Tm09ZubanMeisai2 extends Model
{
	protected $table = 'tm09_ZubanMeisai2';
	public $timestamps = false;

	protected $casts = [
		'tm09_ZubanCode' => 'int',
		'tm09_ZubanMeisaiCode' => 'int',
		'tm09_DisplayOrder' => 'int',
		'tm09_MekkishuCode' => 'int',
		'tm09_AreaWeightKbn' => 'int',
		'tm09_KeijoKbn' => 'int',
		'tm09_Height' => 'float',
		'tm09_Length' => 'float',
		'tm09_Width' => 'float',
		'tm09_Thick' => 'float',
		'tm09_Area' => 'float',
		'tm09_Weight' => 'float',
		'tm09_SaiMekkiKbn' => 'int',
		'tm09_TankaBunruiCode' => 'int',
		'tm09_OptionKbn1' => 'int',
		'tm09_OptionKbn2' => 'int',
		'tm09_MakuThickFrom' => 'float',
		'tm09_MakuThickTo' => 'float',
		'tm09_MakuThickHaniKbn' => 'int',
		'tm09_ShuhoKbn' => 'int',
		'tm09_CalcTanka' => 'float',
		'tm09_ZubanTanka' => 'float',
		'tm09_BefZubanTanka' => 'float',
		'tm09_ZubanTankaUpdateDate' => 'datetime',
		'tm09_MaskingDai' => 'float',
		'tm09_HairLineDai' => 'float',
		'tm09_BuffDai' => 'float',
		'tm09_MakuatsuDai' => 'float',
		'tm09_GaichuDai' => 'float',
		'tm09_Tesuryo' => 'float',
		'tm09_KingakuNoseFlg' => 'bool',
		'tm09_OldDataFlg' => 'bool',
		'tm09_FirstJuchuDate' => 'datetime',
		'tm09_NewJuchuDate' => 'datetime',
		'tm09_RegistDate' => 'datetime',
		'tm09_UpdateDate' => 'datetime',
		'tm09_UpdateTantoCode' => 'int',
		'tm09_OldTanka' => 'float'
	];

	protected $fillable = [
		'tm09_ZubanCode',
		'tm09_ZubanMeisaiCode',
		'tm09_DisplayOrder',
		'tm09_MekkishuCode',
		'tm09_AreaWeightKbn',
		'tm09_KeijoKbn',
		'tm09_Height',
		'tm09_Length',
		'tm09_Width',
		'tm09_Thick',
		'tm09_Area',
		'tm09_Weight',
		'tm09_SaiMekkiKbn',
		'tm09_TankaBunruiCode',
		'tm09_OptionKbn1',
		'tm09_OptionKbn2',
		'tm09_MakuThickFrom',
		'tm09_MakuThickTo',
		'tm09_MakuThickHaniKbn',
		'tm09_ShuhoKbn',
		'tm09_CalcTanka',
		'tm09_ZubanTanka',
		'tm09_BefZubanTanka',
		'tm09_ZubanTankaUpdateDate',
		'tm09_MaskingDai',
		'tm09_HairLineDai',
		'tm09_BuffDai',
		'tm09_MakuatsuDai',
		'tm09_GaichuDai',
		'tm09_Tesuryo',
		'tm09_KingakuNoseFlg',
		'tm09_Zaishitsu',
		'tm09_OldDataFlg',
		'tm09_FirstJuchuDate',
		'tm09_NewJuchuDate',
		'tm09_Biko',
		'tm09_GaichuBiko',
		'tm09_RegistDate',
		'tm09_UpdateDate',
		'tm09_UpdateTantoCode',
		'tm09_OldTanka'
	];
}
