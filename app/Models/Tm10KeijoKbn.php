<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm10KeijoKbn
 * 
 * @property int $tm10_KeijoKbn
 * @property string|null $tm10_KeijoKbnName
 * @property Carbon|null $tm10_RegistDate
 * @property Carbon|null $tm10_UpdateDate
 * @property int|null $tm10_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm10KeijoKbn extends Model
{
	protected $table = 'tm10_KeijoKbn';
	protected $primaryKey = 'tm10_KeijoKbn';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm10_KeijoKbn' => 'int',
		'tm10_RegistDate' => 'datetime',
		'tm10_UpdateDate' => 'datetime',
		'tm10_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm10_KeijoKbnName',
		'tm10_RegistDate',
		'tm10_UpdateDate',
		'tm10_UpdateTantoCode'
	];
}
