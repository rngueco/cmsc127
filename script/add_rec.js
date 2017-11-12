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
	
	var eyear = document.getElementsByName('evalyear')[0].value;
	var emont = document.getElementsByName('evalmonth')[0].value;
	var edate = document.getElementsByName('evalday')[0].value;
	
	var ayear = document.getElementsByName('adyear')[0].value;
	var amont = document.getElementsByName('admonth')[0].value;
	var adate = document.getElementsByName('adday')[0].value;
	
	var syear = document.getElementsByName('suryear')[0].value;
	var smont = document.getElementsByName('surmonth')[0].value;
	var sdate = document.getElementsByName('surday')[0].value;
	
	var dyear = document.getElementsByName('disyear')[0].value;
	var dmont = document.getElementsByName('dismonth')[0].value;
	var ddate = document.getElementsByName('disday')[0].value;
	
	var fyear = document.getElementsByName('fupyear')[0].value;
	var fmont = document.getElementsByName('fupmonth')[0].value;
	var fdate = document.getElementsByName('fupday')[0].value;
	
	var bills = document.getElementsByName('hbills')[0].value;
	var lfees = document.getElementsByName('lfees')[0].value;
	
	xhttp.open("POST","add_newrec.php", true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send("fname="+fname+"&lname="+lname+"&minitial="+minit+"&clip="+cllip+"&cpalate="+clpal+"&operation="+toper+"&repair="+trepa+"&surgeon="+surge+"&evalyear="+eyear+"&evalmonth="+emont+"&evalday="+edate+"&adyear="+ayear+"&admonth="+amont+"&adday="+adate+"&suryear="+syear+"&surmonth="+smont+"&surday="+sdate+"&disyear="+dyear+"&dismonth="+dmont+"&disday="+ddate+"&fupyear="+fyear+"&fupmonth="+fmont+"&fupday="+fdate+"&hbills="+bills+"&lfees="+lfees);
	var cont = document.getElementById("toRep");
	cont.innerHTML = "<h1>Successful</h1>";
	setTimeout(backToHome, 1000);
}
