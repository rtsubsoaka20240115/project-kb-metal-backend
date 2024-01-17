<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn20SagyoJissekiShukei
 * 
 * @property int $id
 * @property Carbon $tn20_Date
 * @property int $tn20_TantoCode
 * @property int $tn20_SagyoJissekiShukeiKbn
 * @property int|null $tn20_Total
 * @property int|null $tn20_Time0
 * @property int|null $tn20_Time1
 * @property int|null $tn20_Time2
 * @property int|null $tn20_Time3
 * @property int|null $tn20_Time4
 * @property int|null $tn20_Time5
 * @property int|null $tn20_Time6
 * @property int|null $tn20_Time7
 * @property int|null $tn20_Time8
 * @property int|null $tn20_Time9
 * @property int|null $tn20_Time10
 * @property int|null $tn20_Time11
 * @property int|null $tn20_Time12
 * @property int|null $tn20_Time13
 * @property int|null $tn20_Time14
 * @property int|null $tn20_Time15
 * @property int|null $tn20_Time16
 * @property int|null $tn20_Time17
 * @property int|null $tn20_Time18
 * @property int|null $tn20_Time19
 * @property int|null $tn20_Time20
 * @property int|null $tn20_Time21
 * @property int|null $tn20_Time22
 * @property int|null $tn20_Time23
 * @property Carbon|null $tn20_RegistDate
 * @property Carbon|null $tn20_UpdateDate
 * @property int|null $tn20_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn20SagyoJissekiShukei extends Model
{
	protected $table = 'tn20_SagyoJissekiShukei';
	public $timestamps = false;

	protected $casts = [
		'tn20_Date' => 'datetime',
		'tn20_TantoCode' => 'int',
		'tn20_SagyoJissekiShukeiKbn' => 'int',
		'tn20_Total' => 'int',
		'tn20_Time0' => 'int',
		'tn20_Time1' => 'int',
		'tn20_Time2' => 'int',
		'tn20_Time3' => 'int',
		'tn20_Time4' => 'int',
		'tn20_Time5' => 'int',
		'tn20_Time6' => 'int',
		'tn20_Time7' => 'int',
		'tn20_Time8' => 'int',
		'tn20_Time9' => 'int',
		'tn20_Time10' => 'int',
		'tn20_Time11' => 'int',
		'tn20_Time12' => 'int',
		'tn20_Time13' => 'int',
		'tn20_Time14' => 'int',
		'tn20_Time15' => 'int',
		'tn20_Time16' => 'int',
		'tn20_Time17' => 'int',
		'tn20_Time18' => 'int',
		'tn20_Time19' => 'int',
		'tn20_Time20' => 'int',
		'tn20_Time21' => 'int',
		'tn20_Time22' => 'int',
		'tn20_Time23' => 'int',
		'tn20_RegistDate' => 'datetime',
		'tn20_UpdateDate' => 'datetime',
		'tn20_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn20_Date',
		'tn20_TantoCode',
		'tn20_SagyoJissekiShukeiKbn',
		'tn20_Total',
		'tn20_Time0',
		'tn20_Time1',
		'tn20_Time2',
		'tn20_Time3',
		'tn20_Time4',
		'tn20_Time5',
		'tn20_Time6',
		'tn20_Time7',
		'tn20_Time8',
		'tn20_Time9',
		'tn20_Time10',
		'tn20_Time11',
		'tn20_Time12',
		'tn20_Time13',
		'tn20_Time14',
		'tn20_Time15',
		'tn20_Time16',
		'tn20_Time17',
		'tn20_Time18',
		'tn20_Time19',
		'tn20_Time20',
		'tn20_Time21',
		'tn20_Time22',
		'tn20_Time23',
		'tn20_RegistDate',
		'tn20_UpdateDate',
		'tn20_UpdateTantoCode'
	];
}
