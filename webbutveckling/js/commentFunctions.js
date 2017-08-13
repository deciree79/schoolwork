/* För frmDeleteComment formuläret gäller att om användaren trycker på btnDelete skall användaren få en fråga om han/hon 
 * verkligen önskar ta bort aktuell post.
 */

 function verifyDeleteOfComment(hidId, hidComment){
 
	var comment = document.getElementById("hidComment").value;
	
	window.confirm("Do you want to delete " + comment + "?");

};