<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Outsourcing
 * 
 * @property string $sagyo_shoji_no
 * @property string|null $kyakusaki
 * @property string|null $hinmei
 * @property string $zuban
 * @property string|null $shorimei
 * @property string|null $zaishitsu
 * @property float|null $suryo
 * @property string|null $makuatsu
 * @property string|null $gaichusaki
 * @property float|null $shanai_tanka
 * @property float|null $kakesu
 * @property float|null $gaichu_tanka
 * @property float|null $gaichu_kingaku
 * @property string|null $nouki
 * @property string|null $haisou
 * @property string|null $biko
 * @property string|null $tanto
 * @property string|null $regist_date
 * @property float|null $shanai_kingaku
 * @property string|null $bumon_code
 * @property string|null $hacchu_no
 *
 * @package App\Models
 */
class Outsourcing extends Model
{
	protected $table = 'outsourcings';
	protected $primaryKey = 'sagyo_shoji_no';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'suryo' => 'float',
		'shanai_tanka' => 'float',
		'kakesu' => 'float',
		'gaichu_tanka' => 'float',
		'gaichu_kingaku' => 'float',
		'shanai_kingaku' => 'float'
	];

	protected $fillable = [
		'kyakusaki',
		'hinmei',
		'zuban',
		'shorimei',
		'zaishitsu',
		'suryo',
		'makuatsu',
		'gaichusaki',
		'shanai_tanka',
		'kakesu',
		'gaichu_tanka',
		'gaichu_kingaku',
		'nouki',
		'haisou',
		'biko',
		'tanto',
		'regist_date',
		'shanai_kingaku',
		'bumon_code',
		'hacchu_no'
	];
}
