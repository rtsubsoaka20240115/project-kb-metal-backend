<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DefectHistory
 * 
 * @property int $id
 * @property string $sagyo_shoji_no
 * @property string|null $regist_date
 * @property string|null $tanto
 * @property string|null $kyakusaki
 * @property float|null $kyakusaki_code
 * @property string $zuban
 * @property string|null $shorimei
 * @property float|null $sousu
 * @property string|null $level
 * @property string|null $fuguai_bunrui
 * @property string|null $bumon
 * @property string|null $hassei_kotei
 * @property float|null $fuguaisu
 * @property float|null $tanka
 * @property float|null $songai
 * @property string|null $jokyo
 * @property string|null $taio
 * @property string|null $shochi
 * @property string|null $nouki
 * @property string|null $line
 *
 * @package App\Models
 */
class DefectHistory extends Model
{
	protected $table = 'defect_histories';
	public $timestamps = false;

	protected $casts = [
		'kyakusaki_code' => 'float',
		'sousu' => 'float',
		'fuguaisu' => 'float',
		'tanka' => 'float',
		'songai' => 'float'
	];

	protected $fillable = [
		'sagyo_shoji_no',
		'regist_date',
		'tanto',
		'kyakusaki',
		'kyakusaki_code',
		'zuban',
		'shorimei',
		'sousu',
		'level',
		'fuguai_bunrui',
		'bumon',
		'hassei_kotei',
		'fuguaisu',
		'tanka',
		'songai',
		'jokyo',
		'taio',
		'shochi',
		'nouki',
		'line'
	];
}
