<?php

namespace Consultations;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
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
            'id_doctor',
            'id_consulting_room',
	        'name',
            'last_name',
            'genre',
            'birth_date',
            'state',
            'city',
            'postal_code',
            'colony',
            'street',
            'no_exterior',
            'no_interior',
            'phone',
            'mobile',
            'email',
            'occupation',
            'scholarship',
            'civil_status',
            'religion',
            'diabetes',
            'arterial_hypertension',
            'asthma',
            'cardiopathy',
            'nephropathy',
            'hepatopathy',
            'pneumopathy',
            'cancer',
            'mental_diseases',
            'allergic_diseases',
            'endocrine_diseases',
            'others_family_background',
            'diseases',
            'previous_surgery',
            'hospitalizations',
            'traumas',
            'allergies',
            'transfusions',
            'smoking',
            'alcoholism',
            'addictions',
            'immunizations',
            'others_personal_history',
            'menarca',
            'menstrual_rhythm',
            'g',
            'p',
            'a',
            'c',
            'fum',
            'menopause',
            'cardiovascular_system',
            'digestive_system',
            'respiratory_system',
            'genitourinary_system',
            'lymphatic_system',
            'endocrine_system',
            'osteomyoarticular_system',
            'nervous_system',
            'integumentary_system',
	    ];
}
