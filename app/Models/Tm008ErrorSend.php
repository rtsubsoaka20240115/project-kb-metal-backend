<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm008ErrorSend
 * 
 * @property int $id
 * @property int $tm008_LineCode
 * @property int $tm008_Type
 * @property string|null $tm008_MailAddress
 * @property Carbon|null $tm008_RegistDate
 * @property Carbon|null $tm008_UpdateDate
 * @property int|null $tm008_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm008ErrorSend extends Model
{
	protected $table = 'tm008_ErrorSend';
	public $timestamps = false;

	protected $casts = [
		'tm008_LineCode' => 'int',
		'tm008_Type' => 'int',
		'tm008_RegistDate' => 'datetime',
		'tm008_UpdateDate' => 'datetime',
		'tm008_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm008_LineCode',
		'tm008_Type',
		'tm008_MailAddress',
		'tm008_RegistDate',
		'tm008_UpdateDate',
		'tm008_UpdateTantoCode'
	];
}
