<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm40IraiSagyo
 * 
 * @property int $ID
 * @property int|null $tm40_IraiKbnId
 * @property string|null $tm40_SagyoName
 * @property int|null $tm40_DeleteFlg
 * @property int|null $tm40_UpdateTantoCode
 * @property Carbon|null $tm40_RegistDate
 * @property Carbon|null $tm40_UpdateDate
 *
 * @package App\Models
 */
class Tm40IraiSagyo extends Model
{
	protected $table = 'tm40_IraiSagyo';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'tm40_IraiKbnId' => 'int',
		'tm40_DeleteFlg' => 'int',
		'tm40_UpdateTantoCode' => 'int',
		'tm40_RegistDate' => 'datetime',
		'tm40_UpdateDate' => 'datetime'
	];

	protected $fillable = [
		'tm40_IraiKbnId',
		'tm40_SagyoName',
		'tm40_DeleteFlg',
		'tm40_UpdateTantoCode',
		'tm40_RegistDate',
		'tm40_UpdateDate'
	];
}
