<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm34Kumiawase
 * 
 * @property int $tm34_KumiawaseCode
 * @property int|null $tm34_MekkishuCode
 * @property string|null $tm34_Zaishitsu
 * @property string|null $tm34_Message
 * @property int|null $tm34_UpdateTantoCode
 * @property Carbon|null $tm34_RegistDate
 * @property Carbon|null $tm34_UpdateDate
 *
 * @package App\Models
 */
class Tm34Kumiawase extends Model
{
	protected $table = 'tm34_Kumiawase';
	protected $primaryKey = 'tm34_KumiawaseCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm34_KumiawaseCode' => 'int',
		'tm34_MekkishuCode' => 'int',
		'tm34_UpdateTantoCode' => 'int',
		'tm34_RegistDate' => 'datetime',
		'tm34_UpdateDate' => 'datetime'
	];

	protected $fillable = [
		'tm34_MekkishuCode',
		'tm34_Zaishitsu',
		'tm34_Message',
		'tm34_UpdateTantoCode',
		'tm34_RegistDate',
		'tm34_UpdateDate'
	];
}
