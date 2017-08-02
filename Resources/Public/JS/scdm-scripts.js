function fillModals() {

	var maxSprachen = 7;
	var maxSchriften = 5;

	var arrAlleVorteile = Array('Schnelle Heilung','Akademische Ausbildung(Magier)','Flink','Innerer Kompass','Altersresistenz');
	var arrAlleNachteile = Array('Ungebildet','Unstet','Niedrige Lebenskraft','Prinzipientreue','Schneller Alternd');
	var arrAlleSprachen = Array('Alaani','Angram','Asdharia','Atak','Aureliani','Garethi', 'Tulamidya', 'Rogolan', 'Zhayad', 'Bosparano', '');
	var arrAlleSprachstufen = Array('I','II','III','III MS');
	var arrAlleSchriften = Array('Altes Alaani','Chrmk','Hjaldingsche Runen','Nanduria Zeichen','Kusliker Zeichen', 'Imperiale Zeichen', 'Rogolan-Runen', 'Angram-Bildschrift');
	
	var vorhandeneVorteile = $('#scdsaVorteil').val();
	var vorhandeneNachteile = $('#scdsaNachteil').val();
	var vorhandeneSprachen = $('#scdsaSprache').val();
	var vorhandeneSchriften = $('#scdsaSchrift').val();

	var strVorhandeneVorteile = '["'+vorhandeneVorteile.split(', ').join('","')+'"]';
	var strVorhandeneNachteile = '["'+vorhandeneNachteile.split(', ').join('","')+'"]';
	var strVorhandeneSprache = '["'+vorhandeneSprachen.split(', ').join('","')+'"]';	
	var strVorhandeneSchrift = '["'+vorhandeneSchriften.split(', ').join('","')+'"]';

	var arrVorhandeneVorteile = JSON.parse(strVorhandeneVorteile);
	var arrVorhandeneNachteile = JSON.parse(strVorhandeneNachteile);
	var arrVorhandeneSprache = JSON.parse(strVorhandeneSprache);
	var arrVorhandeneSchrift = JSON.parse(strVorhandeneSchrift);
	var arrVorhandeneSprachstufen = new Array;
	//var arrVorhandeneSprachenOhneStufe = new Array();
		
	var htmlVorteilsListe = '';
	var htmlNachteilsListe = '';
	var htmlVorteilsListeRm = '';
	var htmlNachteilsListeRm = '';
	var htmlSprachliste = '';
	var htmlSprachlisteRm = '';
	var htmlSchriftliste = '';
	var htmlSchriftlisteRm = '';

	var countArrAlleVorteile = arrAlleVorteile.length;
	var countArrAlleNachteile = arrAlleNachteile.length;
	var countArrAlleSprachstufen = arrAlleSprachstufen.length;
	var countArrAlleSprachen = arrAlleSprachen.length;
	var countArrAlleSchriften = arrAlleSchriften.length;
	var countArrVorhandeneVorteile = arrVorhandeneVorteile.length;
	var countArrVorhandeneNachteile = arrVorhandeneNachteile.length;
	var countArrVorhandeneSprache = arrVorhandeneSprache.length;
	var countArrVorhandeneSchrift = arrVorhandeneSchrift.length;

	for (h=0; h < countArrAlleSprachstufen; h++) {
		arrVorhandeneSprachstufen[arrAlleSprachstufen[h]] = new Array;
	}

	for (var i=0; i < countArrAlleVorteile; i++) {
		
		if (arrVorhandeneVorteile.indexOf(arrAlleVorteile[i]) == -1) {
			htmlVorteilsListe += '<div id="scdsa-vorteil-'+i+'" class="scdsa-modal-hover" onclick="changeAttribut(this.id,\'Vorteil\',\'add\');">'+arrAlleVorteile[i]+'</div>';						
		}
	}
	
	for (var j=0; j < countArrAlleNachteile; j++) {
		
		if (arrVorhandeneNachteile.indexOf(arrAlleNachteile[j]) == -1) {
			htmlNachteilsListe += '<div id="scdsa-nachteil-'+j+'" class="scdsa-modal-hover" onclick="changeAttribut(this.id,\'Nachteil\',\'add\');">'+arrAlleNachteile[j]+'</div>';			
		}
	}	
	
	for (var k=0; k < countArrVorhandeneVorteile; k++) {		
		htmlVorteilsListeRm += '<div id="scdsa-vorteilrm-'+k+'" class="scdsa-modal-hover" onclick="changeAttribut(this.id,\'Vorteil\',\'remove\');">'+arrVorhandeneVorteile[k]+'</div>';		
	}
	
	for (var l=0; l < countArrVorhandeneNachteile; l++) {		
		htmlNachteilsListeRm += '<div id="scdsa-nachteilrm-'+l+'" class="scdsa-modal-hover" onclick="changeAttribut(this.id,\'Nachteil\',\'remove\');">'+arrVorhandeneNachteile[l]+'</div>';		
	}	
	
	for (n=0;n < countArrAlleSprachstufen;n++) {
		
		htmlSprachlisteRm += '<div class="col-md-3"><h3>Stufe '+arrAlleSprachstufen[n]+'</h3>';
		htmlSprachliste += '<div class="col-md-3"><h3>Stufe '+arrAlleSprachstufen[n]+'</h3>';

		//Vorhandene Sprachen
		for (var m=0; m < countArrVorhandeneSprache;m++) {
			if (arrVorhandeneSprache[m].endsWith('(' + arrAlleSprachstufen[n] + ')')) {
				htmlSprachlisteRm += '<div id="scdsa-spracheremove-' + m + '" class="scdsa-modal-hover" onclick="changeSpeech(this.id,\''+arrAlleSprachstufen[n]+'\',\'remove\');">' + arrVorhandeneSprache[m].replace(' ('+arrAlleSprachstufen[n]+')', '') + '</div>';
			}
		}
		//Alle Sprachen
		for (var o=0; o < countArrAlleSprachen; o++) {

			if (countArrVorhandeneSprache >= maxSprachen) {
				htmlSprachliste = '<div class="col-md-12">Der Charakterbogen ist vorerst auf '+maxSprachen+' Sprachen beschränkt. Entferne erst eine Sprache um eine weitere hinzuzufügen.</div>';
			}
			else {
				var SpeechExist = false;
				for (var p = 0; p < countArrVorhandeneSprache; p++) {
					if (arrVorhandeneSprache[p].startsWith(arrAlleSprachen[o])) {
						SpeechExist = true;
					}
				}
				if (SpeechExist == false) {
					htmlSprachliste += '<div id="scdsa-spracheadd-' + o + '" class="scdsa-modal-hover" onclick="changeSpeech(this.id,\'' + arrAlleSprachstufen[n] + '\',\'add\');">' + arrAlleSprachen[o] + '</div>';
				}
			}
		}
		htmlSprachlisteRm += '</div>';	
		htmlSprachliste += '</div>';
	}

	for (var q=0;q<countArrVorhandeneSchrift;q++) {
		htmlSchriftlisteRm += '<div id="scdsa-schriftremove-' + q + '" class="scdsa-modal-hover" onclick="changeFont(this.id,\'remove\');">' + arrVorhandeneSchrift[q] + '</div>';
	}

	for (var r=0;r<countArrAlleSchriften;r++) {

		if (countArrVorhandeneSchrift >= maxSchriften) {
			htmlSchriftliste = '<div class="col-md-12">Der Charakterbogen ist vorerst auf '+maxSchriften+' Schriften beschränkt. Entferne erst eine Schrift um eine weitere hinzuzufügen.</div>';
		}
		else {
			if (arrVorhandeneSchrift.indexOf(arrAlleSchriften[r]) == -1) {
				htmlSchriftliste += '<div id="scdsa-schriftadd-' + r + '" class="scdsa-modal-hover" onclick="changeFont(this.id,\'add\');">' + arrAlleSchriften[r] + '</div>';
			}
		}
	}
	console.log(strVorhandeneSchrift);
	console.log(countArrVorhandeneSchrift);

	$('#scdsa-addVorteil').html(htmlVorteilsListe);
	$('#scdsa-addNachteil').html(htmlNachteilsListe);
	$('#scdsa-addSprache').html(htmlSprachliste);
	$('#scdsa-addSchrift').html(htmlSchriftliste);
	$('#scdsa-removeVorteil').html(htmlVorteilsListeRm);
	$('#scdsa-removeNachteil').html(htmlNachteilsListeRm);
	$('#scdsa-removeSprache').html(htmlSprachlisteRm);
	$('#scdsa-removeSchrift').html(htmlSchriftlisteRm);
}

function changeSpeech(id, stufe, rmoradd) {
	/*
	console.log(id);
	console.log(stufe);
	console.log(rmoradd);
	*/

	var vorhandeneSprachen = $('#scdsaSprache').val();
	var strVorhandeneSprache = '["'+vorhandeneSprachen.split(', ').join('","')+'"]';
	var arrVorhandeneSprache = JSON.parse(strVorhandeneSprache);

	var strToAdd = $('#'+id).html()+' ('+stufe+')';
	var index = arrVorhandeneSprache.indexOf(strToAdd);

	if (rmoradd == 'add') {
		if (strVorhandeneSprache != '[""]') {
			arrVorhandeneSprache.push(strToAdd);
		}
		else {
			arrVorhandeneSprache[0] = strToAdd;
		}
	}

	else if (rmoradd == 'remove') {
		if (index > -1) {
			arrVorhandeneSprache.splice(index,1);
		}
	}

	var strResult = arrVorhandeneSprache.toString().split(',').join(', ');

	//alert(strResult);
	$('#scdsaSprache').html(strResult);
	$('#'+id).remove();
	transformSpeech();
	$('#modal-'+rmoradd+'Sprache').modal('toggle');
	//console.log(strResult);
}

function changeAttribut(id, attribut, rmoradd) {
	console.log(rmoradd);
	var affectedAttribut =  $('#'+id).html();
	var existingAttributes = $('#scdsa'+attribut).val();
	
	var strExistingAttributes = '["'+existingAttributes.split(', ').join('","')+'"]';
	var arrExistingAttributes = JSON.parse(strExistingAttributes);
	
	var index = arrExistingAttributes.indexOf(affectedAttribut);
	
	if (rmoradd == 'remove') {
		if (index > -1) {
			arrExistingAttributes.splice(index,1);
		}
	}
	else if (rmoradd == 'add') {
		if (strExistingAttributes != '[""]') {
			arrExistingAttributes.push(affectedAttribut);
		}
		else {
			arrExistingAttributes[0] = affectedAttribut;
		}	
	}
	else {
		arrExistingAttributes[0] = 'Es ist ein Fehler aufgetreten!';
	}
	
	var strResult = arrExistingAttributes.toString().split(',').join(', ');
	$('#scdsa'+attribut).val(strResult);
	$('#'+id).remove();
	$('#modal-'+rmoradd+attribut).modal('toggle');	
	console.log('#modal-'+rmoradd+attribut);
}


function changeFont(id, rmoradd) {

	var vorhandeneSchriften = $('#scdsaSchrift').val();
	var strVorhandeneSchriften = '["'+vorhandeneSchriften.split(', ').join('","')+'"]';
	var arrVorhandeneSchriften = JSON.parse(strVorhandeneSchriften);

	var strToAdd = $('#'+id).html();
	var index = arrVorhandeneSchriften.indexOf(strToAdd);

	if (rmoradd == 'add') {
		if (strVorhandeneSchriften != '[""]') {
			arrVorhandeneSchriften.push(strToAdd);
		}
		else {
			arrVorhandeneSchriften[0] = strToAdd;
		}
	}

	else if (rmoradd == 'remove') {
		if (index > -1) {
			arrVorhandeneSchriften.splice(index,1);
		}
	}

	var strResult = arrVorhandeneSchriften.toString().split(',').join(', ');
	//alert(strResult);
	$('#scdsaSchrift').html(strResult);
	$('#'+id).remove();
	transformFont();
	$('#modal-'+rmoradd+'Schrift').modal('toggle');

}

function setFieldsFree() {
	$('#scdsaVorteil').prop('disabled',false);
	$('#scdsaNachteil').prop('disabled',false);
	$('#scdsaSprache').prop('disabled',false);
	$('#scdsaSchrift').prop('disabled',false);
}