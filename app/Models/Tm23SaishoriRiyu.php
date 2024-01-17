<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm23SaishoriRiyu
 * 
 * @property int $tm23_SaishoriRiyuCode
 * @property string|null $tm23_SaishoriRiyu
 * @property Carbon|null $tm23_RegistDate
 * @property Carbon|null $tm23_UpdateDate
 * @property int|null $tm23_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm23SaishoriRiyu extends Model
{
	protected $table = 'tm23_SaishoriRiyu';
	protected $primaryKey = 'tm23_SaishoriRiyuCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm23_SaishoriRiyuCode' => 'int',
		'tm23_RegistDate' => 'datetime',
		'tm23_UpdateDate' => 'datetime',
		'tm23_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm23_SaishoriRiyu',
		'tm23_RegistDate',
		'tm23_UpdateDate',
		'tm23_UpdateTantoCode'
	];
}
