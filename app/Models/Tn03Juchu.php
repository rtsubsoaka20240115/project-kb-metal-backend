<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn03Juchu
 * 
 * @property int $tn03_JuchuNo
 * @property int|null $tn03_InputTantoCode
 * @property int|null $tn03_TokuisakiCode
 * @property string|null $tn03_TokuisakiShokuchi
 * @property int|null $tn03_ShukkasakiCode
 * @property string|null $tn03_ShukkasakiShokuchi
 * @property Carbon|null $tn03_JuchuDate
 * @property Carbon|null $tn03_NohinDate
 * @property Carbon|null $tn03_ShanaiNohinDate
 * @property int|null $tn03_HaisoKbn
 * @property int|null $tn03_Time
 * @property string|null $tn03_OrderNo
 * @property float|null $tn03_AlNebikiGaku
 * @property float|null $tn03_NiNebikiGaku
 * @property float|null $tn03_1KaNebikiGaku
 * @property float|null $tn03_2KaNebikiGaku
 * @property string|null $tn03_Biko1
 * @property string|null $tn03_Biko2
 * @property string|null $tn03_Biko3
 * @property string|null $tn03_Biko4
 * @property string|null $tn03_Biko5
 * @property float|null $tn03_Shokei
 * @property float|null $tn03_NebikigoShokei
 * @property float|null $tn03_Gokei
 * @property float|null $tn03_ShohiZei
 * @property int|null $tn03_SeikyuNo
 * @property int|null $tn03_DenpyoNo
 * @property int|null $tn03_NohinshoPrintKbn
 * @property int|null $tn03_NohinshoPrintTantoCode
 * @property Carbon|null $tn03_NohinshoPrintDateTime
 * @property int|null $tn03_JuchuJotaiKbn
 * @property Carbon|null $tn03_RegistDate
 * @property Carbon|null $tn03_UpdateDate
 * @property int|null $tn03_UpdateTantoCode
 * @property int|null $tn03_RegistTantoCode
 *
 * @package App\Models
 */
class Tn03Juchu extends Model
{
	protected $table = 'tn03_Juchu';
	protected $primaryKey = 'tn03_JuchuNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn03_JuchuNo' => 'int',
		'tn03_InputTantoCode' => 'int',
		'tn03_TokuisakiCode' => 'int',
		'tn03_ShukkasakiCode' => 'int',
		'tn03_JuchuDate' => 'datetime',
		'tn03_NohinDate' => 'datetime',
		'tn03_ShanaiNohinDate' => 'datetime',
		'tn03_HaisoKbn' => 'int',
		'tn03_Time' => 'int',
		'tn03_AlNebikiGaku' => 'float',
		'tn03_NiNebikiGaku' => 'float',
		'tn03_1KaNebikiGaku' => 'float',
		'tn03_2KaNebikiGaku' => 'float',
		'tn03_Shokei' => 'float',
		'tn03_NebikigoShokei' => 'float',
		'tn03_Gokei' => 'float',
		'tn03_ShohiZei' => 'float',
		'tn03_SeikyuNo' => 'int',
		'tn03_DenpyoNo' => 'int',
		'tn03_NohinshoPrintKbn' => 'int',
		'tn03_NohinshoPrintTantoCode' => 'int',
		'tn03_NohinshoPrintDateTime' => 'datetime',
		'tn03_JuchuJotaiKbn' => 'int',
		'tn03_RegistDate' => 'datetime',
		'tn03_UpdateDate' => 'datetime',
		'tn03_UpdateTantoCode' => 'int',
		'tn03_RegistTantoCode' => 'int'
	];

	protected $fillable = [
		'tn03_InputTantoCode',
		'tn03_TokuisakiCode',
		'tn03_TokuisakiShokuchi',
		'tn03_ShukkasakiCode',
		'tn03_ShukkasakiShokuchi',
		'tn03_JuchuDate',
		'tn03_NohinDate',
		'tn03_ShanaiNohinDate',
		'tn03_HaisoKbn',
		'tn03_Time',
		'tn03_OrderNo',
		'tn03_AlNebikiGaku',
		'tn03_NiNebikiGaku',
		'tn03_1KaNebikiGaku',
		'tn03_2KaNebikiGaku',
		'tn03_Biko1',
		'tn03_Biko2',
		'tn03_Biko3',
		'tn03_Biko4',
		'tn03_Biko5',
		'tn03_Shokei',
		'tn03_NebikigoShokei',
		'tn03_Gokei',
		'tn03_ShohiZei',
		'tn03_SeikyuNo',
		'tn03_DenpyoNo',
		'tn03_NohinshoPrintKbn',
		'tn03_NohinshoPrintTantoCode',
		'tn03_NohinshoPrintDateTime',
		'tn03_JuchuJotaiKbn',
		'tn03_RegistDate',
		'tn03_UpdateDate',
		'tn03_UpdateTantoCode',
		'tn03_RegistTantoCode'
	];
}
