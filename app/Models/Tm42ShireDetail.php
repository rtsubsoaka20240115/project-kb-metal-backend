<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm42ShireDetail
 * 
 * @property int $ID
 * @property int|null $tm42_ShireId
 * @property int|null $tm42_IraiId
 * @property int|null $tm42_SagyoId
 * @property int|null $tm42_UpdateTantoCode
 * @property Carbon|null $tm42_RegistDate
 * @property Carbon|null $tm42_UpdateDate
 *
 * @package App\Models
 */
class Tm42ShireDetail extends Model
{
	protected $table = 'tm42_ShireDetail';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'tm42_ShireId' => 'int',
		'tm42_IraiId' => 'int',
		'tm42_SagyoId' => 'int',
		'tm42_UpdateTantoCode' => 'int',
		'tm42_RegistDate' => 'datetime',
		'tm42_UpdateDate' => 'datetime'
	];

	protected $fillable = [
		'tm42_ShireId',
		'tm42_IraiId',
		'tm42_SagyoId',
		'tm42_UpdateTantoCode',
		'tm42_RegistDate',
		'tm42_UpdateDate'
	];
}
