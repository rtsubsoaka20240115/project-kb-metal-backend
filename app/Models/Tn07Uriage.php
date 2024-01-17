<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn07Uriage
 * 
 * @property int $tn07_UriageNo
 * @property int|null $tn07_InputTantoCode
 * @property int|null $tn07_TokuisakiCode
 * @property string|null $tn07_TokuisakiShokuchi
 * @property int|null $tn07_ShukkasakiCode
 * @property string|null $tn07_ShukkasakiShokuchi
 * @property Carbon|null $tn07_UriageDate
 * @property string|null $tn07_OrderNo
 * @property float|null $tn07_AlNebikiGaku
 * @property float|null $tn07_NiNebikiGaku
 * @property float|null $tn07_1KaNebikiGaku
 * @property float|null $tn07_2KaNebikiGaku
 * @property string|null $tn07_Biko1
 * @property string|null $tn07_Biko2
 * @property string|null $tn07_Biko3
 * @property string|null $tn07_Biko4
 * @property string|null $tn07_Biko5
 * @property float|null $tn07_Shokei
 * @property float|null $tn07_NebikigoShokei
 * @property float|null $tn07_Gokei
 * @property float|null $tn07_ShohiZei
 * @property int|null $tn07_SeikyuNo
 * @property Carbon|null $tn07_RegistDate
 * @property Carbon|null $tn07_UpdateDate
 * @property int|null $tn07_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn07Uriage extends Model
{
	protected $table = 'tn07_Uriage';
	protected $primaryKey = 'tn07_UriageNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn07_UriageNo' => 'int',
		'tn07_InputTantoCode' => 'int',
		'tn07_TokuisakiCode' => 'int',
		'tn07_ShukkasakiCode' => 'int',
		'tn07_UriageDate' => 'datetime',
		'tn07_AlNebikiGaku' => 'float',
		'tn07_NiNebikiGaku' => 'float',
		'tn07_1KaNebikiGaku' => 'float',
		'tn07_2KaNebikiGaku' => 'float',
		'tn07_Shokei' => 'float',
		'tn07_NebikigoShokei' => 'float',
		'tn07_Gokei' => 'float',
		'tn07_ShohiZei' => 'float',
		'tn07_SeikyuNo' => 'int',
		'tn07_RegistDate' => 'datetime',
		'tn07_UpdateDate' => 'datetime',
		'tn07_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn07_InputTantoCode',
		'tn07_TokuisakiCode',
		'tn07_TokuisakiShokuchi',
		'tn07_ShukkasakiCode',
		'tn07_ShukkasakiShokuchi',
		'tn07_UriageDate',
		'tn07_OrderNo',
		'tn07_AlNebikiGaku',
		'tn07_NiNebikiGaku',
		'tn07_1KaNebikiGaku',
		'tn07_2KaNebikiGaku',
		'tn07_Biko1',
		'tn07_Biko2',
		'tn07_Biko3',
		'tn07_Biko4',
		'tn07_Biko5',
		'tn07_Shokei',
		'tn07_NebikigoShokei',
		'tn07_Gokei',
		'tn07_ShohiZei',
		'tn07_SeikyuNo',
		'tn07_RegistDate',
		'tn07_UpdateDate',
		'tn07_UpdateTantoCode'
	];
}
