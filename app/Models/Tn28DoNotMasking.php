<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn28DoNotMasking
 * 
 * @property int $id
 * @property int $tn28_ShijiNo
 * @property int $tn28_ShijiMeisaiNo
 * @property Carbon|null $tn28_RegistDateTime
 * @property int|null $tn28_RegistTantoCode
 *
 * @package App\Models
 */
class Tn28DoNotMasking extends Model
{
	protected $table = 'tn28_DoNotMasking';
	public $timestamps = false;

	protected $casts = [
		'tn28_ShijiNo' => 'int',
		'tn28_ShijiMeisaiNo' => 'int',
		'tn28_RegistDateTime' => 'datetime',
		'tn28_RegistTantoCode' => 'int'
	];

	protected $fillable = [
		'tn28_ShijiNo',
		'tn28_ShijiMeisaiNo',
		'tn28_RegistDateTime',
		'tn28_RegistTantoCode'
	];
}
