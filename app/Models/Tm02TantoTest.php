<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm02TantoTest
 * 
 * @property int $tm02_TantoCode
 * @property string|null $tm02_TantoName
 * @property string|null $tm02_RyakuName
 * @property string|null $tm02_KanaName
 * @property int|null $tm02_BushoCode
 * @property int|null $tm02_BukaCode
 * @property string|null $tm02_ShainKbn
 * @property bool|null $tm02_TaishokuFlg
 * @property string|null $tm02_Hphone
 * @property string|null $tm02_Password
 * @property bool|null $tm02_AdminFlg
 * @property bool|null $tm02_EigyoFlg
 * @property Carbon|null $tm02_RegistDate
 * @property Carbon|null $tm02_UpdateDate
 * @property int|null $tm02_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm02TantoTest extends Model
{
	protected $table = 'tm02_TantoTest';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm02_TantoCode' => 'int',
		'tm02_BushoCode' => 'int',
		'tm02_BukaCode' => 'int',
		'tm02_TaishokuFlg' => 'bool',
		'tm02_AdminFlg' => 'bool',
		'tm02_EigyoFlg' => 'bool',
		'tm02_RegistDate' => 'datetime',
		'tm02_UpdateDate' => 'datetime',
		'tm02_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm02_TantoCode',
		'tm02_TantoName',
		'tm02_RyakuName',
		'tm02_KanaName',
		'tm02_BushoCode',
		'tm02_BukaCode',
		'tm02_ShainKbn',
		'tm02_TaishokuFlg',
		'tm02_Hphone',
		'tm02_Password',
		'tm02_AdminFlg',
		'tm02_EigyoFlg',
		'tm02_RegistDate',
		'tm02_UpdateDate',
		'tm02_UpdateTantoCode'
	];
}
