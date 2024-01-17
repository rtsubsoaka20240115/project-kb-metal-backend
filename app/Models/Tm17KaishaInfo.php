<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm17KaishaInfo
 * 
 * @property int $tm17_KaishaInfoCode
 * @property string|null $tm17_KaishaName
 * @property string|null $tm17_DaihyoName
 * @property string|null $tm17_PostNo
 * @property string|null $tm17_Address1
 * @property string|null $tm17_Address2
 * @property string|null $tm17_Tel
 * @property string|null $tm17_Fax
 * @property string|null $tm17_BankName
 * @property string|null $tm17_AccountShubetsu
 * @property int|null $tm17_AccountNo
 * @property Carbon|null $tm17_RegistDate
 * @property Carbon|null $tm17_UpdateDate
 * @property int|null $tm17_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm17KaishaInfo extends Model
{
	protected $table = 'tm17_KaishaInfo';
	protected $primaryKey = 'tm17_KaishaInfoCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm17_KaishaInfoCode' => 'int',
		'tm17_AccountNo' => 'int',
		'tm17_RegistDate' => 'datetime',
		'tm17_UpdateDate' => 'datetime',
		'tm17_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm17_KaishaName',
		'tm17_DaihyoName',
		'tm17_PostNo',
		'tm17_Address1',
		'tm17_Address2',
		'tm17_Tel',
		'tm17_Fax',
		'tm17_BankName',
		'tm17_AccountShubetsu',
		'tm17_AccountNo',
		'tm17_RegistDate',
		'tm17_UpdateDate',
		'tm17_UpdateTantoCode'
	];
}
