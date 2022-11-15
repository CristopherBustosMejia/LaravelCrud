<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pilot
 *
 * @property $id
 * @property $Name
 * @property $Team
 * @property $Number
 * @property $Teammate
 * @property $TD
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pilot extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Team' => 'required',
		'Number' => 'required',
		'Teammate' => 'required',
		'TD' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Team','Number','Teammate','TD'];



}
