<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm010Yakuhin
 * 
 * @property int $tm010_YakuhinCode
 * @property string|null $tm010_YakuhinName
 * @property string|null $tm010_Formula
 * @property string|null $tm010_Tani
 * @property int|null $tm010_UpdateTantoCode
 * @property Carbon|null $tm010_RegistDate
 * @property Carbon|null $tm010_UpdateDate
 *
 * @package App\Models
 */
class Tm010Yakuhin extends Model
{
	protected $table = 'tm010_Yakuhin';
	protected $primaryKey = 'tm010_YakuhinCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm010_YakuhinCode' => 'int',
		'tm010_UpdateTantoCode' => 'int',
		'tm010_RegistDate' => 'datetime',
		'tm010_UpdateDate' => 'datetime'
	];

	protected $fillable = [
		'tm010_YakuhinName',
		'tm010_Formula',
		'tm010_Tani',
		'tm010_UpdateTantoCode',
		'tm010_RegistDate',
		'tm010_UpdateDate'
	];
}
