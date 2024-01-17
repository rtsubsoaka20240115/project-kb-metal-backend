<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm001System
 * 
 * @property int $tm001_TantoCode
 * @property bool $tm001_JyochuFlg
 * @property int $tm001_LogKeepMonth
 * @property string $tm001_LogFolder
 * @property int $tm001_PassingInterval
 * @property int $tm001_CloudUpInterval
 * @property int $tm001_ErrorCheckInterval
 * @property int $tm001_InfoReloadInterval
 * @property string $tm001_ServerCommonFolder
 * @property string|null $tm001_ICTagNoShiji
 * @property string|null $tm001_ICTagNoDaisya
 * @property string|null $tm001_ICTagNoPipe
 * @property int $tm001_ErrorTimeout_Ondo
 * @property int $tm001_ErrorTimeout_Shitsudo
 * @property int $tm001_ErrorTimeout_Denatsu
 * @property int $tm001_ErrorTimeout_Denryu
 * @property string|null $tm001_LinkServerSetting
 * @property string|null $tm001_ExcelUriageSeisansei
 * @property string|null $tm001_ErrorHoukokuSheetFilePath
 * @property string|null $tm001_NinjiSeisanseiSheetFilePath
 * @property int|null $tm001_OndoLogPausePassing
 * @property int|null $tm001_OndoLogPauseInterval
 * @property int|null $tm001_NendoKirikaeMonth
 * @property int|null $tm001_NohinCheckInterval
 * @property int|null $tm001_NohinLastHour
 * @property int $tm001_OndoLogStartHour
 * @property string|null $tm001_ShiyoKakuninOutPath
 * @property int $tm001_ErrorTimeout_Atsuryoku
 * @property int $tm001_ErrorTimeout_Teikou
 * @property int|null $tm001_DelayGraph_Start
 * @property string|null $tm001_ShijiFolderPath
 *
 * @package App\Models
 */
class Tm001System extends Model
{
	protected $table = 'tm001_System';
	protected $primaryKey = 'tm001_TantoCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm001_TantoCode' => 'int',
		'tm001_JyochuFlg' => 'bool',
		'tm001_LogKeepMonth' => 'int',
		'tm001_PassingInterval' => 'int',
		'tm001_CloudUpInterval' => 'int',
		'tm001_ErrorCheckInterval' => 'int',
		'tm001_InfoReloadInterval' => 'int',
		'tm001_ErrorTimeout_Ondo' => 'int',
		'tm001_ErrorTimeout_Shitsudo' => 'int',
		'tm001_ErrorTimeout_Denatsu' => 'int',
		'tm001_ErrorTimeout_Denryu' => 'int',
		'tm001_OndoLogPausePassing' => 'int',
		'tm001_OndoLogPauseInterval' => 'int',
		'tm001_NendoKirikaeMonth' => 'int',
		'tm001_NohinCheckInterval' => 'int',
		'tm001_NohinLastHour' => 'int',
		'tm001_OndoLogStartHour' => 'int',
		'tm001_ErrorTimeout_Atsuryoku' => 'int',
		'tm001_ErrorTimeout_Teikou' => 'int',
		'tm001_DelayGraph_Start' => 'int'
	];

	protected $fillable = [
		'tm001_JyochuFlg',
		'tm001_LogKeepMonth',
		'tm001_LogFolder',
		'tm001_PassingInterval',
		'tm001_CloudUpInterval',
		'tm001_ErrorCheckInterval',
		'tm001_InfoReloadInterval',
		'tm001_ServerCommonFolder',
		'tm001_ICTagNoShiji',
		'tm001_ICTagNoDaisya',
		'tm001_ICTagNoPipe',
		'tm001_ErrorTimeout_Ondo',
		'tm001_ErrorTimeout_Shitsudo',
		'tm001_ErrorTimeout_Denatsu',
		'tm001_ErrorTimeout_Denryu',
		'tm001_LinkServerSetting',
		'tm001_ExcelUriageSeisansei',
		'tm001_ErrorHoukokuSheetFilePath',
		'tm001_NinjiSeisanseiSheetFilePath',
		'tm001_OndoLogPausePassing',
		'tm001_OndoLogPauseInterval',
		'tm001_NendoKirikaeMonth',
		'tm001_NohinCheckInterval',
		'tm001_NohinLastHour',
		'tm001_OndoLogStartHour',
		'tm001_ShiyoKakuninOutPath',
		'tm001_ErrorTimeout_Atsuryoku',
		'tm001_ErrorTimeout_Teikou',
		'tm001_DelayGraph_Start',
		'tm001_ShijiFolderPath'
	];
}
