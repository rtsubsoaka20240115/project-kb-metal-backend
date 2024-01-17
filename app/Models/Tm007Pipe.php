<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm007Pipe
 * 
 * @property int $id
 * @property int $tm007_LineCode
 * @property int $tm007_PipeNo
 * @property string|null $tm007_ICCode
 * @property Carbon|null $tm007_RegistDate
 * @property Carbon|null $tm007_UpdateDate
 * @property int|null $tm007_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm007Pipe extends Model
{
	protected $table = 'tm007_Pipe';
	public $timestamps = false;

	protected $casts = [
		'tm007_LineCode' => 'int',
		'tm007_PipeNo' => 'int',
		'tm007_RegistDate' => 'datetime',
		'tm007_UpdateDate' => 'datetime',
		'tm007_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm007_LineCode',
		'tm007_PipeNo',
		'tm007_ICCode',
		'tm007_RegistDate',
		'tm007_UpdateDate',
		'tm007_UpdateTantoCode'
	];
}
