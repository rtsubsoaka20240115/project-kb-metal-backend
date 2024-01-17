<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TmWfOrganization
 * 
 * @property int $ID
 * @property int|null $ORGANIZATION_CODE
 * @property string|null $ORGANIZATION_NAME
 * @property int|null $BUSHO_CODE
 * @property int|null $KA_CODE
 * @property int|null $GROUP_CODE
 * @property Carbon|null $REGIST_DATE
 * @property Carbon|null $UPDATE_DATE
 *
 * @package App\Models
 */
class TmWfOrganization extends Model
{
	protected $table = 'tmWf_Organization';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'ORGANIZATION_CODE' => 'int',
		'BUSHO_CODE' => 'int',
		'KA_CODE' => 'int',
		'GROUP_CODE' => 'int',
		'REGIST_DATE' => 'datetime',
		'UPDATE_DATE' => 'datetime'
	];

	protected $fillable = [
		'ORGANIZATION_CODE',
		'ORGANIZATION_NAME',
		'BUSHO_CODE',
		'KA_CODE',
		'GROUP_CODE',
		'REGIST_DATE',
		'UPDATE_DATE'
	];
}
