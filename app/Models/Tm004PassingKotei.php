<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm004PassingKotei
 * 
 * @property int $id
 * @property int $tm004_PassingKoteiCode
 * @property int $tm004_LineCode
 * @property int|null $tm004_SagyoCode
 * @property string|null $tm004_SagyoName
 * @property string|null $tm004_RyakuName
 * @property bool|null $tm004_DenkiFlg
 * @property int|null $tm004_NohinTime
 * @property Carbon|null $tm004_RegistDate
 * @property Carbon|null $tm004_UpdateDate
 * @property int|null $tm004_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm004PassingKotei extends Model
{
	protected $table = 'tm004_PassingKotei';
	public $timestamps = false;

	protected $casts = [
		'tm004_PassingKoteiCode' => 'int',
		'tm004_LineCode' => 'int',
		'tm004_SagyoCode' => 'int',
		'tm004_DenkiFlg' => 'bool',
		'tm004_NohinTime' => 'int',
		'tm004_RegistDate' => 'datetime',
		'tm004_UpdateDate' => 'datetime',
		'tm004_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm004_PassingKoteiCode',
		'tm004_LineCode',
		'tm004_SagyoCode',
		'tm004_SagyoName',
		'tm004_RyakuName',
		'tm004_DenkiFlg',
		'tm004_NohinTime',
		'tm004_RegistDate',
		'tm004_UpdateDate',
		'tm004_UpdateTantoCode'
	];
}
