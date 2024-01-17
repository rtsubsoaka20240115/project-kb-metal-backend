<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TmWfCode
 * 
 * @property int $id
 * @property int $KBN
 * @property int $CODE
 * @property string|null $NAME
 * @property Carbon|null $REGIST_DATE
 * @property Carbon|null $UPDATE_DATE
 *
 * @package App\Models
 */
class TmWfCode extends Model
{
	protected $table = 'tmWf_Code';
	public $timestamps = false;

	protected $casts = [
		'KBN' => 'int',
		'CODE' => 'int',
		'REGIST_DATE' => 'datetime',
		'UPDATE_DATE' => 'datetime'
	];

	protected $fillable = [
		'KBN',
		'CODE',
		'NAME',
		'REGIST_DATE',
		'UPDATE_DATE'
	];
}
