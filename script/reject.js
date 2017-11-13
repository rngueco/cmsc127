function reject(){
	var xhttp = new XMLHttpRequest();
	var id = document.getElementsByName('iid')[0].value;
	xhttp.open("POST","approve.php", true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send("iid="+id);
	var cont = document.getElementById("toRep");
	cont.innerHTML = "<h1>Rejected</h1>";
	setTimeout(backToHome, 1000);
}