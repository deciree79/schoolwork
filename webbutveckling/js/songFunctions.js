/*
 * För frmNewUpdateSong formuläret gäller att samtliga indata komponenter skall ha värden för att kunna spara en ny artist. 
 * Vid uppdatering av en redan befintlig post måste cboArtist, txtTitle, txtCount vara ifyllda.
 */

function validateNewUpdateSongFormData(theForm){
	cboArtist = document.getElementById("cboArtist").value;
	txtTitle = document.getElementById("txtTitle").value;
	txtCount = document.getElementById("txtCount").value;
	
		
	if(cboArtist==="0" || txtTitle==="" || txtCount===""){
		//alert("Något saknas");
				
		//http://javascript.info/tutorial/modifying-document
		//http://stackoverflow.com/questions/3955229/remove-all-child-elements-of-a-dom-node-in-javascript
				
		if(cboArtist==="0"){
			//alert("Artis och nåt saknas");
			if(cboArtist==="0"&&txtTitle===""&&txtCount===""){
				//alert("Please fill in the Form");
				var err = document.createElement("p");
                var msg = document.createTextNode("Please fill in the Form");
                var errdiv = document.getElementById("errdiv");
				
				//Tar bort/tömmer underliggande elementen (err och msg)
				while (errdiv.firstChild)						
					errdiv.removeChild(errdiv.firstChild);
                
				//skriver till ny paragraf element och textNode
				err.appendChild(msg);
                errdiv.appendChild(err);
                return false;
			}
			
			else if(cboArtist==="0"&&txtTitle===""){
				//alert("Artist Title");
				var err = document.createElement("p");
                var msg = document.createTextNode("Artist and Title missing");
                var errdiv = document.getElementById("errdiv");
                while (errdiv.firstChild)
					errdiv.removeChild(errdiv.firstChild);
				err.appendChild(msg);
                errdiv.appendChild(err);
                return false;
			}
			
			else if(cboArtist==="0"&&txtCount===""){
				//alert("Artist Count");
                var err = document.createElement("p");
                var msg = document.createTextNode("Artist and Count missing");
                var errdiv = document.getElementById("errdiv");
                while (errdiv.firstChild)
					errdiv.removeChild(errdiv.firstChild);
				err.appendChild(msg);
                errdiv.appendChild(err);
                return false;
			}
			
			else
				//alert("Artist");
                var err = document.createElement("p");
                var msg = document.createTextNode("Artist missing");
                var errdiv = document.getElementById("errdiv");
                while (errdiv.firstChild)
					errdiv.removeChild(errdiv.firstChild);
				err.appendChild(msg);
                errdiv.appendChild(err);
				return false;
		}
			
		else if(txtTitle===""){
			//alert("Title o nåt saknas");
			if(txtCount===""&&txtTitle===""){
				//alert("Title Count");
                var err = document.createElement("p");
                var msg = document.createTextNode("Title and Count missing");
                var errdiv = document.getElementById("errdiv");
                while (errdiv.firstChild)
					errdiv.removeChild(errdiv.firstChild);
				err.appendChild(msg);
                errdiv.appendChild(err);
                return false;
			}
			
			else
				//alert("Title");
                var err = document.createElement("p");
                var msg = document.createTextNode("Title missing");
                var errdiv = document.getElementById("errdiv");
                while (errdiv.firstChild)
					errdiv.removeChild(errdiv.firstChild);
				err.appendChild(msg);
                errdiv.appendChild(err);
				return false;
		}
		
		
		else//txtCount===""
			//alert("count");
            var err = document.createElement("p");
            var msg = document.createTextNode("Count missing");
            var errdiv = document.getElementById("errdiv");
            while (errdiv.firstChild)
				errdiv.removeChild(errdiv.firstChild);
			err.appendChild(msg);
            errdiv.appendChild(err);
			return false;
		
	}
	
	else
		alert("success");
		return true;


}

function resetNewUpdateSongFormData(theForm){
	
	document.frmNewUpdateSong.hidId.value="";
	document.frmNewUpdateSong.cboArtist.value="0";
	document.frmNewUpdateSong.txtTitle.value="";
	document.frmNewUpdateSong.txtCount.value='';
}

/*
 * För frmEditDeleteSong formulären gäller att om användaren trycker på btnEdit skall den data du har i de gömda fälten kopieras 
 * till frmNewUpdateSong formuläret och om användaren trycker på btnDelete skall användaren få en fråga om han/hon verkligen önskar 
 * ta bort aktuell post.
 *
 * Avslutningsvis skall du också lägga till händelsehanterare i respektive formulär för att anropa de funktioner du skapat. 
 * Här bör du fundera kring om händelsehanteraren skall ligga på formulärnivå (onsubmit) eller komponentnivå (onclick).
 */

function verifyDeleteOfSong(theForm){
		//If str "" (empty) alert "Do you want to delete "Song"?" btnOk och btnCancel
		return window.confirm("Do you really want to delete "+theForm.hidTitleId.value+"?");
}

function copyEditDeleteSongFormData(theForm){
                window.document.frmNewUpdateSong.hidId.value=theForm.hidId.value;
				window.document.frmNewUpdateSong.cboArtist.value=theForm.hidArtistId.value;
                window.document.frmNewUpdateSong.txtTitle.value=theForm.hidTitleId.value;
                window.document.frmNewUpdateSong.txtCount.value=theForm.hidCountId.value;
}

