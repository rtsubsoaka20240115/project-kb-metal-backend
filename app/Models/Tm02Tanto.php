<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm02Tanto
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
 * @property int|null $tm02_JouchouCode
 * @property float|null $tm02_KihonSagyoJikan
 * @property string|null $tm02_MailAddress
 * @property int|null $tm02_Yakushoku
 * @property bool|null $tm02_OutsourcingTantoFlg
 * @property int|null $tm02_WfOrganizationCode
 * @property int|null $tm02_WfAuthCode
 * @property int|null $tm02_WfYakushokuCode
 * @property int|null $tm02_WfKaigo
 * @property int|null $tm02_WfHaigusha
 * @property int|null $tm02_WfJippu
 * @property int|null $tm02_WfJitsubo
 * @property int|null $tm02_WfGifu
 * @property int|null $tm02_WfGibo
 * @property int|null $tm02_WfSofu
 * @property int|null $tm02_WfSobo
 * @property int|null $tm02_WfKyodaiShimai
 * @property int|null $tm02_WfMago
 * @property int|null $tm02_WfChild
 * @property int|null $tm02_WfMail
 *
 * @package App\Models
 */
class Tm02Tanto extends Model
{
	protected $table = 'tm02_Tanto';
	protected $primaryKey = 'tm02_TantoCode';
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
		'tm02_UpdateTantoCode' => 'int',
		'tm02_JouchouCode' => 'int',
		'tm02_KihonSagyoJikan' => 'float',
		'tm02_Yakushoku' => 'int',
		'tm02_OutsourcingTantoFlg' => 'bool',
		'tm02_WfOrganizationCode' => 'int',
		'tm02_WfAuthCode' => 'int',
		'tm02_WfYakushokuCode' => 'int',
		'tm02_WfKaigo' => 'int',
		'tm02_WfHaigusha' => 'int',
		'tm02_WfJippu' => 'int',
		'tm02_WfJitsubo' => 'int',
		'tm02_WfGifu' => 'int',
		'tm02_WfGibo' => 'int',
		'tm02_WfSofu' => 'int',
		'tm02_WfSobo' => 'int',
		'tm02_WfKyodaiShimai' => 'int',
		'tm02_WfMago' => 'int',
		'tm02_WfChild' => 'int',
		'tm02_WfMail' => 'int'
	];

	protected $fillable = [
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
		'tm02_UpdateTantoCode',
		'tm02_JouchouCode',
		'tm02_KihonSagyoJikan',
		'tm02_MailAddress',
		'tm02_Yakushoku',
		'tm02_OutsourcingTantoFlg',
		'tm02_WfOrganizationCode',
		'tm02_WfAuthCode',
		'tm02_WfYakushokuCode',
		'tm02_WfKaigo',
		'tm02_WfHaigusha',
		'tm02_WfJippu',
		'tm02_WfJitsubo',
		'tm02_WfGifu',
		'tm02_WfGibo',
		'tm02_WfSofu',
		'tm02_WfSobo',
		'tm02_WfKyodaiShimai',
		'tm02_WfMago',
		'tm02_WfChild',
		'tm02_WfMail'
	];
}
