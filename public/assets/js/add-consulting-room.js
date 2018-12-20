$(document).ready(function (){
    completeDob();
});

/* Validator */
$('#rootwizard').bootstrapWizard({
    'tabClass': 'nav nav-pills',
    'onNext': function(tab, navigation, index) {
        var $validator = $('#commentForm').data('formValidation').validate();
        return $validator.isValid();
    },
    onTabClick: function(tab, navigation, index) {
        return false;
    }
});
$('#rootwizard .finish').click(function () {
    var $validator = $('#commentForm').data('formValidation').validate();
    $('#commentForm').bootstrapValidator('revalidateField', 'dob');
    if ($validator.isValid()) {
        document.getElementById("commentForm").submit();
    }
});

/* Validator */
$("#commentForm").formValidation({
    fields: {
        title: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Título'
                }
            }
        },
        address: {
            validators: {
                notEmpty: {
                    message: 'Se requiere la Dirección'
                }
            }
        },
        logo: {
            validators: {
                file: {
                    extension: 'jpeg,jpg,png',
                    type: 'image/jpeg,image/png',
                    maxSize: 2097152, // 2048 * 1024
                    message: 'El archivo seleccionado no es válido'
                }
            }
        },

        monday_init_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var monday_finish_1 = $('#monday_finish_1').val();
                        if(monday_finish_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(monday_finish_1 != '' && value != '' && monday_finish_1 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        monday_finish_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var monday_init_1 = $('#monday_init_1').val();
                        var monday_init_2 = $('#monday_init_2').val();

                        if(monday_init_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(monday_init_1 != '' && value != '' && monday_init_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else if(monday_init_2 != '' && value != '' && monday_init_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De siguiente'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        monday_init_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var monday_finish_1 = $('#monday_finish_1').val();
                        var monday_finish_2 = $('#monday_finish_2').val();

                        if(monday_finish_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(monday_finish_1 != '' && value != '' && monday_finish_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser menor o igual al campo A anterior'
                            }
                        }else if(monday_finish_2 != '' && value != '' && monday_finish_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        monday_finish_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var monday_init_2 = $('#monday_init_2').val();
                        if(monday_init_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(monday_init_2 != '' && value != '' && monday_init_2 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        
        tuesday_init_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var tuesday_finish_1 = $('#tuesday_finish_1').val();
                        if(tuesday_finish_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(tuesday_finish_1 != '' && value != '' && tuesday_finish_1 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        tuesday_finish_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var tuesday_init_1 = $('#tuesday_init_1').val();
                        var tuesday_init_2 = $('#tuesday_init_2').val();

                        if(tuesday_init_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(tuesday_init_1 != '' && value != '' && tuesday_init_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else if(tuesday_init_2 != '' && value != '' && tuesday_init_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De siguiente'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        tuesday_init_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var tuesday_finish_1 = $('#tuesday_finish_1').val();
                        var tuesday_finish_2 = $('#tuesday_finish_2').val();

                        if(tuesday_finish_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(tuesday_finish_1 != '' && value != '' && tuesday_finish_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser menor o igual al campo A anterior'
                            }
                        }else if(tuesday_finish_2 != '' && value != '' && tuesday_finish_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        tuesday_finish_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var tuesday_init_2 = $('#tuesday_init_2').val();
                        if(tuesday_init_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(tuesday_init_2 != '' && value != '' && tuesday_init_2 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        
        wednesday_init_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var wednesday_finish_1 = $('#wednesday_finish_1').val();
                        if(wednesday_finish_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(wednesday_finish_1 != '' && value != '' && wednesday_finish_1 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        wednesday_finish_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var wednesday_init_1 = $('#wednesday_init_1').val();
                        var wednesday_init_2 = $('#wednesday_init_2').val();

                        if(wednesday_init_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(wednesday_init_1 != '' && value != '' && wednesday_init_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else if(wednesday_init_2 != '' && value != '' && wednesday_init_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De siguiente'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        wednesday_init_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var wednesday_finish_1 = $('#wednesday_finish_1').val();
                        var wednesday_finish_2 = $('#wednesday_finish_2').val();

                        if(wednesday_finish_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(wednesday_finish_1 != '' && value != '' && wednesday_finish_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser menor o igual al campo A anterior'
                            }
                        }else if(wednesday_finish_2 != '' && value != '' && wednesday_finish_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        wednesday_finish_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var wednesday_init_2 = $('#wednesday_init_2').val();
                        if(wednesday_init_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(wednesday_init_2 != '' && value != '' && wednesday_init_2 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        
        thursday_init_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var thursday_finish_1 = $('#thursday_finish_1').val();
                        if(thursday_finish_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(thursday_finish_1 != '' && value != '' && thursday_finish_1 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        thursday_finish_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var thursday_init_1 = $('#thursday_init_1').val();
                        var thursday_init_2 = $('#thursday_init_2').val();

                        if(thursday_init_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(thursday_init_1 != '' && value != '' && thursday_init_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else if(thursday_init_2 != '' && value != '' && thursday_init_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De siguiente'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        thursday_init_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var thursday_finish_1 = $('#thursday_finish_1').val();
                        var thursday_finish_2 = $('#thursday_finish_2').val();

                        if(thursday_finish_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(thursday_finish_1 != '' && value != '' && thursday_finish_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser menor o igual al campo A anterior'
                            }
                        }else if(thursday_finish_2 != '' && value != '' && thursday_finish_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        thursday_finish_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var thursday_init_2 = $('#thursday_init_2').val();
                        if(thursday_init_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(thursday_init_2 != '' && value != '' && thursday_init_2 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        
        friday_init_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var friday_finish_1 = $('#friday_finish_1').val();
                        if(friday_finish_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(friday_finish_1 != '' && value != '' && friday_finish_1 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        friday_finish_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var friday_init_1 = $('#friday_init_1').val();
                        var friday_init_2 = $('#friday_init_2').val();

                        if(friday_init_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(friday_init_1 != '' && value != '' && friday_init_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else if(friday_init_2 != '' && value != '' && friday_init_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De siguiente'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        friday_init_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var friday_finish_1 = $('#friday_finish_1').val();
                        var friday_finish_2 = $('#friday_finish_2').val();

                        if(friday_finish_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(friday_finish_1 != '' && value != '' && friday_finish_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser menor o igual al campo A anterior'
                            }
                        }else if(friday_finish_2 != '' && value != '' && friday_finish_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        friday_finish_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var friday_init_2 = $('#friday_init_2').val();
                        if(friday_init_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(friday_init_2 != '' && value != '' && friday_init_2 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        
        saturday_init_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var saturday_finish_1 = $('#saturday_finish_1').val();
                        if(saturday_finish_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(saturday_finish_1 != '' && value != '' && saturday_finish_1 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        saturday_finish_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var saturday_init_1 = $('#saturday_init_1').val();
                        var saturday_init_2 = $('#saturday_init_2').val();

                        if(saturday_init_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(saturday_init_1 != '' && value != '' && saturday_init_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else if(saturday_init_2 != '' && value != '' && saturday_init_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De siguiente'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        saturday_init_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var saturday_finish_1 = $('#saturday_finish_1').val();
                        var saturday_finish_2 = $('#saturday_finish_2').val();

                        if(saturday_finish_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(saturday_finish_1 != '' && value != '' && saturday_finish_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser menor o igual al campo A anterior'
                            }
                        }else if(saturday_finish_2 != '' && value != '' && saturday_finish_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        saturday_finish_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var saturday_init_2 = $('#saturday_init_2').val();
                        if(saturday_init_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(saturday_init_2 != '' && value != '' && saturday_init_2 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        
        sunday_init_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var sunday_finish_1 = $('#sunday_finish_1').val();
                        if(sunday_finish_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(sunday_finish_1 != '' && value != '' && sunday_finish_1 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        sunday_finish_1: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var sunday_init_1 = $('#sunday_init_1').val();
                        var sunday_init_2 = $('#sunday_init_2').val();

                        if(sunday_init_1 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(sunday_init_1 != '' && value != '' && sunday_init_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else if(sunday_init_2 != '' && value != '' && sunday_init_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De siguiente'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        sunday_init_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var sunday_finish_1 = $('#sunday_finish_1').val();
                        var sunday_finish_2 = $('#sunday_finish_2').val();

                        if(sunday_finish_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo De es obligatorio cuando A esta presente'
                            }
                        }else if(sunday_finish_1 != '' && value != '' && sunday_finish_1 >= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser menor o igual al campo A anterior'
                            }
                        }else if(sunday_finish_2 != '' && value != '' && sunday_finish_2 <= value){
                            return {
                                valid: false,
                                message: 'El campo De no puede ser mayor o igual al campo A'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        sunday_finish_2: {
            validators: {
                callback: {
                    callback: function(value, validator, $field) {
                        var sunday_init_2 = $('#sunday_init_2').val();
                        if(sunday_init_2 != '' && value == ''){
                            return {
                                valid: false,
                                message: 'El campo A es obligatorio cuando De esta presente'
                            }
                        }else if(sunday_init_2 != '' && value != '' && sunday_init_2 >= value){
                            return {
                                valid: false,
                                message: 'El campo A no puede ser menor o igual al campo De'
                            }
                        }else{
                            return true;
                        }
                    }
                }
            }
        },
        dob: {
            excluded: false,    // Don't ignore me
            validators: {
                callback: {
                    message: 'Al menos una columna debe estar llena',
                    callback: function (value, validator, $field) {
                        if($('#tab2').attr('class') == 'tab-pane active' && $('[name="dob"]').val() == ''){
                            $('#monday_init_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#tuesday_init_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#wednesday_init_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#thursday_init_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#friday_init_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#saturday_init_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#sunday_init_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#monday_finish_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#tuesday_finish_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#wednesday_finish_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#thursday_finish_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#friday_finish_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#saturday_finish_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#sunday_finish_1').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#monday_init_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#tuesday_init_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#wednesday_init_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#thursday_init_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#friday_init_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#saturday_init_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#sunday_init_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#monday_finish_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#tuesday_finish_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#wednesday_finish_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#thursday_finish_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#friday_finish_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#saturday_finish_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            $('#sunday_finish_2').closest('.form-group').removeClass('has-success').addClass('has-error').find('.help-block').css('display','none');
                            return false;
                        }else{
                            $('#monday_init_1').closest('.form-group').removeClass('has-error');
                            $('#tuesday_init_1').closest('.form-group').removeClass('has-error');
                            $('#wednesday_init_1').closest('.form-group').removeClass('has-error');
                            $('#thursday_init_1').closest('.form-group').removeClass('has-error');
                            $('#friday_init_1').closest('.form-group').removeClass('has-error');
                            $('#saturday_init_1').closest('.form-group').removeClass('has-error');
                            $('#sunday_init_1').closest('.form-group').removeClass('has-error');
                            $('#monday_finish_1').closest('.form-group').removeClass('has-error');
                            $('#tuesday_finish_1').closest('.form-group').removeClass('has-error');
                            $('#wednesday_finish_1').closest('.form-group').removeClass('has-error');
                            $('#thursday_finish_1').closest('.form-group').removeClass('has-error');
                            $('#friday_finish_1').closest('.form-group').removeClass('has-error');
                            $('#saturday_finish_1').closest('.form-group').removeClass('has-error');
                            $('#sunday_finish_1').closest('.form-group').removeClass('has-error');
                            $('#monday_init_2').closest('.form-group').removeClass('has-error');
                            $('#tuesday_init_2').closest('.form-group').removeClass('has-error');
                            $('#wednesday_init_2').closest('.form-group').removeClass('has-error');
                            $('#thursday_init_2').closest('.form-group').removeClass('has-error');
                            $('#friday_init_2').closest('.form-group').removeClass('has-error');
                            $('#saturday_init_2').closest('.form-group').removeClass('has-error');
                            $('#sunday_init_2').closest('.form-group').removeClass('has-error');
                            $('#monday_finish_2').closest('.form-group').removeClass('has-error');
                            $('#tuesday_finish_2').closest('.form-group').removeClass('has-error');
                            $('#wednesday_finish_2').closest('.form-group').removeClass('has-error');
                            $('#thursday_finish_2').closest('.form-group').removeClass('has-error');
                            $('#friday_finish_2').closest('.form-group').removeClass('has-error');
                            $('#saturday_finish_2').closest('.form-group').removeClass('has-error');
                            $('#sunday_finish_2').closest('.form-group').removeClass('has-error');
                            return true;
                        }
                    }
                }
            }
        }
    }
});

/* TimePicker */
$('.timepicker').timepicker({
    timeFormat: 'HH:mm',
    interval: 30,
    dynamic: false,
    dropdown: true,
    scrollbar: true,
    change: function(time) {
        completeDob();

        // Revalidate it
        $('#commentForm').formValidation('revalidateField', 'dob');

        // the input field
        var element = $(this);

        if(element.attr("name") == 'monday_init_1'){
            $('#commentForm').formValidation('revalidateField', 'monday_init_1');
            $('#commentForm').formValidation('revalidateField', 'monday_finish_1');
        }
        if(element.attr("name") == 'monday_finish_1'){
            $('#commentForm').formValidation('revalidateField', 'monday_init_1');
            $('#commentForm').formValidation('revalidateField', 'monday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'monday_init_2');
        }
        if(element.attr("name") == 'monday_init_2'){
            $('#commentForm').formValidation('revalidateField', 'monday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'monday_init_2');
            $('#commentForm').formValidation('revalidateField', 'monday_finish_2');
        }
        if(element.attr("name") == 'monday_finish_2'){
            $('#commentForm').formValidation('revalidateField', 'monday_init_2');
            $('#commentForm').formValidation('revalidateField', 'monday_finish_2');
        }

        if(element.attr("name") == 'tuesday_init_1'){
            $('#commentForm').formValidation('revalidateField', 'tuesday_init_1');
            $('#commentForm').formValidation('revalidateField', 'tuesday_finish_1');
        }
        if(element.attr("name") == 'tuesday_finish_1'){
            $('#commentForm').formValidation('revalidateField', 'tuesday_init_1');
            $('#commentForm').formValidation('revalidateField', 'tuesday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'tuesday_init_2');
        }
        if(element.attr("name") == 'tuesday_init_2'){
            $('#commentForm').formValidation('revalidateField', 'tuesday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'tuesday_init_2');
            $('#commentForm').formValidation('revalidateField', 'tuesday_finish_2');
        }
        if(element.attr("name") == 'tuesday_finish_2'){
            $('#commentForm').formValidation('revalidateField', 'tuesday_init_2');
            $('#commentForm').formValidation('revalidateField', 'tuesday_finish_2');
        }

        if(element.attr("name") == 'wednesday_init_1'){
            $('#commentForm').formValidation('revalidateField', 'wednesday_init_1');
            $('#commentForm').formValidation('revalidateField', 'wednesday_finish_1');
        }
        if(element.attr("name") == 'wednesday_finish_1'){
            $('#commentForm').formValidation('revalidateField', 'wednesday_init_1');
            $('#commentForm').formValidation('revalidateField', 'wednesday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'wednesday_init_2');
        }
        if(element.attr("name") == 'wednesday_init_2'){
            $('#commentForm').formValidation('revalidateField', 'wednesday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'wednesday_init_2');
            $('#commentForm').formValidation('revalidateField', 'wednesday_finish_2');
        }
        if(element.attr("name") == 'wednesday_finish_2'){
            $('#commentForm').formValidation('revalidateField', 'wednesday_init_2');
            $('#commentForm').formValidation('revalidateField', 'wednesday_finish_2');
        }

        if(element.attr("name") == 'thursday_init_1'){
            $('#commentForm').formValidation('revalidateField', 'thursday_init_1');
            $('#commentForm').formValidation('revalidateField', 'thursday_finish_1');
        }
        if(element.attr("name") == 'thursday_finish_1'){
            $('#commentForm').formValidation('revalidateField', 'thursday_init_1');
            $('#commentForm').formValidation('revalidateField', 'thursday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'thursday_init_2');
        }
        if(element.attr("name") == 'thursday_init_2'){
            $('#commentForm').formValidation('revalidateField', 'thursday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'thursday_init_2');
            $('#commentForm').formValidation('revalidateField', 'thursday_finish_2');
        }
        if(element.attr("name") == 'thursday_finish_2'){
            $('#commentForm').formValidation('revalidateField', 'thursday_init_2');
            $('#commentForm').formValidation('revalidateField', 'thursday_finish_2');
        }

        if(element.attr("name") == 'friday_init_1'){
            $('#commentForm').formValidation('revalidateField', 'friday_init_1');
            $('#commentForm').formValidation('revalidateField', 'friday_finish_1');
        }
        if(element.attr("name") == 'friday_finish_1'){
            $('#commentForm').formValidation('revalidateField', 'friday_init_1');
            $('#commentForm').formValidation('revalidateField', 'friday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'friday_init_2');
        }
        if(element.attr("name") == 'friday_init_2'){
            $('#commentForm').formValidation('revalidateField', 'friday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'friday_init_2');
            $('#commentForm').formValidation('revalidateField', 'friday_finish_2');
        }
        if(element.attr("name") == 'friday_finish_2'){
            $('#commentForm').formValidation('revalidateField', 'friday_init_2');
            $('#commentForm').formValidation('revalidateField', 'friday_finish_2');
        }

        if(element.attr("name") == 'saturday_init_1'){
            $('#commentForm').formValidation('revalidateField', 'saturday_init_1');
            $('#commentForm').formValidation('revalidateField', 'saturday_finish_1');
        }
        if(element.attr("name") == 'saturday_finish_1'){
            $('#commentForm').formValidation('revalidateField', 'saturday_init_1');
            $('#commentForm').formValidation('revalidateField', 'saturday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'saturday_init_2');
        }
        if(element.attr("name") == 'saturday_init_2'){
            $('#commentForm').formValidation('revalidateField', 'saturday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'saturday_init_2');
            $('#commentForm').formValidation('revalidateField', 'saturday_finish_2');
        }
        if(element.attr("name") == 'saturday_finish_2'){
            $('#commentForm').formValidation('revalidateField', 'saturday_init_2');
            $('#commentForm').formValidation('revalidateField', 'saturday_finish_2');
        }

        if(element.attr("name") == 'sunday_init_1'){
            $('#commentForm').formValidation('revalidateField', 'sunday_init_1');
            $('#commentForm').formValidation('revalidateField', 'sunday_finish_1');
        }
        if(element.attr("name") == 'sunday_finish_1'){
            $('#commentForm').formValidation('revalidateField', 'sunday_init_1');
            $('#commentForm').formValidation('revalidateField', 'sunday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'sunday_init_2');
        }
        if(element.attr("name") == 'sunday_init_2'){
            $('#commentForm').formValidation('revalidateField', 'sunday_finish_1');
            $('#commentForm').formValidation('revalidateField', 'sunday_init_2');
            $('#commentForm').formValidation('revalidateField', 'sunday_finish_2');
        }
        if(element.attr("name") == 'sunday_finish_2'){
            $('#commentForm').formValidation('revalidateField', 'sunday_init_2');
            $('#commentForm').formValidation('revalidateField', 'sunday_finish_2');
        }
    }
});

/* GoogleMaps */
function initAutocomplete() {
    if($('#lat').val() != '' && $('#lng').val() != ''){
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: parseFloat($('#lat').val()), lng: parseFloat($('#lng').val())},
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
    }else{
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 19.4336726, lng: -99.1454316},
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
    }

    // Create the search box and link it to the UI element.
    var input = document.getElementById('searchmap');
    var searchBox = new google.maps.places.SearchBox(input);
    //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    
    if($('#lat').val() != '' && $('#lng').val() != ''){
        markers.push(new google.maps.Marker({
                map: map,
                //draggable: true,
                position: {lat: parseFloat($('#lat').val()), lng: parseFloat($('#lng').val())}
            }));
    }
    // [START region_getplaces]
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                //draggable: true,
                position: place.geometry.location
            }));

            $('#lat').val(place.geometry.location.lat);
            $('#lng').val(place.geometry.location.lng);
            $('#address').val(place.formatted_address);
            $('#commentForm').formValidation('revalidateField', 'address');

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
        map.setZoom(17);
    });
    // [END region_getplaces]
}

function completeDob(){
    var monday_init_1 = $('#commentForm').find('[name="monday_init_1"]').val(),
        monday_finish_1 = $('#commentForm').find('[name="monday_finish_1"]').val(),
        monday_init_2 = $('#commentForm').find('[name="monday_init_2"]').val(),
        monday_finish_2 = $('#commentForm').find('[name="monday_finish_2"]').val(),

        tuesday_init_1 = $('#commentForm').find('[name="tuesday_init_1"]').val(),
        tuesday_finish_1 = $('#commentForm').find('[name="tuesday_finish_1"]').val(),
        tuesday_init_2 = $('#commentForm').find('[name="tuesday_init_2"]').val(),
        tuesday_finish_2 = $('#commentForm').find('[name="tuesday_finish_2"]').val(),

        wednesday_init_1 = $('#commentForm').find('[name="wednesday_init_1"]').val(),
        wednesday_finish_1 = $('#commentForm').find('[name="wednesday_finish_1"]').val(),
        wednesday_init_2 = $('#commentForm').find('[name="wednesday_init_2"]').val(),
        wednesday_finish_2 = $('#commentForm').find('[name="wednesday_finish_2"]').val(),

        thursday_init_1 = $('#commentForm').find('[name="thursday_init_1"]').val(),
        thursday_finish_1 = $('#commentForm').find('[name="thursday_finish_1"]').val(),
        thursday_init_2 = $('#commentForm').find('[name="thursday_init_2"]').val(),
        thursday_finish_2 = $('#commentForm').find('[name="thursday_finish_2"]').val(),

        friday_init_1 = $('#commentForm').find('[name="friday_init_1"]').val(),
        friday_finish_1 = $('#commentForm').find('[name="friday_finish_1"]').val(),
        friday_init_2 = $('#commentForm').find('[name="friday_init_2"]').val(),
        friday_finish_2 = $('#commentForm').find('[name="friday_finish_2"]').val(),

        saturday_init_1 = $('#commentForm').find('[name="saturday_init_1"]').val(),
        saturday_finish_1 = $('#commentForm').find('[name="saturday_finish_1"]').val(),
        saturday_init_2 = $('#commentForm').find('[name="saturday_init_2"]').val(),
        saturday_finish_2 = $('#commentForm').find('[name="saturday_finish_2"]').val(),

        sunday_init_1 = $('#commentForm').find('[name="sunday_init_1"]').val(),
        sunday_finish_1 = $('#commentForm').find('[name="sunday_finish_1"]').val(),
        sunday_init_2 = $('#commentForm').find('[name="sunday_init_2"]').val(),
        sunday_finish_2 = $('#commentForm').find('[name="sunday_finish_2"]').val();

    // Set the dob field value
    $('#commentForm').find('[name="dob"]').val(monday_init_1 == '' && monday_finish_1 == '' && monday_init_2 == '' && monday_finish_2 == '' && tuesday_init_1 == '' && tuesday_finish_1 == '' && tuesday_init_2 == '' && tuesday_finish_2 == '' && wednesday_init_1 == '' && wednesday_finish_1 == '' && wednesday_init_2 == '' && wednesday_finish_2 == '' && thursday_init_1 == '' && thursday_finish_1 == '' && thursday_init_2 == '' && thursday_finish_2 == '' && friday_init_1 == '' && friday_finish_1 == '' && friday_init_2 == '' && friday_finish_2 == '' && saturday_init_1 == '' && saturday_finish_1 == '' && saturday_init_2 == '' && saturday_finish_2 == '' && sunday_init_1 == '' && sunday_finish_1 == '' && sunday_init_2 == '' && sunday_finish_2 == '' ? '' : [monday_init_1, monday_finish_1, monday_init_2, monday_finish_2, tuesday_init_1, tuesday_finish_1, tuesday_init_2, tuesday_finish_2, wednesday_init_1, wednesday_finish_1, wednesday_init_2, wednesday_finish_2, thursday_init_1, thursday_finish_1, thursday_init_2, thursday_finish_2, friday_init_1, friday_finish_1, friday_init_2, friday_finish_2, saturday_init_1, saturday_finish_1, saturday_init_2, saturday_finish_2, sunday_init_1, sunday_finish_1, sunday_init_2, sunday_finish_2].join('.'));
}