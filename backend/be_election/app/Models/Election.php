<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Election
 * 
 * @property int $id
 * @property Carbon $Date
 * @property string $Label
 * @property string $Description
 * @property string $Status
 * @property int $id_votes
 * 
 * @property Vote $vote
 *
 * @package App\Models
 */
class Election extends Model
{
	protected $table = 'election';
	public $timestamps = false;

	protected $casts = [
		'Date' => 'datetime',
	];

	protected $fillable = [
		'Date',
		'Label',
		'Description',
		'Status',
	];

	// public function vote()
	// {
	// 	return $this->belongsTo(Vote::class, 'id_votes');
	// }
}
