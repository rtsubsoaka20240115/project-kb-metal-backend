<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm015DelayGraph
 * 
 * @property int $ID
 * @property int|null $LineCode
 * @property string|null $MekkishuCode
 * @property int|null $DelayGraph_Start
 *
 * @package App\Models
 */
class Tm015DelayGraph extends Model
{
	protected $table = 'tm015_DelayGraph';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'LineCode' => 'int',
		'DelayGraph_Start' => 'int'
	];

	protected $fillable = [
		'LineCode',
		'MekkishuCode',
		'DelayGraph_Start'
	];
}
