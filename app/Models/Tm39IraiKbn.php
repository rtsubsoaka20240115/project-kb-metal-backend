<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm39IraiKbn
 * 
 * @property int $ID
 * @property string|null $tm39_IraiKbnName
 * @property int|null $tm39_DeleteFlg
 * @property int|null $tm39_UpdateTantoCode
 * @property Carbon|null $tm39_RegistDate
 * @property Carbon|null $tm39_UpdateDate
 *
 * @package App\Models
 */
class Tm39IraiKbn extends Model
{
	protected $table = 'tm39_IraiKbn';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'tm39_DeleteFlg' => 'int',
		'tm39_UpdateTantoCode' => 'int',
		'tm39_RegistDate' => 'datetime',
		'tm39_UpdateDate' => 'datetime'
	];

	protected $fillable = [
		'tm39_IraiKbnName',
		'tm39_DeleteFlg',
		'tm39_UpdateTantoCode',
		'tm39_RegistDate',
		'tm39_UpdateDate'
	];
}
