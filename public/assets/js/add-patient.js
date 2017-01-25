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
    if ($validator.isValid()) {
        document.getElementById("commentForm").submit();
    }
});

/* DatePicker */
$(function(){
    $( "#birth_date" ).datepicker({
        maxDate: "0",
        onSelect: function(date, inst) {
            $( "#age" ).val(calc_age(date));
            $('#commentForm').formValidation('revalidateField', 'birth_date');
        },
    });
    $( "#fum" ).datepicker({
        maxDate: "0",
        onSelect: function(date, inst) {
            $( "#fpp" ).val(calc_fpp(date));
        },
    });
});

/* Validator */
$("#commentForm").formValidation({
    fields: {
        id_doctor: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Doctor'
                }
            }
        },
        id_consulting_room: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Consultorio'
                }
            }
        },
        name: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Nombre(s) completo'
                }
            }
        },
        last_name: {
            validators: {
                notEmpty: {
                    message: 'Se requieren los Apellidos completos'
                }
            }
        },
        genre: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Género'
                }
            }
        },
        birth_date: {
            validators: {
                notEmpty: {
                    message: 'Se requiere la Fecha de Nacimiento'
                },
                date: {
                    format: 'DD/MM/YYYY',
                    message: 'La Fecha de Nacimiento no es válida'
                }
            }
        },
        state: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Estado'
                }
            }
        },
        city: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Ciudad'
                }
            }
        },
        postal_code: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Código Postal'
                },
                numeric: {
                    message: 'El valor no es numerico',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                },
                stringLength: {
                    message: 'Código Postal debe tener 5 dígitos',
                    max: 5,
                    min: 5
                }
            }
        },
        colony: {
            validators: {
                notEmpty: {
                    message: 'Se requiere la Colonia'
                }
            }
        },
        street: {
            validators: {
                notEmpty: {
                    message: 'Se requiere la Calle'
                }
            }
        },
        no_exterior: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Número Exterior'
                }
            }
        },
        phone: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Teléfono'
                }
            }
        },
        email: {
            validators: {
                notEmpty: {
                    message: 'Se requiere el Correo Electrónico'
                },
                emailAddress: {
                    message: 'Por favor ingresa un Correo Electrónico válido'
                }
            }
        },
        menarca: {
            validators: {
                callback: {
                    message: 'El campo Menarca es obligatorio cuando Ritmo Menstrual esta presente',
                    callback: function(value, validator, $field) {
                        var menstrual_rhythm = $('#menstrual_rhythm').val();
                        return (menstrual_rhythm == '') ? true : (value !== '');
                    }
                }
            }
        },
        menstrual_rhythm: {
            validators: {
                callback: {
                    message: 'El campo Ritmo Menstrual es obligatorio cuando Menarca esta presente',
                    callback: function(value, validator, $field) {
                        var menarca = $('#menarca').val();
                        return (menarca == '') ? true : (value !== '');
                    }
                }
            }
        },
        g: {
            validators: {
                integer: {
                    message: 'El valor no es un entero',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                }
            }
        },
        p: {
            validators: {
                integer: {
                    message: 'El valor no es un entero',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                }
            }
        },
        a: {
            validators: {
                integer: {
                    message: 'El valor no es un entero',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                }
            }
        },
        c: {
            validators: {
                integer: {
                    message: 'El valor no es un entero',
                    // The default separators
                    thousandsSeparator: '',
                    decimalSeparator: '.'
                }
            }
        }
    }
})
.on('change', '[name="menstrual_rhythm"]', function(e) {
    $('#commentForm').formValidation('revalidateField', 'menarca');
    $('#commentForm').formValidation('revalidateField', 'menstrual_rhythm');
})
.on('change', '[name="menarca"]', function(e) {
    $('#commentForm').formValidation('revalidateField', 'menarca');
    $('#commentForm').formValidation('revalidateField', 'menstrual_rhythm');
});