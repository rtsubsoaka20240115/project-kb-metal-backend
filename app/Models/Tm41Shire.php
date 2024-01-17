<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm41Shire
 * 
 * @property int $ID
 * @property int|null $tm41_ShireCode
 * @property string|null $tm41_ShireName
 * @property string|null $tm41_RyakuName
 * @property string|null $tm41_Kana
 * @property int|null $tm41_TodofukenCode
 * @property int|null $tm41_StartDate
 * @property int|null $tm41_Zip
 * @property string|null $tm41_Address1
 * @property string|null $tm41_Address2
 * @property string|null $tm41_Tel
 * @property string|null $tm41_Fax
 * @property string|null $tm41_TantoName
 * @property string|null $tm41_Memo
 * @property int|null $tm41_DeleteFlg
 * @property int|null $tm41_UpdateTantoCode
 * @property Carbon|null $tm41_RegistDate
 * @property Carbon|null $tm41_UpdateDate
 *
 * @package App\Models
 */
class Tm41Shire extends Model
{
	protected $table = 'tm41_Shire';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'tm41_ShireCode' => 'int',
		'tm41_TodofukenCode' => 'int',
		'tm41_StartDate' => 'int',
		'tm41_Zip' => 'int',
		'tm41_DeleteFlg' => 'int',
		'tm41_UpdateTantoCode' => 'int',
		'tm41_RegistDate' => 'datetime',
		'tm41_UpdateDate' => 'datetime'
	];

	protected $fillable = [
		'tm41_ShireCode',
		'tm41_ShireName',
		'tm41_RyakuName',
		'tm41_Kana',
		'tm41_TodofukenCode',
		'tm41_StartDate',
		'tm41_Zip',
		'tm41_Address1',
		'tm41_Address2',
		'tm41_Tel',
		'tm41_Fax',
		'tm41_TantoName',
		'tm41_Memo',
		'tm41_DeleteFlg',
		'tm41_UpdateTantoCode',
		'tm41_RegistDate',
		'tm41_UpdateDate'
	];
}
