function printDiv(divName) {

 var printContents = document.getElementById("print-content");
 var WinPrint = window.open('','','left = 0,top = 0, width = 1000, height = 1100, toolbar = 0, scrollbars = 0, status = 0');
 WinPrint.document.write('<html><head><link rel="stylesheet" type="text/css" href="css/style.css"></head><body onload = "print(); close();">');
 WinPrint.document.write(printContents.innerHTML);
 WinPrint.document.write('</body></html>');
 WinPrint.document.close();
 WinPrint.focus();
          
} 