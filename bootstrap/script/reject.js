function reject(id){
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST","reject.php", true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send("iid="+id);
	var cont = document.getElementById("toRep");
	cont.innerHTML = "<h1>Rejected</h1>";
	setTimeout(backToHome, 1000);
}