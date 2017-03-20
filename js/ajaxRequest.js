function myAjaxFunction(){

ajaxRequest.onreadystatechange = function(){
if(ajaxRequest.readyState == 4){
var ajaxDisplay = document.getElementById('eng');
//ajaxDisplay.innerHTML = ' ';
ajaxDisplay.innerHTML = ajaxRequest.responseText;
//alert(ajaxRequest.responseText);
}
}
// Now get the value from user and pass it to
// server script.
var word = document.getElementById('search').value;

var queryString = "?srh=" + word ;
ajaxRequest.open("GET", "../TheDictionary/getresults.php" + queryString, true);
ajaxRequest.send(null);

}
