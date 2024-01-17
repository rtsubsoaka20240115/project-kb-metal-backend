<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm43Kotei
 * 
 * @property int $tm43_KoteiCode
 * @property string|null $tm43_KoteiName
 * @property int|null $tm43_LineCode
 * @property int|null $tm43_SagyoCode
 *
 * @package App\Models
 */
class Tm43Kotei extends Model
{
	protected $table = 'tm43_Kotei';
	protected $primaryKey = 'tm43_KoteiCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm43_KoteiCode' => 'int',
		'tm43_LineCode' => 'int',
		'tm43_SagyoCode' => 'int'
	];

	protected $fillable = [
		'tm43_KoteiName',
		'tm43_LineCode',
		'tm43_SagyoCode'
	];
}
