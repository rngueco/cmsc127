function new_intake(){
	var xhttp = new XMLHttpRequest();
	var fname = document.getElementsByName('fname')[0].value;
	var lname = document.getElementsByName('lname')[0].value;
	var minit = document.getElementsByName('minitial')[0].value;
	
	var age = document.getElementsByName('age')[0].value;

	var birthplace = document.getElementsByName('birthplace')[0].value;
	var dateOfBirth = document.getElementsByName('birthDate')[0].value;
	
	var radios = document.getElementsByName('gender');
	
	var sex;
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			sex = radios[i].value;
		break;
		}
	}
	
	var presentAddress = document.getElementsByName('presentAddress')[0].value;
	var provAddress = document.getElementsByName('provAddress')[0].value;
	
	var religion =  document.getElementsByName('religion')[0].value;
	var occupation = document.getElementsByName('occupation')[0].value;
	var monthlyIncome = document.getElementsByName('monthlyIncome')[0].value;
	
	var contactNumber = document.getElementsByName('contactNumber')[0].value;
	var educBackground = document.getElementsByName('educBackground')[0].value;
	
	var cLip = document.getElementsByName('cLip')[0].value;
	var cPalate = document.getElementsByName('cPalate')[0].value;
	
	var probPresent = document.getElementsByName('probPresent')[0].value;
	var histBack = document.getElementsByName('histBack')[0].value;
	
	var numOccupants = document.getElementsByName('numOccupants')[0].value;
	var elecExp = document.getElementsByName('elecExp')[0].value;
	
	var numFloors = document.getElementsByName('numFloors')[0].value;
	var fuelExp = document.getElementsByName('fuelExp')[0].value;
	var numRooms = document.getElementsByName('numRooms')[0].value;
	var waterExp = document.getElementsByName('waterExp')[0].value;
	
	var houseStat = document.getElementsByName('houseStat')[0].value;
	var educExp = document.getElementsByName('educExp')[0].value;
	var houseOwn = document.getElementsByName('houseOwn')[0].value;
	var medExp = document.getElementsByName('medExp')[0].value;
	
	var toiletType = document.getElementsByName('toiletType')[0].value;
	var foodExp = document.getElementsByName('foodExp')[0].value;
	var waterSource = document.getElementsByName('waterSource')[0].value;
	var rentExp = document.getElementsByName('rentExp')[0].value;
	
	var transExp = document.getElementsByName('transExp')[0].value;
	var pFullName = document.getElementsByName('pFullName')[0].value;
	var clothExp = document.getElementsByName('clothExp')[0].value;
	var pOccupation = document.getElementsByName('pOccupation')[0].value;
	var cLoadExp = document.getElementsByName('cLoadExp')[0].value;
	var rToPatient = document.getElementsByName('rToPatient')[0].value;
	var otherExp = document.getElementsByName('otherExp')[0].value;
	var pMonthInc = document.getElementsByName('pMonthInc')[0].value;
	
	var needsProvided = ""; 
	var inputElements = document.getElementsByName('needsProvided');
	for(var i=0; inputElements[i]; ++i){
		if(inputElements[i].checked){
			needsProvided += (inputElements[i].value) + ",";
		}
	}
	
	var agencyName = document.getElementsByName('agencyName')[0].value;
	
	var ngo = document.getElementsByName('ngo')[0].value;
	var go = document.getElementsByName('go')[0].value;
	var servicesProvided = document.getElementsByName('servicesProvided')[0].value;
	
	radios = document.getElementsByName('incomeEval');
	var incomeEval;
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			incomeEval = radios[i].value;
		break;
		}
	}
	
	var medDate = document.getElementsByName('medDate')[0].value;
	var medRemarks = document.getElementsByName('medRemarks')[0].value;	
	var cpDate =  document.getElementsByName('cpDate')[0].value;
	var cpRemarks = document.getElementsByName('cpRemarks')[0].value;
	var admDate = document.getElementsByName('admDate')[0].value;	
	var admRemarks = document.getElementsByName('admRemarks')[0].value;
	var surgeDate = document.getElementsByName('surgeDate')[0].value;
	var surgeRemarks = document.getElementsByName('surgeRemarks')[0].value;
	var dsDate = document.getElementsByName('dsDate')[0].value;	
	var dsRemarks = document.getElementsByName('dsRemarks')[0].value;
	var fDate = document.getElementsByName('fDate')[0].value;	
	var fRemarks = document.getElementsByName('fRemarks')[0].value;
	var othDate = document.getElementsByName('othDate')[0].value;
	var othRemarks = document.getElementsByName('othRemarks')[0].value;
	
	var wARec = document.getElementsByName('wARec')[0].value;
	
	xhttp.open("POST","new_intakerec.php", true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send("fname=" + fname + "&lname=" + lname + "&minitial=" + minit + "&age=" + age + "&presentAddress=" + presentAddress + 
				"&gender=" + sex + "&birthDate=" + dateOfBirth + "&birthplace=" + birthplace + "&provAddress=" + provAddress +
				"&religion=" + religion + "&occupation=" + occupation + "&monthlyIncome=" + monthlyIncome + "&contactNumber=" + contactNumber +
				"&educBackground=" + educBackground + "&cLip=" + cLip + "&cPalate=" + cPalate + "&probPresent=" + probPresent +
				"&histBack=" + histBack + "&numOccupants=" + numOccupants + "&elecExp=" + elecExp + "&numFloors=" + numFloors +
				"&fuelExp=" + fuelExp + "&numRooms=" + numRooms + "&waterExp=" + waterExp + "&houseStat=" + houseStat +
				"&educExp=" + educExp + "&houseOwn=" + houseOwn + "&medExp=" + medExp + "&toiletType=" + toiletType + "&foodExp=" + foodExp + 
				"&waterSource=" + waterSource + "&rentExp=" + rentExp + "&transExp=" + transExp + "&pFullName=" + pFullName + "&clothExp=" + clothExp +
				"&pOccupation=" + pOccupation + "&cLoadExp=" + cLoadExp + "&rToPatient=" + rToPatient + "&otherExp=" + otherExp + "&pMonthInc=" + pMonthInc +
				"&needsProvided=" + needsProvided + "&agencyName=" + agencyName + "&ngo=" + ngo + "&go=" + go + "&servicesProvided=" + servicesProvided +
				"&incomeEval=" + incomeEval + "&medDate=" + medDate + "&medRemarks=" + medRemarks + "&cpDate=" + cpDate + "&cpRemarks=" + cpRemarks +
				"&admDate=" + admDate + "&admRemarks=" + admRemarks + "&surgeDate=" + surgeDate + "&surgeRemarks=" + surgeRemarks + 
				"&dsDate=" + dsDate + "&dsRemarks=" + dsRemarks + "&fDate=" + fDate + "&fRemarks=" + fRemarks + "&othDate=" + othDate + 
				"&othRemarks=" + othRemarks + "&wARec=" + wARec);
	var cont = document.getElementById("toRep");
	cont.innerHTML = "<h1>Successful</h1>";
	setTimeout(back, 3000);	
}