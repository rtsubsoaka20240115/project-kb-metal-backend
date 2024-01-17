<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Td005PassingSend
 * 
 * @property int $id
 * @property int $td005_ShijiNo
 * @property int $td005_ShijiMeisaiNo
 * @property int $td005_PassingKoteiCode
 * @property string|null $td005_MailAddress
 *
 * @package App\Models
 */
class Td005PassingSend extends Model
{
	protected $table = 'td005_PassingSend';
	public $timestamps = false;

	protected $casts = [
		'td005_ShijiNo' => 'int',
		'td005_ShijiMeisaiNo' => 'int',
		'td005_PassingKoteiCode' => 'int'
	];

	protected $fillable = [
		'td005_ShijiNo',
		'td005_ShijiMeisaiNo',
		'td005_PassingKoteiCode',
		'td005_MailAddress'
	];
}
