<?php

namespace Consultations;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class ConsultingRoom extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
    		'deleted_at'
    	];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'title',
            'address',
            'lat',
            'lng',
            'logo',
            'monday_init_1',
            'monday_finish_1',
            'monday_init_2',
            'monday_finish_2',
            'tuesday_init_1',
            'tuesday_finish_1',
            'tuesday_init_2',
            'tuesday_finish_2',
            'wednesday_init_1',
            'wednesday_finish_1',
            'wednesday_init_2',
            'wednesday_finish_2',
            'thursday_init_1',
            'thursday_finish_1',
            'thursday_init_2',
            'thursday_finish_2',
            'friday_init_1',
            'friday_finish_1',
            'friday_init_2',
            'friday_finish_2',
            'saturday_init_1',
            'saturday_finish_1',
            'saturday_init_2',
            'saturday_finish_2',
            'sunday_init_1',
            'sunday_finish_1',
            'sunday_init_2',
            'sunday_finish_2'
	    ];
}
