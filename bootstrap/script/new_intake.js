function new_intake(){
	var xhttp = new XMLHttpRequest();
	
	alert("in");
	
	//Identifying Information
	
	var fname = document.getElementsByName('fname')[0].value;
	var lname = document.getElementsByName('lname')[0].value;
	var minit = document.getElementsByName('minitial')[0].value;
	
	var age = document.getElementsByName('age')[0].value;
	var weight = document.getElementsByName('weight')[0].value;
	var cs = document.getElementsByName('cs')[0].value;

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
	var presZIP = document.getElementsByName('presZIP')[0].value;
	var provZIP = document.getElementsByName('provZIP')[0].value;
	
	var religion =  document.getElementsByName('religion')[0].value;
	var occupation = document.getElementsByName('occupation')[0].value;
	var monthlyIncome = document.getElementsByName('monthlyIncome')[0].value;
	
	var contactNumber = document.getElementsByName('contactNumber')[0].value;
	var educBackground = document.getElementsByName('educBackground')[0].value;
	
	alert("Info");
	
	//Diagnosis
	
	var radios = document.getElementsByName('surgerynum');
	var surgerynum;
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			surgerynum = radios[i].value;
			break;
		}
	}
	
	var cLip = document.getElementsByName('cLip')[0].value;
	var cPalate = document.getElementsByName('cPalate')[0].value;
	var diagnosis = document.getElementsByName('diagnosis')[0].value;
	
	var abnorm = ""; 
	var inputElements = document.getElementsByName('abrnorm');
	for(var i=0; inputElements[i]; ++i){
		if(inputElements[i].checked){
			abnorm += (inputElements[i].value) + ",";
		}
	}
	
	var allergy = document.getElementsByName('allergy');
	var medallergy = document.getElementsByName('medallergy');
	var otherallergy = document.getElementsByName('otherallergy');
	var healthprob = document.getElementsByName('healthprob');
	
	alert("Diagnosis");
	
	//Family History
	
	var pregnancy = document.getElementsByName('pregnancy')[0].value;
	
	var radios = document.getElementsByName('pcomplications');
	var pcomplications;
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			pcomplications = radios[i].value;
			break;
		}
	}
	
	var radios = document.getElementsByName('bcomplications');
	var bcomplications;
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			bcomplications = radios[i].value;
			break;
		}
	}
	
	var radios = document.getElementsByName('smoke');
	var smoke;
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			smoke = radios[i].value;
			break;
		}
	}
	
	var radios = document.getElementsByName('alc');
	var alc;
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			alc = radios[i].value;
			break;
		}
	}
	
	var radios = document.getElementsByName('immed');
	var immed;
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			immed = radios[i].value;
			break;
		}
	}
	
	var radios = document.getElementsByName('distant');
	var distant;
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			distant = radios[i].value;
			break;
		}
	}
	
	alert("Famliy History");
	
	//Economic Status
	
	var houseStat = document.getElementsByName('houseStat')[0].value;
	var houseOwn = document.getElementsByName('houseOwn')[0].value;
	var toiletType = document.getElementsByName('toiletType')[0].value;
	var waterSource = document.getElementsByName('waterSource')[0].value;
	var numOccupants = document.getElementsByName('numOccupants')[0].value;
	var numFloors = document.getElementsByName('numFloors')[0].value;
	var numRooms = document.getElementsByName('numRooms')[0].value;
	
	var elecExp = document.getElementsByName('elecExp')[0].value;
	var fuelExp = document.getElementsByName('fuelExp')[0].value;
	var waterExp = document.getElementsByName('waterExp')[0].value;
	var educExp = document.getElementsByName('educExp')[0].value;
	var medExp = document.getElementsByName('medExp')[0].value;
	var foodExp = document.getElementsByName('foodExp')[0].value;
	var rentExp = document.getElementsByName('rentExp')[0].value;
	var transExp = document.getElementsByName('transExp')[0].value;
	var clothExp = document.getElementsByName('clothExp')[0].value;
	var cLoadExp = document.getElementsByName('cLoadExp')[0].value;
	var otherExp = document.getElementsByName('otherExp')[0].value;
	
	var pFullName = document.getElementsByName('pFullName')[0].value;
	var pOccupation = document.getElementsByName('pOccupation')[0].value;
	var rToPatient = document.getElementsByName('rToPatient')[0].value;
	var pMonthInc = document.getElementsByName('pMonthInc')[0].value;
	var agencyName = document.getElementsByName('agencyName')[0].value;
	var ngo = document.getElementsByName('ngo')[0].value;
	var go = document.getElementsByName('go')[0].value;
	
	var needsProvided = ""; 
	var inputElements = document.getElementsByName('needsProvided');
	for(var i=0; inputElements[i]; ++i){
		if(inputElements[i].checked){
			needsProvided += (inputElements[i].value) + ",";
		}
	}
	
	var servicesProvided = document.getElementsByName('servicesProvided')[0].value;
	
	radios = document.getElementsByName('incomeEval');
	var incomeEval;
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
			incomeEval = radios[i].value;
		break;
		}
	}
	
	alert("Economic Status");
	
	//Plan of Action
	
	var medDate = document.getElementsByName('medDate')[0].value;
	var cpDate =  document.getElementsByName('cpDate')[0].value;
	var admDate = document.getElementsByName('admDate')[0].value;
	var surgeDate = document.getElementsByName('surgeDate')[0].value;
	var dsDate = document.getElementsByName('dsDate')[0].value;
	var fDate = document.getElementsByName('fDate')[0].value;
	
	var medRemarks = document.getElementsByName('medRemarks')[0].value;	
	var cpRemarks = document.getElementsByName('cpRemarks')[0].value;
	var admRemarks = document.getElementsByName('admRemarks')[0].value;
	var surgeRemarks = document.getElementsByName('surgeRemarks')[0].value;
	var dsRemarks = document.getElementsByName('dsRemarks')[0].value;
	var fRemarks = document.getElementsByName('fRemarks')[0].value;
	
	alert("Plan of Action");
	
	//Referral Status
	
	
	
	//Assessment and Recommendations
	
	var wARec = document.getElementsByName('wARec')[0].value;
	
	xhttp.open("POST","new_intakerec.php", true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send("fname=" + fname + "&lname=" + lname + "&minitial=" + minit + "&age=" + age + "&weight" + weight + "&cs=" + cs + "&birthDate=" + dateOfBirth + "&birthplace=" + birthplace + "&gender=" + sex + "&presentAddress=" + presentAddress +  "&provAddress=" + provAddress + "&presZIP" + presZIP + "&provZIP" +provZIP + "&religion=" + religion + "&occupation=" + occupation + "&monthlyIncome=" + monthlyIncome + "&contactNumber=" + contactNumber +"&educBackground=" + educBackground + "&surgerynum" + surgerynum + "&cLip=" + cLip + "&cPalate=" + cPalate + "&diagnosis" + diagnosis + "&abnorm" + abnorm + "&allergy" +allergy + "&medallergy" + medallergy + "&otherallergy" + otherallergy + "&healthprob" + healthprob + "&pregnancy" + pregnancy + "&pcomplications" + pcomplications + "&bcomplications" + bcomplications + "&smoke" + smoke + "&alc" + alc + "&immed" + immed + "&distant" + distant + "&houseStat=" + houseStat + "&houseOwn=" + houseOwn + "&toiletType=" + toiletType + "&waterSource=" + waterSource + "&numOccupants=" + numOccupants + "&numFloors=" + numFloors + "&numRooms=" + numRooms + "&elecExp=" + elecExp +  "&fuelExp=" + fuelExp + "&waterExp=" + waterExp + "&educExp=" +  educExp + "&medExp=" + medExp + "&foodExp=" + foodExp + "&rentExp=" + rentExp + "&transExp=" + transExp + "&clothExp=" + clothExp + "&cLoadExp=" + cLoadExp + "&otherExp=" + otherExp + "&pFullName=" + pFullName + "&pOccupation=" + pOccupation + "&rToPatient=" + rToPatient + "&pMonthInc=" + pMonthInc + "&agencyName=" + agencyName + "&ngo=" + ngo + "&go=" + go + "&needsProvided=" + needsProvided + "&servicesProvided=" + servicesProvided + "&incomeEval=" + incomeEval + "&medDate=" + medDate + "&cpDate=" + cpDate + "&admDate=" + admDate + "&surgeDate=" + surgeDate + "&dsDate=" + dsDate + "&fDate=" + fDate + "&medRemarks=" + medRemarks + "&cpRemarks=" + cpRemarks + "&admRemarks=" + admRemarks + "&surgeRemarks=" + surgeRemarks + "&dsRemarks=" + dsRemarks + "&fRemarks=" + fRemarks + "&wARec=" + wARec);
	
	alert("Assessment and Recommendations");
	
	var cont = document.getElementById("toRep");
	cont.innerHTML = "<h1>Successful</h1>";
	setTimeout(backToHome, 1000);
}