<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 * 
 * @property int $id
 * @property string|null $Label
 * 
 * @property Collection|Participant[] $participants
 *
 * @package App\Models
 */
class Region extends Model
{
	protected $table = 'region';
	public $timestamps = false;

	protected $fillable = [
		'nom',
		'description'
	];

	public function participants()
	{
		return $this->hasMany(Participant::class, 'id_region');
	}
}
