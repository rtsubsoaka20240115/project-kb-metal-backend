<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm13Sagyo
 * 
 * @property int $tm13_SagyoCode
 * @property string|null $tm13_SagyoName
 * @property string|null $tm13_RyakuName
 * @property string|null $tm13_PrintName
 * @property bool|null $tm13_JiguNoInputFlg
 * @property Carbon|null $tm13_RegistDate
 * @property Carbon|null $tm13_UpdateDate
 * @property int|null $tm13_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm13Sagyo extends Model
{
	protected $table = 'tm13_Sagyo';
	protected $primaryKey = 'tm13_SagyoCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm13_SagyoCode' => 'int',
		'tm13_JiguNoInputFlg' => 'bool',
		'tm13_RegistDate' => 'datetime',
		'tm13_UpdateDate' => 'datetime',
		'tm13_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm13_SagyoName',
		'tm13_RyakuName',
		'tm13_PrintName',
		'tm13_JiguNoInputFlg',
		'tm13_RegistDate',
		'tm13_UpdateDate',
		'tm13_UpdateTantoCode'
	];
}
