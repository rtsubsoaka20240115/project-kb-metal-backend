<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn22HaitaInfo
 * 
 * @property int $id
 * @property int $tn22_HaitaInfoKbn
 * @property int $tn22_HaitaInfoNo
 * @property int|null $tn22_TantoCode
 * @property Carbon|null $tn22_ShoriDate
 * @property string|null $tn22_PCName
 * @property string|null $tn22_IPAddress
 *
 * @package App\Models
 */
class Tn22HaitaInfo extends Model
{
	protected $table = 'tn22_HaitaInfo';
	public $timestamps = false;

	protected $casts = [
		'tn22_HaitaInfoKbn' => 'int',
		'tn22_HaitaInfoNo' => 'int',
		'tn22_TantoCode' => 'int',
		'tn22_ShoriDate' => 'datetime'
	];

	protected $fillable = [
		'tn22_HaitaInfoKbn',
		'tn22_HaitaInfoNo',
		'tn22_TantoCode',
		'tn22_ShoriDate',
		'tn22_PCName',
		'tn22_IPAddress'
	];
}
