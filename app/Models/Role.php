<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $label
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	public $timestamps = false;

	protected $fillable = [
		'label'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'id_role');
	}

	public function tableRole(): View
    {
        $roles = DB::table('roles')->get();
 
        return view('roles.tableRole', ['roles' => $roles]);
    }
}
