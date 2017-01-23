/**
* Calc Age
**/
/* Calc Age when input contain value */
$(function() {
	jQuery.fn.exists = function(){return this.length>0;}

	if($("#birth_date").exists()){
		var date = $("#birth_date").val();
		if(date != ""){
			$( "#age" ).val(calc_age(date));
		}else{
			$( "#age" ).val("");
		}
	}
});
function calc_age(date) {
	var actual_date = new Date();
	var actual_day = actual_date.getDate();
	var actual_month = actual_date.getMonth() + 1;
	var actual_year = actual_date.getFullYear();
	date = date.replace("-", "/");
	date = date.replace("-", "/");
	birth_date = date.split("/");
	var birth_day = birth_date[0];
	var birth_month = birth_date[1];
	var birth_year = birth_date[2];
	//retiramos el primer cero de la izquierda
	if (birth_month.substr(0,1) == 0) {
		birth_month= birth_month.substring(1, 2);
	}
	//retiramos el primer cero de la izquierda
	if (birth_day.substr(0, 1) == 0) {
		birth_day = birth_day.substring(1, 2);
	}
	var age = actual_year - birth_year;

	//validamos si el mes de cumpleaños es menor al actual
	//o si el mes de cumpleaños es igual al actual
	//y el dia actual es menor al del nacimiento
	//De ser asi, se resta un año
	if ((actual_month < birth_month) || (actual_month == birth_month && actual_day < birth_day)) {
		age--;
	}
	return age;
};

/**
* Calc FPP
**/
/* Calc FPP when input contain value */
$(function() {
	jQuery.fn.exists = function(){return this.length>0;}

	if($("#fum").exists()){
		var date = $("#fum").val();
		if(date != ""){
			$( "#fpp" ).val(calc_fpp(date));
		}else{
			$( "#fpp" ).val("");
		}
	}
});

function calc_fpp(date) {
	date = date.replace("-", "/");
	date = date.replace("-", "/");
	var date_fum = date.split("/");
	var gestation_day = date_fum[0];
	var gestation_month = date_fum[1] - 1;
	var getstation_year = date_fum[2];

	var my_date = new Date(getstation_year, gestation_month, gestation_day);
	my_date.setDate(my_date.getDate() + 7);
	my_date.setMonth(my_date.getMonth() - 3);
	my_date.setYear(my_date.getFullYear() + 1);
	date_fpp = my_date.toLocaleDateString();

	return date_fpp;
};
