/* För frmNewUpdateArtist formuläret gäller:
 * att samtliga indata komponenter skall ha värden för att kunna spara en ny artist
 * Vid uppdatering av en redan befintlig post måste txtArtist vara ifylld.
 */

 function validateNewUpdateArtistFormData(){
	
	txtArtist = document.getElementById("txtArtist").value;
	if(txtArtist== ""){
		//alert("hej");
		var err = document.createElement("p");
		var msg = document.createTextNode("Artist missing");
		err.appendChild(msg);
		var errdiv = document.getElementById("errdiv");
		errdiv.appendChild(err);
		return false;
	}
	else
		return true;
	
}

function resetNewUpdateArtistFormData(form){
	document.frmNewUpdateArtist.txtArtist.value="";
}

/* För frmEditDeleteArtist formulären gäller:
* om användaren trycker på btnEdit skall den data som finns i de gömda fälten kopieras till frmNewUpdateArtist formuläret och
* om användaren trycker på btnDelete skall användaren få en fråga om han/hon verkligen önskar ta bort aktuell post.
*/


function verifyDeleteOfArtist(theForm){
	return window.confirm("Do you really want to delete "+theForm.hidArtist.value+"?");
}

function copyEditDeleteArtistFormData(theForm){
	window.document.frmNewUpdateArtist.txtArtist.value=theForm.hidArtist.value;
	window.document.frmNewUpdateArtist.hidId.value=theForm.hidId.value;
	
 }




/* Avslutningsvis skall du också lägga till händelsehanterare (för knapptryckningar) i respektive formulär för att anropa de 
 * funktioner du skapat. Här bör du fundera kring om händelsehanteraren skall ligga på formulärnivå (onsubmit) eller komponentnivå 
 * (onclick).*/
 