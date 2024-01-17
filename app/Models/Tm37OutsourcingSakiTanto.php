<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm37OutsourcingSakiTanto
 * 
 * @property int $id
 * @property int $tm37_Code
 * @property int $tm37_TantoCode
 * @property string|null $tm37_TantoName
 * @property string|null $tm37_BushoName
 * @property bool|null $tm37_TaishokuFlg
 * @property string|null $tm37_Biko
 * @property Carbon|null $tm37_RegistDate
 * @property Carbon|null $tm37_UpdateDate
 * @property int|null $tm37_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm37OutsourcingSakiTanto extends Model
{
	protected $table = 'tm37_OutsourcingSakiTanto';
	public $timestamps = false;

	protected $casts = [
		'tm37_Code' => 'int',
		'tm37_TantoCode' => 'int',
		'tm37_TaishokuFlg' => 'bool',
		'tm37_RegistDate' => 'datetime',
		'tm37_UpdateDate' => 'datetime',
		'tm37_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm37_Code',
		'tm37_TantoCode',
		'tm37_TantoName',
		'tm37_BushoName',
		'tm37_TaishokuFlg',
		'tm37_Biko',
		'tm37_RegistDate',
		'tm37_UpdateDate',
		'tm37_UpdateTantoCode'
	];
}
