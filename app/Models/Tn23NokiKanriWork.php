<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn23NokiKanriWork
 * 
 * @property int $id
 * @property int $tn23_ShijiNo
 * @property int $tn23_ShijiMeisaiNo
 * @property int|null $tn23_TokuisakiCode
 * @property string|null $tn23_TokuisakiName
 * @property string|null $tn23_TokuisakiShokuchi
 * @property string|null $tn23_Zuban
 * @property string|null $tn23_HinName
 * @property int|null $tn23_MekkishuCode
 * @property string|null $tn23_MekkishuName
 * @property string|null $tn23_SaiMekkiKbn
 * @property string|null $tn23_Zaishitsu
 * @property string|null $tn23_OptionKbn1
 * @property string|null $tn23_OptionKbn2
 * @property int|null $tn23_Suryo
 * @property Carbon|null $tn23_NohinDate
 * @property int|null $tn23_NohinTime
 * @property string|null $tn23_TehaiTantoName
 * @property int|null $tn23_BumonCode
 * @property string|null $tn23_BumonName
 * @property string|null $tn23_HinNameBunruiName
 * @property string|null $tn23_ShuhoKbn
 * @property string|null $tn23_ShukkasakiName
 * @property string|null $tn23_ShukkasakiShokuchi
 * @property string|null $tn23_OrderNo
 * @property string|null $tn23_HaisoKbn
 * @property float|null $tn23_Area
 * @property float|null $tn23_Tanka
 * @property int|null $tn23_LineCode
 * @property string|null $tn23_LineName
 * @property string|null $tn23_RaTantoName
 * @property Carbon|null $tn23_RaDateTime
 * @property string|null $tn23_AnTantoName
 * @property Carbon|null $tn23_AnDateTime
 * @property string|null $tn23_KenTantoName
 * @property Carbon|null $tn23_KenDateTime
 * @property string|null $tn23_KonTantoName
 * @property Carbon|null $tn23_KonDateTime
 * @property string|null $tn23_ShuTantoName
 * @property Carbon|null $tn23_ShuDateTime
 * @property string|null $tn23_KanTantoName
 * @property Carbon|null $tn23_KanDateTime
 * @property Carbon|null $tn23_TehaiDateTime
 *
 * @package App\Models
 */
class Tn23NokiKanriWork extends Model
{
	protected $table = 'tn23_NokiKanriWork';
	public $timestamps = false;

	protected $casts = [
		'tn23_ShijiNo' => 'int',
		'tn23_ShijiMeisaiNo' => 'int',
		'tn23_TokuisakiCode' => 'int',
		'tn23_MekkishuCode' => 'int',
		'tn23_Suryo' => 'int',
		'tn23_NohinDate' => 'datetime',
		'tn23_NohinTime' => 'int',
		'tn23_BumonCode' => 'int',
		'tn23_Area' => 'float',
		'tn23_Tanka' => 'float',
		'tn23_LineCode' => 'int',
		'tn23_RaDateTime' => 'datetime',
		'tn23_AnDateTime' => 'datetime',
		'tn23_KenDateTime' => 'datetime',
		'tn23_KonDateTime' => 'datetime',
		'tn23_ShuDateTime' => 'datetime',
		'tn23_KanDateTime' => 'datetime',
		'tn23_TehaiDateTime' => 'datetime'
	];

	protected $fillable = [
		'tn23_ShijiNo',
		'tn23_ShijiMeisaiNo',
		'tn23_TokuisakiCode',
		'tn23_TokuisakiName',
		'tn23_TokuisakiShokuchi',
		'tn23_Zuban',
		'tn23_HinName',
		'tn23_MekkishuCode',
		'tn23_MekkishuName',
		'tn23_SaiMekkiKbn',
		'tn23_Zaishitsu',
		'tn23_OptionKbn1',
		'tn23_OptionKbn2',
		'tn23_Suryo',
		'tn23_NohinDate',
		'tn23_NohinTime',
		'tn23_TehaiTantoName',
		'tn23_BumonCode',
		'tn23_BumonName',
		'tn23_HinNameBunruiName',
		'tn23_ShuhoKbn',
		'tn23_ShukkasakiName',
		'tn23_ShukkasakiShokuchi',
		'tn23_OrderNo',
		'tn23_HaisoKbn',
		'tn23_Area',
		'tn23_Tanka',
		'tn23_LineCode',
		'tn23_LineName',
		'tn23_RaTantoName',
		'tn23_RaDateTime',
		'tn23_AnTantoName',
		'tn23_AnDateTime',
		'tn23_KenTantoName',
		'tn23_KenDateTime',
		'tn23_KonTantoName',
		'tn23_KonDateTime',
		'tn23_ShuTantoName',
		'tn23_ShuDateTime',
		'tn23_KanTantoName',
		'tn23_KanDateTime',
		'tn23_TehaiDateTime'
	];
}
