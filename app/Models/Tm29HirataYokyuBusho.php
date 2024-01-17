<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm29HirataYokyuBusho
 * 
 * @property int $tm29_YokyuBushoCode
 * @property int|null $tm29_TokuisakiCode
 * @property Carbon|null $tm29_RegistDate
 * @property Carbon|null $tm29_UpdateDate
 * @property int|null $tm29_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm29HirataYokyuBusho extends Model
{
	protected $table = 'tm29_HirataYokyuBusho';
	protected $primaryKey = 'tm29_YokyuBushoCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm29_YokyuBushoCode' => 'int',
		'tm29_TokuisakiCode' => 'int',
		'tm29_RegistDate' => 'datetime',
		'tm29_UpdateDate' => 'datetime',
		'tm29_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm29_TokuisakiCode',
		'tm29_RegistDate',
		'tm29_UpdateDate',
		'tm29_UpdateTantoCode'
	];
}
