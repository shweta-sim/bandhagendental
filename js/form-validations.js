<!-- Contact Form Valication -->
function validate_contact(contact) 
{		
	if(contact.dittnam.value=="")
	{
		alert("Ange ditt Namn");
		contact.dittnam.focus();
		return (false);
	}
	if(contact.tel.value=="" || contact.tel.value == null || !contact.tel.value.toString().match(/^[-]?\d*\.?\d*$/))
	{		
		alert("Ange ditt Tel");
		contact.tel.focus();
		return (false);
	}
	if(contact.epost.value=="")
	{
		alert("Ange ditt E-post");
		contact.epost.focus();
		return (false);
	}
	
	if(contact.epost.value!="")
	{
		pass = contact.epost.value.indexOf('@',0);
		if(pass==-1)
		{
			alert("Inte en giltig E-post");
			contact.epost.focus();
			return (false);
		}		
	}
	if(contact.meddelande.value=="")
	{
		alert("Ange ditt Meddelande");
		contact.meddelande.focus();
		return (false);
	}
	if(contact.accept.checked==false) {
			alert('Vänligen acceptera vår policy för dataskydd innan du skickar in det här formuläret.');
			return false;
	}
	
}


<!-- Akut Form Valication -->
function validate_akut(akut) 
{		
	if(akut.namn.value=="")
	{
		alert("Ange ditt Namn");
		akut.namn.focus();
		return (false);
	}
	if(akut.telefon.value=="" || akut.telefon.value == null || !akut.telefon.value.toString().match(/^[-]?\d*\.?\d*$/))
	{		
		alert("Ange ditt Telefon");
		akut.telefon.focus();
		return (false);
	}
	if(akut.personnummer.value=="" || akut.personnummer.value == null || !akut.personnummer.value.toString().match(/^[-]?\d*\.?\d*$/))
	{		
		alert("Ange ditt Personnummer");
		akut.personnummer.focus();
		return (false);
	}
	if(akut.epost.value=="")
	{
		alert("Ange ditt E-post");
		akut.epost.focus();
		return (false);
	}
	if(akut.epost.value!="")
	{
		pass = akut.epost.value.indexOf('@',0);
		if(pass==-1)
		{
			alert("Inte en giltig E-post");
			akut.epost.focus();
			return (false);
		}		
	}
	if(akut.accept.checked==false) {
			alert('Vänligen acceptera vår policy för dataskydd innan du skickar in det här formuläret.');
			return false;
	}
}




<!-- Lista Mig Form Valication -->
function validate_listamig(listamig) 
{		
	if(listamig.namn.value=="")
	{
		alert("Ange ditt Namn");
		listamig.namn.focus();
		return (false);
	}
	if(listamig.telefon.value=="" || listamig.telefon.value == null || !listamig.telefon.value.toString().match(/^[-]?\d*\.?\d*$/))
	{		
		alert("Ange ditt Telefon");
		listamig.telefon.focus();
		return (false);
	}
	if(listamig.personnummer.value=="" || listamig.personnummer.value == null || !listamig.personnummer.value.toString().match(/^[-]?\d*\.?\d*$/))
	{		
		alert("Ange ditt Personnummer");
		listamig.personnummer.focus();
		return (false);
	}
	if(listamig.adress.value=="")
	{
		alert("Ange ditt Adress");
		listamig.adress.focus();
		return (false);
	}	
	if(listamig.postnummer.value=="")
	{
		alert("Ange ditt Postnummer");
		listamig.postnummer.focus();
		return (false);
	}
	if(listamig.ort.value=="")
	{
		alert("Ange ditt Ort");
		listamig.ort.focus();
		return (false);
	}
	if(listamig.epost.value=="")
	{
		alert("Ange ditt E-post");
		listamig.epost.focus();
		return (false);
	}
	if(listamig.epost.value!="")
	{
		pass = listamig.epost.value.indexOf('@',0);
		if(pass==-1)
		{
			alert("Inte en giltig E-post");
			listamig.epost.focus();
			return (false);
		}		
	}	
	if(listamig.onskemal.value=="")
	{
		alert("Ange Speciella önskemål");
		listamig.onskemal.focus();
		return (false);
	}
	if(listamig.accept.checked==false) {
			alert('Vänligen acceptera vår policy för dataskydd innan du skickar in det här formuläret.');
			return false;
	}	
}




<!-- Ring Mig Form Valication -->
function validate_ringmig(ringmig) 
{		
	if(ringmig.dittnam.value=="")
	{
		alert("Ange ditt nam");
		ringmig.dittnam.focus();
		return (false);
	}
	if(ringmig.tel.value=="" || ringmig.tel.value == null || !ringmig.tel.value.toString().match(/^[-]?\d*\.?\d*$/))
	{		
		alert("Ange ditt Tel");
		ringmig.tel.focus();
		return (false);
	}
	if(ringmig.epost.value=="")
	{
		alert("Ange ditt E-post");
		ringmig.epost.focus();
		return (false);
	}
	if(ringmig.epost.value!="")
	{
		pass = ringmig.epost.value.indexOf('@',0);
		if(pass==-1)
		{
			alert("Inte en giltig E-post");
			ringmig.epost.focus();
			return (false);
		}		
	}
	if(ringmig.accept.checked==false) {
			alert('Vänligen acceptera vår policy för dataskydd innan du skickar in det här formuläret.');
			return false;
	}
}



