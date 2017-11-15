function add_rec(){
	var xhttp = new XMLHttpRequest();
	var fname = document.getElementsByName('fname')[0].value;
	var lname = document.getElementsByName('lname')[0].value;
	var minit = document.getElementsByName('minitial')[0].value;
	
	var cllip = document.getElementsByName('clip')[0].value;
	var clpal = document.getElementsByName('cpalate')[0].value;
	var toper = document.getElementsByName('operation')[0].value;
	var trepa = document.getElementsByName('repair')[0].value;
	var surge = document.getElementsByName('surgeon')[0].value;
	
	var edate = document.getElementsByName('evaluation')[0].value;
	var adate = document.getElementsByName('admission')[0].value;
	var sdate = document.getElementsByName('surgery')[0].value;
	var ddate = document.getElementsByName('discharge')[0].value;
	var fdate = document.getElementsByName('followup')[0].value;
	
	var bills = document.getElementsByName('hbills')[0].value;
	var lfees = document.getElementsByName('lfees')[0].value;
	
	xhttp.open("POST","add_newrec.php", true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send("fname="+fname+"&lname="+lname+"&minitial="+minit+"&clip="+cllip+"&cpalate="+clpal+"&operation="+toper+"&repair="+trepa+"&surgeon="+surge+"&edate="+edate+"&addate="+adate+"&surgdate="+sdate+"&disdate="+ddate+"&fupdate="+fdate+"&hbills="+bills+"&lfees="+lfees);
	var cont = document.getElementById("toRep");
	cont.innerHTML = "<h1>Successful</h1>";
	setTimeout(backToHome, 1000);
}
