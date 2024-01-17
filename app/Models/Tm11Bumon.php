<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm11Bumon
 * 
 * @property int $tm11_BumonCode
 * @property string|null $tm11_BumonName
 * @property string|null $tm11_RyakuName
 * @property Carbon|null $tm11_RegistDate
 * @property Carbon|null $tm11_UpdateDate
 * @property int|null $tm11_UpdateTantoCode
 * @property int|null $tm11_OutsourcingJissekiExcelRow
 * @property bool|null $tm11_OutsourcingJissekiUnchinKeijo
 *
 * @package App\Models
 */
class Tm11Bumon extends Model
{
	protected $table = 'tm11_Bumon';
	protected $primaryKey = 'tm11_BumonCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm11_BumonCode' => 'int',
		'tm11_RegistDate' => 'datetime',
		'tm11_UpdateDate' => 'datetime',
		'tm11_UpdateTantoCode' => 'int',
		'tm11_OutsourcingJissekiExcelRow' => 'int',
		'tm11_OutsourcingJissekiUnchinKeijo' => 'bool'
	];

	protected $fillable = [
		'tm11_BumonName',
		'tm11_RyakuName',
		'tm11_RegistDate',
		'tm11_UpdateDate',
		'tm11_UpdateTantoCode',
		'tm11_OutsourcingJissekiExcelRow',
		'tm11_OutsourcingJissekiUnchinKeijo'
	];
}
