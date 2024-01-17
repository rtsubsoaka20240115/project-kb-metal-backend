<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn29ShijiGroup
 * 
 * @property int $id
 * @property int $tn29_ShijiNo
 * @property int $tn29_ShijiMeisaiNo
 * @property string|null $tn29_Zuban
 * @property string|null $tn29_BarCode
 * @property int|null $tn29_LotNo
 * @property int|null $tn29_MekkiShuCode
 * @property Carbon|null $tn29_RegistDateTime
 *
 * @package App\Models
 */
class Tn29ShijiGroup extends Model
{
	protected $table = 'tn29_ShijiGroup';
	public $timestamps = false;

	protected $casts = [
		'tn29_ShijiNo' => 'int',
		'tn29_ShijiMeisaiNo' => 'int',
		'tn29_LotNo' => 'int',
		'tn29_MekkiShuCode' => 'int',
		'tn29_RegistDateTime' => 'datetime'
	];

	protected $fillable = [
		'tn29_ShijiNo',
		'tn29_ShijiMeisaiNo',
		'tn29_Zuban',
		'tn29_BarCode',
		'tn29_LotNo',
		'tn29_MekkiShuCode',
		'tn29_RegistDateTime'
	];
}
