/*___________________________________________________________________________________________________________________________*/



function CheckNom() {
	
var nom = document.getElementById("name").value;
var prenom = document.getElementById("surname").value;


if ( nom.length != 0 && prenom.length != 0) {

		for (i=0;i<nom.length;i++) {
			
			if ( (nom.charAt(i)<"a" || nom.charAt(i)>"z") && ( nom.charAt(i)<"A" || nom.charAt(i)>"Z") ) {
				alert("Nom ne doit pas contenir des chiffres.");
				return;
			}
		}

		for (j=0;j<prenom.length;j++) {
			if ( (prenom.charAt(j)<"a" || prenom.charAt(j)>"z") && ( prenom.charAt(j)<"A" || prenom.charAt(j)>"Z") ) {
				alert("Prenom ne doit pas contenir des chiffres.");
				return;
			} 
		}
}

else
	{
		alert("Saisissez votre nom et prenom svp!");
			return;
	}

}




/*___________________________________________________________________________________________________________________________*/


function CheckPassword() {

var password = document.getElementById("password").value;
var password2 = document.getElementById("password2").value;

if (password.length != 0 && password2.length != 0){

	if (password.length < 8) {
		alert("password too short, please enter > 8 caracters.");
		return;	
	}

	else if (password2 != password ) {
		alert("password don't match!");
		return;
	}
}

else{
	alert("Taper un mot de passe s'il vous plait");
}
}


/*___________________________________________________________________________________________________________________________*/


function CheckNum() {

var num = document.getElementById("tel").value;
ch = num.substr(0, 1);

if (num.length ==8 ) {
	for (i=0;i<num.length;i++) {
			
			if ( num.charAt(i)<"0" || num.charAt(i)>"9" )  {
				alert("Tel contient que des chiffres.");
				return false;
			}
			else if ( (ch != "2") && (ch != "5") && (ch != "9") )  {
				alert("Un numéro en tunisie s'il vous plait..");
				return false;
			}
		}
}

else {
	alert("Taper un numéro de tél valide.");
	return false;
}
return true;
}

/*___________________________________________________________________________________________________________________________*/


function CheckMail() {

var email = document.getElementById("email").value;
var valide = false;

	for(j=1;j<(email.length);j++) {

		if(email.charAt(j)=='@') {

			if(j<(email.length-4)) {

				for(var k=j;k<(email.length-2);k++) {

					if(a.charAt(k)=='.') {
							valide=true;
							return;
					}
				}
			}
		}
	}

	if(valide == false) { 
		alert("Veuillez saisir une adresse email valide.");
	    return;
	}

}


/*___________________________________________________________________________________________________________________________*/


function CheckBd() {


var bd = document.getElementById("date_naissance");
var ch = bd.substr(6, 4);

if (ch > 2000) {
	alert("Date de naissance non valide: année 2000 min.");
}

}


/*___________________________________________________________________________________________________________________________*/



function CheckCin(cinmem) {
var cin = cinmem;


if ( cin.length == 8 ) {
	for (i=0;i<cin.length;i++) {
			
			if ( cin.charAt(i)<"0" || cin.charAt(i)>"9" )  {
				alert("numéro CIN contient que des chiffres.");
			
			}
			
		}
}

else {
	alert("Taper un numéro de CIN valide.");

}

return "hja123";
 

}




/*___________________________________________________________________________________________________________________________*/


function Controle() {
	CheckNom();
	CheckBd();
	CheckCin();
	CheckMail();
	CheckPassword();
	CheckNum();
}


/*___________________________________________________________________________________________________________________________*/


function Controle2() {

var password = document.getElementById("password").value;
var password2 = document.getElementById("password2").value;
var num = document.getElementById("tel").value;
ch = num.substr(0, 1);
var bd = document.getElementById("birthday").value;
var ch = bd.substr(6, 4);

if (password.length != 0 && password2.length != 0){

	if (password.length < 8) {
		alert("password too short, please enter > 8 caracters.");
		return;	
	}

	else if (password2 != password ) {
		alert("password don't match!");
		return;
	}
}


if (num.length ==8 ) {
	for (i=0;i<num.length;i++) {
			
			if ( num.charAt(i)<"0" || num.charAt(i)>"9" )  {
				alert("Tel contient que des chiffres.");
				return false;
			}
			else if ( (ch != "2") && (ch != "5") && (ch != "9") )  {
				alert("Un numéro en tunisie s'il vous plait..");
				return false;
			}
		}
}

if (ch > "2000") {
	alert("Date de naissance non valide: année 2000 max.");
}
}

/*___________________________________________________________________________________________________________________________*/
