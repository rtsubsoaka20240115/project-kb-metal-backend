<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn14DenpyoNo
 * 
 * @property int $tn14_RecordNo
 * @property int $tn14_DenpyoNo
 * @property Carbon|null $tn14_RegistDate
 * @property Carbon|null $tn14_UpdateDate
 * @property int|null $tn14_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn14DenpyoNo extends Model
{
	protected $table = 'tn14_DenpyoNo';
	protected $primaryKey = 'tn14_RecordNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn14_RecordNo' => 'int',
		'tn14_DenpyoNo' => 'int',
		'tn14_RegistDate' => 'datetime',
		'tn14_UpdateDate' => 'datetime',
		'tn14_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn14_DenpyoNo',
		'tn14_RegistDate',
		'tn14_UpdateDate',
		'tn14_UpdateTantoCode'
	];
}
