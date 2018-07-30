//var url = 'http://www.biketeile-service.ru/models_data_provider.php';
var url = 'models_data_provider.php';
// load manifactures and show them in the first select box
// executed on page load

var loadMans = function() {
	var s = $('#BTS_Marke');
		
	//$('option', s).not(":eq(0)").remove(); // clear the box, but leave the first option
	
	s.change(); // inform all other boxes (they will clear themself)
	$.get(           // ajax call
		url,             // URL of the script on the server
		{ ctrl: 0 },     // script params
		function(data) { // callback with XML, iterate all items
			var count = 1;
			$(data.documentElement).children().each(function() {
				// create a select-option for each item
				var o = $('<option></option>'),
				    v = $($(this).children()[1]).text();
				o.attr('value', v).text(v); // save a manufacturer as 'value' attribute of the option
				if(count < 11)
					o.attr('class', 'mans_bold'); 
				s.append(o);

				count++;
			});
		}
	);// fin de $.get method
};// fin de la funcion de carga de Manufacturas


// load models for selected manufacturer and show them in the second select
// executed when a manufacturer is selected
// the same logic, as for loadMans
var loadModels = function() {
	var $this = $(this),                   // the manifacture box
	    s = $('#BTS_Model');               // the model box
	//$('option', s).not(":eq(0)").remove(); // cleaup
	s.change();                            // cleaun the following box
	var c = $this.val();   	// the selected manufacturer
	alert(c);
	if(c != '') {
		$.get(
			url,
			{ ctrl: 1, Marke: c },
			function(data) {
				$(data.documentElement).children().each(function() {
					var o = $('<option></option>'),
					    v = $($(this).children()[1]).text();
					o.attr('value', v).text(v);
					s.append(o);
				});
			}
		);
	}
};

// load bikes for selected manufacturer and model and show them in the third select
// executed when a model is selected
// the same logic, as for loadModels
var loadBikes = function() {
	$('#BTS_SHOW').attr('disabled', 'disabled');  // disable the search button
	var $this = $(this),                          // the model box
	    s = $('#BTS_Bikes');                      // the bike box
	$('optgroup', s).remove();                    // cleaup
	$('option', s).not(":eq(0)").remove();        // cleaup
	var c1 = $('#BTS_Marke').val(),               // the selected manufacturer
	    c2 = $this.val();                         // the selected model
	if(c1 != '' && c2 != '') {
		$.get(
			url,
			{ ctrl: 2, Marke: c1, Model: c2 },
			function(data) {
				var g = null, lastType = null;
				$(data.documentElement).children().each(function() {
					var o = $('<option></option>'),
					    arr = $(this).children(),
					    v1 = $(arr[1]).text(),
					    v2 = $(arr[2]).text(),
					    v3 = $(arr[3]).text();
					if(lastType != v1 && v1 != "") {
						// create new optgroup if first bike or label changed
						lastType = v1;
						g = $('<optgroup></optgroup>').attr('label', v1);
						s.append(g);
					}
					o.text(v2 + " " + v3);
					if(g == null) s.append(o);
					else g.append(o);

					// save values directly to object (the just inserted option)
					// and not as attributes, because there is more than one
					var g_c = (g == null ? s.children() : g.children());
					var obj = g_c[g_c.length-1];
					obj.v1 = v1;
					obj.v2 = v2;
					obj.v3 = v3;
				});
			}
		);
	}
};

// load bikes for search criteria and show the table
// executed if something is selected in the third box or 'search' button is clicked
var searchBikes = function() {
	$('#BTS_SHOW').removeAttr('disabled');   // allow the search button

	if(!$('#BTS_SEL_MODEL_DIV').size()){
		$("body").append('<div id="BTS_SEL_MODEL_DIV"></div>');	
	}
	//console.log( $("#BTS_SEL_MODEL_DIV") );
	// prepare place for the table
	$('#ECB_MAIN').hide();
	var e = $('#BTS_SEL_MODEL_DIV');
	e.show();
	//console.log(e);
	
	// get selected manufacturer, model and bike
	var obj = $('#BTS_Bikes option:selected')[0];
	var c1 = $('#BTS_Marke').val(),
	    c2 = $('#BTS_Model').val(),
	    c3 = obj.v1,
	    c4 = obj.v2,
	    c5 = obj.v3;
	if(c1 != '' && c2 != '') {
		$.get(
			url,
			{ ctrl: 3, Marke: c1, Model: c2, VB2: c3, Hubraum: c4, AFN: c5 },
			function(data) {
				
				var root = $(data.documentElement),
				    items = root.children();
				// nothing found
				if(items.length == 0) {
					e.html('<p>Fahrzeug - nichts gefunden</p>');
				}
				/*
				// only one item - redirect to it
				else if(items.length == 1) {
					var arr = $(items[0]).children();
					window.location.href = 'models.php?BTS='+$(arr[0]).text();
				}*/
				// multiple items - show the table
				else {
					var topHtml = '';
					
					if(site_language == "en"){
						topHtml = '<p align=left> '+ items.length +' matching vehicles found.\
						<br>Please select your vehicle by clicking on the <a href="javascript:;"><span class="css_wk_img_button">Select</span></a> button.</p>';
					} else{
						topHtml = '<p align=left> Es wurden '+ items.length +' passende Fahrzeuge gefunden.\
						<br>Bitte w&auml;hlen Sie Ihr Fahrzeug durch Klick auf den <a href="javascript:;"><span class="css_wk_img_button">Select</span></a> Pfeil aus.</p>';
					}
					
					e.html(topHtml+'\
						<p>\
						<table class="orderDetailsTable" width="100%" cellspacing="0" cellpadding="6" border="0"><thead>\
						<tr>\
						<TH class="wk model-th"></TH>\
						<TH class="wk model-th">Model</TH>\
						<TH class="wk model-th">Bj.</TH>\
						<TH class="wk model-th">Fahrgestell</TH>\
						<TH class="wk model-th">Baujahr</TH>\
						<TH class="wk model-th">Zyl</TH>\
						<TH class="wk model-th">Leistung</TH></tr></thead><tbody></tbody></table></p>');
					var t = $('table tbody', e),
					    i = 0;
					items.each(function() {
						var arr = $(this).children(),
						    manufacturer = $(arr[3]).text().replace("/", "-"),
							model = $(arr[4]).text().replace("/", "-"),
						    m = ($(arr[3]).text()+' '+$(arr[4]).text()+' '+$(arr[5]).text()+' '+$(arr[6]).text()+' '+$(arr[17]).text()+' '+$(arr[20]).text()),
						    r = $('<tr><td><a href="/'+manufacturer+'-'+model+'-'+$(arr[5]).text()+'-'+$(arr[0]).text()+'/'+$("html").attr('lang')+'/" onClick="$.colorbox.close();"><span class="css_wk_img_button">Select</span></a></td><td>'+m+'</td><td>'
						      +$(arr[7]).text()+'</td><td>'+$(arr[8]).text()+'</td><td>'+$(arr[9]).text()+'</td><td>'+$(arr[10]).text()+'</td><td>'+$(arr[12]).text()+'</td></tr>');
						if(++i % 2 == 0) r.addClass('prodRow2');
						else r.addClass('prodRow1');
						t.append(r);
					});
					
					//console.log();
					
					$.colorbox({
						html:"<div style='margin:20px;'>"+$('#BTS_SEL_MODEL_DIV').html()+"</div>",
						width: 500,
						height: 400
					});
					$('#BTS_SEL_MODEL_DIV').html("");
					
					$("#cboxOverlay").css("background", "#666666");
					$("#cboxLoadedContent").css("border", "5px solid #cccccc");
				}
			}
		);
	}
};

function searchModels(){
	var afn = $(".search_model_input").val();
	if(!afn){
		return;
	}

	if(!$('#BTS_SEL_MODEL_DIV').size()){
		$("body").append('<div id="BTS_SEL_MODEL_DIV"></div>');
	}
	//console.log( $("#BTS_SEL_MODEL_DIV") );
	// prepare place for the table
	$('#ECB_MAIN').hide();
	var e = $('#BTS_SEL_MODEL_DIV');
	e.show();


	if(afn.length > 1) {
		$.get(
			url,
			{ action: 'searchModel', AFN: afn },
			function(data) {

				var root = $(data.documentElement),
					items = root.children();
				// nothing found
				if(items.length == 0) {
					e.html('<p>Fahrzeug - nichts gefunden</p>');
				}
				/*
				 // only one item - redirect to it
				 else if(items.length == 1) {
				 var arr = $(items[0]).children();
				 window.location.href = 'models.php?BTS='+$(arr[0]).text();
				 }*/
				// multiple items - show the table
				else {
					var topHtml = '';

					if(site_language == "en"){
						topHtml = '<p align=left> '+ items.length +' matching vehicles found.\
						<br>Please select your vehicle by clicking on the <a href="javascript:;"><span class="css_wk_img_button">Select</span></a> button.</p>';
					} else{
						topHtml = '<p align=left> Es wurden '+ items.length +' passende Fahrzeuge gefunden.\
						<br>Bitte w&auml;hlen Sie Ihr Fahrzeug durch Klick auf den <a href="javascript:;"><span class="css_wk_img_button">Select</span></a> Pfeil aus.</p>';
					}

					e.html(topHtml+'\
						<p>\
						<table class="orderDetailsTable" width="100%" cellspacing="0" cellpadding="6" border="0"><thead>\
						<tr>\
						<TH class="wk model-th"></TH>\
						<TH class="wk model-th">Model</TH>\
						<TH class="wk model-th">Bj.</TH>\
						<TH class="wk model-th">Fahrgestell</TH>\
						<TH class="wk model-th">Baujahr</TH>\
						<TH class="wk model-th">Zyl</TH>\
						<TH class="wk model-th">Leistung</TH></tr></thead><tbody></tbody></table></p>');
					var t = $('table tbody', e),
						i = 0;
					items.each(function() {
						var arr = $(this).children(),
							manufacturer = $(arr[3]).text().replace("/", "-"),
							model = $(arr[4]).text().replace("/", "-"),
							m = ($(arr[3]).text()+' '+$(arr[4]).text()+' '+$(arr[5]).text()+' '+$(arr[6]).text()+' '+$(arr[17]).text()+' '+$(arr[20]).text()),
							r = $('<tr><td><a href="/'+manufacturer+'-'+model+'-'+$(arr[5]).text()+'-'+$(arr[0]).text()+'/'+$("html").attr('lang')+'/" onClick="$.colorbox.close();"><span class="css_wk_img_button">Select</span></a></td><td>'+m+'</td><td>'
								+$(arr[7]).text()+'</td><td>'+$(arr[8]).text()+'</td><td>'+$(arr[9]).text()+'</td><td>'+$(arr[10]).text()+'</td><td>'+$(arr[12]).text()+'</td></tr>');
						if(++i % 2 == 0) r.addClass('prodRow2');
						else r.addClass('prodRow1');
						t.append(r);
					});
				}

				$.colorbox({
					html:"<div style='margin:20px;'>"+$('#BTS_SEL_MODEL_DIV').html()+"</div>",
					width: 500,
					height: 400
				});
				$('#BTS_SEL_MODEL_DIV').html("");

				$("#cboxOverlay").css("background", "#666666");
				$("#cboxLoadedContent").css("border", "5px solid #cccccc");
			}
		);
	}
}

function loadBikesList(){

}

// startup
$(function() {
	$('#BTS_Marke').change(loadModels);
	$('#BTS_Model').change(loadBikes);
	$('#BTS_Bikes').change(searchBikes);
	$('#BTS_SHOW').click(searchBikes);
	$('.search_model_button').click(searchModels);
	loadMans();
});

// =======================
// called when 'save' button is clicked - for the models.php
var saveBike = function() {
	$.post(
		'save_bike.php',
		{ BTS: 0 },
		function() {
		}
	);
};

$(document).ready(function() {
	$('#saveBike').click(saveBike);
});