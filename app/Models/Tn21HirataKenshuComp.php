<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn21HirataKenshuComp
 * 
 * @property string $tn21_ChumonNo
 * @property int|null $tn21_Suryo
 * @property float|null $tn21_Tanka
 * @property float|null $tn21_Kingaku
 * @property Carbon|null $tn21_RegistDate
 * @property Carbon|null $tn21_UpdateDate
 * @property int|null $tn21_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn21HirataKenshuComp extends Model
{
	protected $table = 'tn21_HirataKenshuComp';
	protected $primaryKey = 'tn21_ChumonNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn21_Suryo' => 'int',
		'tn21_Tanka' => 'float',
		'tn21_Kingaku' => 'float',
		'tn21_RegistDate' => 'datetime',
		'tn21_UpdateDate' => 'datetime',
		'tn21_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn21_Suryo',
		'tn21_Tanka',
		'tn21_Kingaku',
		'tn21_RegistDate',
		'tn21_UpdateDate',
		'tn21_UpdateTantoCode'
	];
}
