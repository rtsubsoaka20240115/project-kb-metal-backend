<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm36OutsourcingSaki
 * 
 * @property int $tm36_Code
 * @property string|null $tm36_OutsourcingName
 * @property string|null $tm36_PostNo
 * @property string|null $tm36_Address1
 * @property string|null $tm36_Address2
 * @property string|null $tm36_Tel
 * @property string|null $tm36_Fax
 * @property string|null $tm36_Biko
 * @property Carbon|null $tm36_RegistDate
 * @property Carbon|null $tm36_UpdateDate
 * @property int|null $tm36_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm36OutsourcingSaki extends Model
{
	protected $table = 'tm36_OutsourcingSaki';
	protected $primaryKey = 'tm36_Code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm36_Code' => 'int',
		'tm36_RegistDate' => 'datetime',
		'tm36_UpdateDate' => 'datetime',
		'tm36_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm36_OutsourcingName',
		'tm36_PostNo',
		'tm36_Address1',
		'tm36_Address2',
		'tm36_Tel',
		'tm36_Fax',
		'tm36_Biko',
		'tm36_RegistDate',
		'tm36_UpdateDate',
		'tm36_UpdateTantoCode'
	];
}
