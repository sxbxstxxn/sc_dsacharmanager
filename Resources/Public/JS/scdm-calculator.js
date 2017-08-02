jQuery(document).ready(function() {	
	calculateEigenschaften();
	transformSpeech();
	transformFont();
});

function calculateEigenschaften() {
	//console.log('Calculating Eigenschaften...');

	$('#scdmcalc-eigenschaftsmodifikationen > div.swcharacteristicsline').each(function(){
		var eigenschaftsID = $(this).attr('id');
		if (eigenschaftsID != undefined) {
			//test += eigenschaftsID + ' | ';
			eigenschaftsWert = parseInt($('#'+eigenschaftsID+' > div > div.scdmwert').html());
			
			var eigenschaftsWert3m = eigenschaftsWert - 3;
			var eigenschaftsWert2m = eigenschaftsWert - 2;
			var eigenschaftsWert1m = eigenschaftsWert - 1;
			var eigenschaftsWert1p = eigenschaftsWert + 1;
			var eigenschaftsWert2p = eigenschaftsWert + 2;
			var eigenschaftsWert3p = eigenschaftsWert + 3;
			
			$('#'+eigenschaftsID+' > div > div.scdmwert3m').html(eigenschaftsWert3m);
			$('#'+eigenschaftsID+' > div > div.scdmwert2m').html(eigenschaftsWert2m);
			$('#'+eigenschaftsID+' > div > div.scdmwert1m').html(eigenschaftsWert1m);
			$('#'+eigenschaftsID+' > div > div.scdmwert1p').html(eigenschaftsWert1p);
			$('#'+eigenschaftsID+' > div > div.scdmwert2p').html(eigenschaftsWert2p);
			$('#'+eigenschaftsID+' > div > div.scdmwert3p').html(eigenschaftsWert3p);
		}
	});
	
	//console.log('#scdmcalc-eigenschaftsmodifikationen done!');
	
}

function transformSpeech() {
	//console.log('Transforming Speech Design...');

	var vorhandeneSprachen = $('#scdsaSprache').html();
	var strVorhandeneSprache = '["'+vorhandeneSprachen.split(', ').join('","')+'"]';
	var arrVorhandeneSprache = JSON.parse(strVorhandeneSprache);
	var countArrVorhandeneSprache = arrVorhandeneSprache.length;

	var html = '';
	//for (var i=0; i < countArrVorhandeneSprache;i++) {
	for (var i=1; i < 9;i++) {

		if (i <= countArrVorhandeneSprache) {
			//var html = $('#scdsa-Speach-Container').html();
			var firstPos = arrVorhandeneSprache[i-1].lastIndexOf('(');
			var lastPos = arrVorhandeneSprache[i-1].lastIndexOf(')');
			var strStufe = arrVorhandeneSprache[i-1].substring(firstPos+1,lastPos);
			var strSpeach = arrVorhandeneSprache[i-1].substring(0,firstPos);

			//console.log(strSpeach);

			html += '<div class="col-md-12 swspeechline speach' + i + ' nopadding"><div class="col-md-9 swleft nopadding">' + strSpeach + '</div><div class="col-md-3 swright">' + strStufe + '</div></div>';
			//console.log(html);
		}
		else{
			html += '<div class="col-md-12 swspeechline speach'+i+' nopadding"><div class="col-md-9 swleft nopadding"></div><div class="col-md-3 swright"></div></div>';
		}
		$('#scdsa-Speach-Container').html(html);
		$('#scdsa-Speach-Container .swspeechline').last().remove();
		//console.log(i+' vorhanden');
	}
}

function transformFont() {
	var vorhandeneSchriften = $('#scdsaSchrift').html();
	var strVorhandeneSchriften = '["'+vorhandeneSchriften.split(', ').join('","')+'"]';
	var arrVorhandeneSchriften = JSON.parse(strVorhandeneSchriften);
	var countArrVorhandeneSchriften = arrVorhandeneSchriften.length;

	var html = '';
	for (var i=1;i<6;i++) {
		if (i <= countArrVorhandeneSchriften) {
			html += '<div class="col-md-12 swspeechline font' + i + ' nopadding"><div class="col-md-12 swleft nopadding">' + arrVorhandeneSchriften[i-1] + '</div></div>';
		}
		else {
			html += '<div class="col-md-12 swspeechline font' + i + ' nopadding"><div class="col-md-12 swleft nopadding"></div></div>';
		}
	}
	console.log(html);
	$('#scdsa-font-Container').html(html);
}