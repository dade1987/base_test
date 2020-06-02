function submitSearchForm(e, t) {
	var i = 0;
	$("." + e).find("select").each(function() {
		i += $(this).prop("selectedIndex")
	});
	var n = $("." + e).find(".input-text").val();
	n.length > 0 && i++, 0 == i ? location.href = "/index.php?area=2&menu=1&page=126&lingua=4" : $("." + e).submit()
}

function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}

function convertFirstFormTableToDiv1() {
	var e = jQuery("#firstForm table tr");
	for (jQuery("#firstForm table tr td"), jQuery("#firstForm").append('<div class="input-container"></div>'), jQuery("#firstForm .input-container").html(""),
	i = 0; i < e.length; i++)
		jQuery("#firstForm .input-container").append('<div class="input-box input-box-' + i + " ." + e.eq(i).find("td").eq(1).children().attr("name") + '-container"></div>'), jQuery("#firstForm .input-container .input-box").last().html('<div class="form-label">' + e.eq(i).find("td").eq(0).html() + '</div><div class="form-input">' + e.eq(i).find("td").eq(1).html() + "</div>");
	jQuery("#firstForm table").remove()
}

/**
 * detect IE
 * returns version of IE or false, if browser is not Internet Explorer
 */
function detectIE() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/');
    if (edge > 0) {
        // IE 12 => return version number
        return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }

    // other browser
    return false;
}

var url = $(location).attr('href').split("/");

if (url[3] == "it") {

// FORM VALIDATION CONTATTI
$("#firstForm").validate({
	rules: {
		ext_nomecognome: "required",
		ext_allega_file: "required",
		ext_email: "required",
		ext_oggetto: "required",
		ext_info: "required",
		ext_accetta_privacy: "required",
	},
	messages: {
		ext_allega_file: "Inserire il CV",
		ext_nomecognome: "Compila questo campo.",
		ext_email: "Compila questo campo.",
		ext_oggetto: "Compila questo campo.",
		ext_info: "Compila questo campo.",
		ext_accetta_privacy: "Devi accettare le condizioni sulla privacy",
	}

});

}

else {
	$("#firstForm").validate({
	rules: {
		ext_nome_cognome_en: "required",
		ext_allega_fileEN: "required",
		ext_email_en: "required",
		ext_oggetto_en: "required",
		ext_info2: "required",
		ext_accetta_privacy: "required",
	},
	messages: {
		ext_allega_fileEN: "Insert CV",
		ext_nome_cognome_en: "Required field.",
		ext_email_en: "Required field.",
		ext_oggetto_en: "Required field.",
		ext_info2: "Required field.",
		ext_accetta_privacy: "Accept Privacy",
	}

});
}


function GeneratePlaceHolders(e) {
	var t = jQuery(".form-label"),
	    n = (jQuery(".form-input").find("input"), e);
	for ( i = 0; i < n; i++) {
		var a = t[i],
		    o = jQuery(a).find("b").html(),
		    r = jQuery(a).find("span").html();
		o =
		void 0 != o ? o.replace(":", "") : "",
		void 0 != r && ( o = r + " " + o), jQuery(".input-box-" + i + " input").attr("placeholder", o)
	}
}

function get_short_url(long_url, login, api_key, func)
{
    $.getJSON(
        "http://api.bitly.com/v3/shorten?callback=?",
        {
            "format": "json",
            "apiKey": api_key,
            "login": login,
            "longUrl": long_url
        },
        function(response)
        {
            func(response.data.url);
        }
    );
}

function loadmap() {
	//LOAD MAP HERE
	var vector = {
	    path: 'M242.606,0C142.124,0,60.651,81.473,60.651,181.955s151.631,303.257,181.956,303.257 c30.326,0,181.955-202.775,181.955-303.257S343.089,0,242.606,0z M242.606,303.257c-66.9,0-121.302-54.433-121.302-121.302 S175.706,60.651,242.606,60.651c66.902,0,121.302,54.435,121.302,121.304S309.509,303.257,242.606,303.257z',
	    fillColor: '#e10f21',
	    fillOpacity: 1,
	    scale: 0.10,
	    anchor: new google.maps.Point(180, 520)
	  };
	var e = "/web-img/map.png",
	    t = [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#fcfcfc"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#fcfcfc"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#dddddd"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#dddddd"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#eeeeee"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#dddddd"
            }
        ]
    }
],
	    i = {
		lat : 45.393215,
		lng : 11.951526
	},
	    n = new google.maps.Map(document.getElementById("map"), {
		center : i,
		mapTypeControl : !1,
		scrollwheel : !1,
		zoom : 5,
		styles : t
	}),
	    a = new google.maps.Marker({
		position : i,
		map : n,
		title : "FIP Articoli Tecnici Srl",
		animation : google.maps.Animation.DROP,
		icon : vector
	}),
	    o = new google.maps.InfoWindow({
		content : "<b>FIP Articoli Tecnici Srl</b><br/>Viale Regione Veneto, 9<br/>35127 - Padova, Italy"
	});
	a.addListener("click", function() {
		o.open(n, a)
	})
}

function comparer(index) {
		return function(a, b) {
				var valA = getCellValue(a, index), valB = getCellValue(b, index)
				return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
		}
}
function getCellValue(row, index){ return $(row).children('td').eq(index).text() }

head.ready(function() {

	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

	$(window).outerHeight();
	var acc = document.getElementsByClassName("accordion");
	var i;
	for ( i = 0; i < acc.length; i++) {
		acc[i].onclick = function() {
			this.classList.toggle("active");
			this.nextElementSibling.classList.toggle("show");
		}
	}

	$(".wbg").each(function() {
		var e = $(this).data("img");
		$(this).css("background-image", "url(" + e + ")"), $(this).addClass("fadeIn")
	})
	, $(".area-link").hover(function() {
		// $(this).addClass("open")
	}, function() {
		// $(this).removeClass("open")
	}), $(".area-link").each(function(e) {
		0 == e && $(this).find(".first-lev").addClass("first")
	}), $(".various").fancybox({
		closeClick : !0,
		openEffect : "zoom",
		closeEffect : "zoom",
		width : "95%",
		closeClick : !1
	}), $(".box").each(function() {
			var t = 0;
			$(this).find(".col").each(function(e) {
				var i = $(this).outerHeight();
				// console.log(i);
				i > t && ( t = i)
			}), $(this).find(".col").each(function(e) {
				$(this).css("height", t + "px")
			})
		})
     , $(".price").each(function(e) {
		var t = $(this).text();
		t = parseFloat(t),
		t = accounting.formatMoney(t, "€ ", 2, ".", ","), $(this).text(t)
	}), $(".product-photos").magnificPopup({
		delegate : "a",
		type : "image",
		gallery : {
			enabled : !0
		}
	}), $(".album-previews").magnificPopup({
		delegate : "a",
		type : "image",
		gallery : {
			enabled : !0
		}
	}), $(".print-page").click(function(e) {
		e.preventDefault();
		window.print()
	}), $(".subalberatura_menu_ul").find(".on").parent().parent().addClass("on"), $(".subalberatura_menu_ul.liv-1").find(".on").parent().parent().parent().parent().addClass("on"),
	$(".expand-caret").click(function() {
		$(this).hasClass("flip") ? ($(this).removeClass("flip"), $(".side-menu").removeClass("open")) : ($(this).addClass("flip"), $(".side-menu").addClass("open"))
	})
	}), $(window).resize(function() {
		$(".sqr").each(function(e) {
			var t = $(this).outerWidth();
			$(this).css("height", t + "px")
		}), $(".box").each(function(e) {
			var t = 0;
			$(this).find(".col").each(function(e) {
				var i = $(this).outerHeight();
				i > t && ( t = i)
			}), $(this).find(".col").each(function(e) {
				$(this).css("height", t + "px")
			})
		})
	}), document.onkeydown = function(e) {
};

window.addEventListener("orientationchange", function() {

		// location.reload();

}, false);

head.ready(function(){

	//convertFirstFormTableToDiv1();

	var max = 0;
	$(".sqr").each(function(e) {
		if (e==0) {
			max = $(this).outerWidth();
		}

		var t = ($(this).outerWidth());
		if (t>max) {max = t};
	});
	$(".sqr").each(function(e) {
		$(this).css("height", max + "px");
	});

	var max = 0;
	$(".sqr2").each(function(e) {
		if (e==0) {
			max = $(this).outerWidth();
		}
		var t = ($(this).outerWidth());
		if (t>max) {max = t};
	});
	$(".sqr2").each(function(e) {
		$(this).css("height", max + "px");
	});

  	//UI to Top
	jQuery().UItoTop({  });

	//CAROSELLO NEWS HOME PREVIEW
	$("#news-home-carousel").owlCarousel({
		singleItem: true,
		// autoPlay: 8000,
		autoPlay: false,
		pagination: true,
		navigation: false
	})

	//AFFIX BLOCCHI OFFCANVAS
  $('.side-offcanvas-blocks').affix({
    offset: {
      top: 50
    }
  });

	// GALLERY HOME PAGE + VERSIONE MOBILE
	var homeOwl = $("#gallery-home");
  	$("#gallery-home").owlCarousel({
  		afterInit : setOwlHeight,
  		singleItem: true,
	    lazyLoad : true,
	    // rewindNav : true,
	    navigation : true,
	    transitionStyle : "fade",
	    navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	    //afterAction : afterAction,
	    stopOnHover: true,
	    autoPlay: 8000,
	    pagination: true
  	});
  	var first = true;
	if (homeOwl.length > 0 ) {
		setInterval(function(){
			if (first) {
				var owldata = homeOwl.data('owlCarousel');
				// console.log(owldata);
				owldata.updateVars();
				first = false;
			}
		},500);
	}
  	function setOwlHeight(){
  		var	wH = $(window).height();
  		var	wW = $(window).width();
  		if (wW > 1910) {
	  		var owlHeight = 700;
  		} else {
  			var owlHeight = wW/2.5;
  		}
  		$('#top-gallery-home').css('height',owlHeight+'px');
  		$('#gallery-home').css('height',owlHeight+'px');
  		$('#gallery-home .owl-item').css('height',owlHeight+'px');
  		$('#top-gallery-home .owl-pagination').css("bottom",'-'+((owlHeight/2)-20)+'px');
  	}
  	$("#gallery-home-mobile").owlCarousel({
  		singleItem: true,
	    lazyLoad : true,
	    navigation : true,
	    navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	    //afterAction : afterAction,
	    stopOnHover: true,
	    autoPlay: 8000,
	    pagination: false
  	});

	$("#product-same-category").owlCarousel({
		items: 5,
		lazyLoad: true,
		afterInit : setBoxHeight,
		navigation : true,
	    navigationText: ['<i class="fa fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa fa-long-arrow-right" aria-hidden="true"></i>'],
		pagination: false,
		autoPlay: 5000
	});

	$("#product-correlati").owlCarousel({
		items: 5,
		lazyLoad: true,
		afterInit : setBoxHeightCorrelati,
		navigation : true,
	    navigationText: ['<i class="fa fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa fa-long-arrow-right" aria-hidden="true"></i>'],
		pagination: false,
		autoPlay: 5000
	});

	function setBoxHeight(){
		var items = $("#product-same-category").find(".owl-item");
		$("#product-same-category .owl-item").each(function(){
			var	itemW = $(this).width();
			$(this).css("height", itemW);
			$(this).css("width", itemW);
		});
  	}

	function setBoxHeightCorrelati(){
		var items = $("#product-correlati").find(".owl-item");
		$("#product-correlati .owl-item").each(function(){
			var	itemW = $(this).width();
			$(this).css("height", itemW);
			$(this).css("width", itemW);
		});
  	}

	$(".image-box").lazyload({
		effect : "fadeIn"
	});
	$(".image-lazy").lazyload({
		effect : "fadeIn"
	});

	$(".search-button").click(function(){
		$(".search-form").toggleClass("show");
	});

	$(".close-search").click(function(){
		$(".search-form").toggleClass("show");
	});


  	$('.bg-clr').each(function(i){
		$(this).css("background-color",$(this).data('bgclr'));
	});

	if ($("#map").length>0) {
		loadmap();
	};


	if ($(window).width() > 767) {
		$('#navigation-block').affix({
		  offset: {
		    top: 50
		  }
		});
		$(".after-header").affix({
		  offset: {
		    top: 50
		  }
		});
		$('.logo-dark').affix({
		  offset: {
		    top: 50
		  }
		});
	}

	// if ($(window).width() < 769) {
		// $(".side-menu").addClass('open');
		// $(".expand-caret").addClass('flip');
	// }

	if ($(window).width() < 1025) {
   		$('.child-menu > a').each(function(i){
   			if ($(this).data('has-sub')==1) {
   				var goto = $(this).attr("href");
   				$(this).attr("href","#");
   				$(this).attr("data-goto", goto);
   			}
   		})
   		$(".expand-sub").click(function(){
   			if ($(this).hasClass('first-touch')) {
   				var url = $(this).data('goto');
   				$(this).attr("href",url);
   			} else {
   				$(this).addClass('first-touch');
   				$(this).parents(".area-link").addClass("open-again");
   				$(this).parent().find(".second-lev").addClass("expanded");
   			}
   		});

   		$(".area-link").click(function(){
   			$('.area-link').not(this).removeClass('open-again');
   		})
	}


	//GESTIONE ZOOM IMG MAGNIFIC
	$(".zoom-img").each(function(i){
		$(this).attr("data-effect","mfp-newspaper");
	});
	$(".zoom-img").magnificPopup({
		type : "image",
		image: {

		},
		gallery : {
			enabled : !0
		},
		removalDelay: 500, //delay removal by X to allow out-animation
	  	callbacks: {
	    	beforeOpen: function() {
      			// just a hack that adds mfp-anim class to markup
   				this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
	       		this.st.mainClass = this.st.el.attr('data-effect');
	    	}
	  	},
	  	closeOnContentClick: true,
	  	midClick: true
	})

	//GESTIONE ACCORDION FORM BIG G BAMBINO SPECIALE
	$(".toggle-accordion").click(function(e){
		e.preventDefault();
		var refId = $(this).data("expand");
		$("#"+refId).toggleClass("expand");
		$(this).toggleClass("expanded");
		if ($("#"+refId).hasClass("expand")) {
			$("#"+refId).slideDown();
		} else {
			$("#"+refId).slideUp();
		}
	})

	//NO SUBMIT SUBSCRIBE NEWSLETTER
	$(".submit-mail").click(function(e){
		e.preventDefault();
		alert("Disponibile a breve");
	})

	//FORM INSIDE
	$(".search-button-inside").click(function(){
		var str_search = $(".input-search ").val();
		$("#advsearch_string").val(str_search);
		$("#ricerca_avanzata_form").submit();
	})

	//CP CURRENT URL FORM CONTATTI
	if ($("input[name='ext_url_prod']").length>0) {
		var cUrl = document.URL;
		$("input[name='ext_url_prod']").attr("value",cUrl);
	}

	//ANI SCROLL
 	$(document).on('click', '.ani-scroll', function(event){
	    event.preventDefault();
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top-150
	    }, 500);
	});

	//POLICY COOKIE BAR MODALE
	$(".cb-policy").click(function(e){
		e.preventDefault();
		$("#cookie-link").click();
	});

	//SORT TABELLA SOTTOPRODOTTI FIGLI
	var mthis = "#table-product-childs";
	var table = $(mthis).eq(0)
	var rows = table.find('tr:gt(0)').toArray().sort(comparer($(mthis).index()))
	mthis.asc = !mthis.asc
	if (mthis.asc){rows = rows.reverse()}
	for (var i = 0; i < rows.length; i++){table.append(rows[i])}

	// $('th').click(function(){
	// 		console.log(this);
	// 		var table = $(this).parents('table').eq(0)
	// 		var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
	// 		this.asc = !this.asc
	// 		if (!this.asc){rows = rows.reverse()}
	// 		for (var i = 0; i < rows.length; i++){table.append(rows[i])}
	// })

	//FADE AFTER LOAD BODY
	$("body").addClass("animated");
	$("body").addClass("fadeIn");
	setTimeout(function(){$("body").addClass("fadeIn")}, 2000);

	//FORM VALIDATE NEWLETTER
	if ($("#formRegister").length>0) {
		//console.log("hei hei");
		$("#formRegister").validate();
	}

    new WOW().init();

	if($( ".autocomplete" ).length > 0) {
		$( ".autocomplete" ).autocomplete({
			source: "/getProduct.php",
			minLength: 2,
			select: function( event, ui ) {
				window.location.href = ui.item.url;
				//log( "Selected: " + ui.item.value + " aka " + ui.item.id );
			}
		}).autocomplete( "instance" )._renderItem = function( ul, item ) {
			if(item.img != ""){
				return $( "<li class='col-md-12 col-xs-12 mb5'>" )
				.append( "<div class='col-md-12 col-xs-12 bb1p valign-wrapper'><p class='valign-el'><img class='img-responsive img-autoload-search mr10' src='"+ item.img +"'/>" + item.title + "</p></div>" )
				.appendTo( ul );
			} else {
				return $( "<li class='col-md-12 col-xs-12 mb5 '>" )
				.append( "<div class='col-md-12 col-xs-12 bb1p'><p class='valign-el'><img class='img-responsive img-autoload-search mr10' src='http://via.placeholder.com/60x60'/>" + item.title + "</p></div>" )
				.appendTo( ul );
			}
		};
	}


	var slideout = new Slideout({
		'panel': document.getElementById('panel'),
		'menu': document.getElementById('menu'),
		'padding': 256,
		'tolerance': 70,
		'touch': false,
	});

	if ($(window).width() <= 768) {
		if($( ".toggle-button" ).length > 0) {
			//Toggle button
			var toggleButton = document.querySelectorAll('.toggle-button');
			for (i = 0; i < toggleButton.length; i++) {
				toggleButton[i].addEventListener('click', function(e) {
					e.preventDefault();
					slideout.toggle();
				});
			}
		}

		if($( ".close-slideout" ).length > 0) {
			//Toggle button
			document.querySelector('.close-slideout').addEventListener('click', function() {
				slideout.close();
			});
		}
	} else if ($(window).width() >= 768 &&  $(window).width() <= 992) {
		// do something for medium screens
	} else if ($(window).width() > 992 &&  $(window).width() <= 1200) {
		// do something for big screens
	} else  {
		// do something for huge screens
	}



	$(".hasSubNav > a").on("click", function(e){
		e.preventDefault();
		navItem = $(this).parent(".navItem");
		navItem.children(".subNavItem").toggleClass("leftIsOpen");
	});

	$(".backParentCategory").on("click", function(e){
		e.preventDefault();
		parentSubNavitem = $(this).closest(".subNavItem");
		parentSubNavitem.toggleClass("leftIsOpen");
	});
});

head.ready(function(){
	//FIX PREVIEW NEWS
	// setTimeout(function(){$("#view-all-news-home").click()},1000);
	var url_prod = $('.urlprod').attr('value');
	if (url_prod == 'url_prodotto') {
		$('.urlprod').attr('value', window.location.href);
	}
		
})

