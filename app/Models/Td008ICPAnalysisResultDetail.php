<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Td008ICPAnalysisResultDetail
 * 
 * @property int $ID
 * @property int|null $td008_AnalysisResult_Id
 * @property string|null $td008_Element
 * @property string|null $td008_Tani
 * @property string|null $td008_Target
 * @property float|null $td008_Inclusion
 * @property Carbon|null $td008_RegistDate
 * @property Carbon|null $td008_UpdateDate
 * @property int|null $td008_UpdateTantoCode
 *
 * @package App\Models
 */
class Td008ICPAnalysisResultDetail extends Model
{
	protected $table = 'td008_ICPAnalysisResult_Detail';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'td008_AnalysisResult_Id' => 'int',
		'td008_Inclusion' => 'float',
		'td008_RegistDate' => 'datetime',
		'td008_UpdateDate' => 'datetime',
		'td008_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'td008_AnalysisResult_Id',
		'td008_Element',
		'td008_Tani',
		'td008_Target',
		'td008_Inclusion',
		'td008_RegistDate',
		'td008_UpdateDate',
		'td008_UpdateTantoCode'
	];
}
