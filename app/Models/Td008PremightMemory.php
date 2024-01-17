<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Td008PremightMemory
 * 
 * @property int $td008_ShijiNo
 * @property int|null $td008_AlStart
 * @property int|null $td008_AlEnd
 * @property int|null $td008_KatsuStart
 * @property int|null $td008_KatsuEnd
 *
 * @package App\Models
 */
class Td008PremightMemory extends Model
{
	protected $table = 'td008_PremightMemory';
	protected $primaryKey = 'td008_ShijiNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'td008_ShijiNo' => 'int',
		'td008_AlStart' => 'int',
		'td008_AlEnd' => 'int',
		'td008_KatsuStart' => 'int',
		'td008_KatsuEnd' => 'int'
	];

	protected $fillable = [
		'td008_AlStart',
		'td008_AlEnd',
		'td008_KatsuStart',
		'td008_KatsuEnd'
	];
}
