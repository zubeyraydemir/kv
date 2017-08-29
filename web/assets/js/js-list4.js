//------------------------------
//Picker
//------------------------------
jQuery(function() {
	jQuery( "#datepicker,#datepicker2,#datepicker3,#datepicker4,#datepicker5,#datepicker6,#datepicker7,#datepicker8" ).datepicker(jQuery.datepicker.regional[ "tr" ]);
	jQuery("#datepicker").datepicker('setDate', new Date(jQuery("#datepicker").data("date")));
	jQuery("#datepicker2").datepicker('setDate', new Date(jQuery("#datepicker2").data("date")));
	 
$('#daterangepicker').daterangepicker({
    "autoApply": true,
    "showDropdowns": true,
    "locale": {
        "format": "DD/MM/YYYY",
        "separator": " - ",
        "applyLabel": "Apply",
        "cancelLabel": "Cancel",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Custom",
        "weekLabel": "H",
        "daysOfWeek": ["Pz", "Pt", "Sa", "Çş", "Pş", "Cu", "Ct"],
        "monthNames": [
            "Ocak",
            "Şubat",
            "Mart",
            "Nisan",
            "Mayıs",
            "Haziran",
            "Temmuz",
            "Ağustos",
            "Eylül",
            "Ekim",
            "Kasım",
            "Aralık"
        ],
        "firstDay": 1
    },
    "showCustomRangeLabel": false,
    "minDate": moment(),
    "opens": "center"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});

if ($('#daterangepicker').data("sdate") != "")
{
$('#daterangepicker').data('daterangepicker').setStartDate(moment($('#daterangepicker').data("sdate")));
$('#daterangepicker').data('daterangepicker').setEndDate(moment($('#daterangepicker').data("edate")));
}


});


//------------------------------
//Counter
//------------------------------




//------------------------------
//Custom select
//------------------------------
jQuery(document).ready(function(){
	jQuery('.mySelectBoxClass').customSelect();

	/* -OR- set a custom class name for the stylable element */
	//jQuery('.mySelectBoxClass').customSelect({customClass:'mySelectBoxClass'});
});

function mySelectUpdate(){
	setTimeout(function (){
		$('.mySelectBoxClass').trigger('update');
	}, 200);
}

$(window).resize(function() {
	mySelectUpdate();
});





//------------------------------
//Niciscroll
//------------------------------
jQuery(document).ready(function() {

	var nice = jQuery("html").niceScroll({
		
		cursorcolor:"#ccc",
		//background:"#fff",	
		cursorborder :"0px solid #fff",			
		railpadding:{top:0,right:0,left:0,bottom:0},
		cursorwidth:"5px",
		cursorborderradius:"0px",
		cursoropacitymin:0,
		cursoropacitymax:0.7,
		boxzoom:true,
		autohidemode:false
	});  
	
	jQuery(".hotelstab").niceScroll({horizrailenabled:false});
	jQuery(".flightstab").niceScroll({horizrailenabled:false});
	jQuery(".vacationstab").niceScroll({horizrailenabled:false});
	jQuery(".carstab").niceScroll({horizrailenabled:false});
	jQuery(".cruisestab").niceScroll({horizrailenabled:false});
	jQuery(".flighthotelcartab").niceScroll({horizrailenabled:false});
	jQuery(".flighthoteltab").niceScroll({horizrailenabled:false});
	jQuery(".flightcartab").niceScroll({horizrailenabled:false});
	jQuery(".hotelcartab").niceScroll({horizrailenabled:false});
	
	jQuery('html').addClass('no-overflow-y');
	
});



//------------------------------
//Add rooms
//------------------------------
function addroom2(){
	$('.room2').addClass('block');
	$('.room2').removeClass('none');
	$('.addroom1').removeClass('block');
	$('.addroom1').addClass('none');
	
}
function removeroom2(){
	$('.room2').addClass('none');
	$('.room2').removeClass('block');
	
	$('.addroom1').removeClass('none');
	$('.addroom1').addClass('block');
}
function addroom3(){
	$('.room3').addClass('block');
	$('.room3').removeClass('none');
	
	$('.addroom2').removeClass('block');
	$('.addroom2').addClass('none');
}
function removeroom3(){
	$('.room3').addClass('none');
	$('.room3').removeClass('block');
	
	$('.addroom2').removeClass('none');
	$('.addroom2').addClass('block');			
}

	

	
//------------------------------
//slider parallax effect
//------------------------------
jQuery(document).ready(function($){
var $scrollTop;
var $headerheight;
var $loggedin = false;
	
if($loggedin == false){
  $headerheight = $('.navbar-wrapper2').height() - 20;
} else {
  $headerheight = $('.navbar-wrapper2').height() + 100;
}


$(window).scroll(function(){
  var $iw = $('body').innerWidth();
  $scrollTop = $(window).scrollTop();	   
	  if ( $iw < 992 ) {
	 
	  }
	  else{
	   $('.navbar-wrapper2').css({'min-height' : 110-($scrollTop/2) +'px'});
	  }
  $('#dajy').css({'top': ((- $scrollTop / 5)+ $headerheight)  + 'px' });
  //$(".sboxpurple").css({'opacity' : 1-($scrollTop/300)});
  $(".scrolleffect").css({'top': ((- $scrollTop / 5)+ $headerheight) + 50  + 'px' });
  $(".tp-leftarrow").css({'left' : 20-($scrollTop/2) +'px'});
  $(".tp-rightarrow").css({'right' : 20-($scrollTop/2) +'px'});
});

});


//------------------------------
//Animations for this page
//------------------------------
$(document).ready(function(){
	$('.tip-arrow').css({'bottom':1+'px'});
	$('.tip-arrow').animate({'bottom':-9+'px'},{ duration: 700, queue: false });	
	
	$('.bookfilters').css({'margin-top':-40+'px'});
	$('.bookfilters').animate({'margin-top':0+'px'},{ duration: 1000, queue: false });	
	
	$('.topsortby').css({'opacity':0});
	$('.topsortby').animate({'opacity':1},{ duration: 1000, queue: false });	

	$('.itemscontainer').css({'opacity':0});
	$('.itemscontainer').animate({'opacity':1},{ duration: 1000, queue: false });			
});





//------------------------------
//Scroll animations
//------------------------------
jQuery(window).scroll(function(){            
	var $iw = $('body').innerWidth();
	
		
		if(jQuery(window).scrollTop() != 0){
			jQuery('.mtnav').stop().animate({top: '0px'}, 500);
			jQuery('img.logo').stop().animate({width: '90px'}, 100);
			
			jQuery('a.logo').stop().animate({marginTop: '0px'}, 100);
			//jQuery('a.logo').toggleClass("logo");
			

		}       
		else {
			 if ( $iw < 992 ) {
			  }
			  else{
			   jQuery('.mtnav').stop().animate({top: '30px'}, 500);
			  }
			
			
			jQuery('img.logo').stop().animate({width: '120px'}, 100);
			//jQuery('a.logo').toggleClass("logo");
			jQuery('a.logo').stop().animate({marginTop: '-35px'}, 100);
	
		}
	

	//Social
	if(jQuery(window).scrollTop() >= 900){
		jQuery('.social1').stop().animate({top:'0px'}, 100);
		
		setTimeout(function (){
			jQuery('.social2').stop().animate({top:'0px'}, 100);
		}, 100);
		
		setTimeout(function (){
			jQuery('.social3').stop().animate({top:'0px'}, 100);
		}, 200);
		
		setTimeout(function (){
			jQuery('.social4').stop().animate({top:'0px'}, 100);
		}, 300);
		
		setTimeout(function (){
			jQuery('.gotop').stop().animate({top:'0px'}, 200);
		}, 400);				
		
	}       
	else {
		setTimeout(function (){
			jQuery('.gotop').stop().animate({top:'100px'}, 200);
		}, 400);	
		setTimeout(function (){
			jQuery('.social4').stop().animate({top:'-120px'}, 100);				
		}, 300);
		setTimeout(function (){
			jQuery('.social3').stop().animate({top:'-120px'}, 100);		
		}, 200);	
		setTimeout(function (){
		jQuery('.social2').stop().animate({top:'-120px'}, 100);		
		}, 100);	

		jQuery('.social1').stop().animate({top:'-120px'}, 100);			

	}
	
	
});	





//------------------------------
//Change Tabs
//------------------------------
$(document).ready(function(){

	function mySelectUpdate(){
		setTimeout(function (){
			$('.mySelectBoxClass').trigger('update');
		}, 500);
	}
	mySelectUpdate();

	$('.hotelstab2').removeClass('none');
	
	$( "#optionsRadios1" ).click(function() {
		$('.hotelstab2').removeClass('none');
		$('.flightstab2').addClass('none');
		$('.vacationstab2').addClass('none');
		$('.carstab2').addClass('none');
		$('.cruisestab2').addClass('none');
		$('.flighthotelcartab2').addClass('none');	
		$('.flighthoteltab2').addClass('none');								
		$('.flightcartab2').addClass('none');								
		$('.hotelcartab2').addClass('none');								
		mySelectUpdate();
	});
	$( "#optionsRadios2" ).click(function() {
		$('.hotelstab2').addClass('none');
		$('.flightstab2').removeClass('none');
		$('.vacationstab2').addClass('none');
		$('.carstab2').addClass('none');
		$('.cruisestab2').addClass('none');
		$('.flighthotelcartab2').addClass('none');	
		$('.flighthoteltab2').addClass('none');								
		$('.flightcartab2').addClass('none');								
		$('.hotelcartab2').addClass('none');	
		mySelectUpdate();
	});						
	$( "#optionsRadios3" ).click(function() {
		$('.hotelstab2').addClass('none');
		$('.flightstab2').addClass('none');
		$('.vacationstab2').removeClass('none');
		$('.carstab2').addClass('none');
		$('.cruisestab2').addClass('none');
		$('.flighthotelcartab2').addClass('none');	
		$('.flighthoteltab2').addClass('none');								
		$('.flightcartab2').addClass('none');								
		$('.hotelcartab2').addClass('none');									
		mySelectUpdate();
	});	
	$( "#optionsRadios4" ).click(function() {
		$('.hotelstab2').addClass('none');
		$('.flightstab2').addClass('none');
		$('.vacationstab2').addClass('none');
		$('.carstab2').removeClass('none');
		$('.cruisestab2').addClass('none');
		$('.flighthotelcartab2').addClass('none');
		$('.flighthoteltab2').addClass('none');								
		$('.flightcartab2').addClass('none');								
		$('.hotelcartab2').addClass('none');									
		mySelectUpdate();
	});	
	$( "#optionsRadios5" ).click(function() {
		$('.hotelstab2').addClass('none');
		$('.flightstab2').addClass('none');
		$('.vacationstab2').addClass('none');
		$('.carstab2').addClass('none');
		$('.cruisestab2').removeClass('none');
		$('.flighthotelcartab2').addClass('none');
		$('.flighthoteltab2').addClass('none');								
		$('.flightcartab2').addClass('none');								
		$('.hotelcartab2').addClass('none');									
		mySelectUpdate();
	});	
	$( "#optionsRadios6" ).click(function() {
		$('.hotelstab2').addClass('none');
		$('.flightstab2').addClass('none');
		$('.vacationstab2').addClass('none');
		$('.carstab2').addClass('none');
		$('.cruisestab2').addClass('none');
		$('.flighthotelcartab2').removeClass('none');
		$('.flighthoteltab2').addClass('none');								
		$('.flightcartab2').addClass('none');								
		$('.hotelcartab2').addClass('none');									
		mySelectUpdate();
	});			
	$( "#optionsRadios7" ).click(function() {
		$('.hotelstab2').addClass('none');
		$('.flightstab2').addClass('none');
		$('.vacationstab2').addClass('none');
		$('.carstab2').addClass('none');
		$('.cruisestab2').addClass('none');
		$('.flighthotelcartab2').addClass('none');
		$('.flighthoteltab2').removeClass('none');								
		$('.flightcartab2').addClass('none');								
		$('.hotelcartab2').addClass('none');									
		mySelectUpdate();
	});	
	$( "#optionsRadios8" ).click(function() {
		$('.hotelstab2').addClass('none');
		$('.flightstab2').addClass('none');
		$('.vacationstab2').addClass('none');
		$('.carstab2').addClass('none');
		$('.cruisestab2').addClass('none');
		$('.flighthotelcartab2').addClass('none');
		$('.flighthoteltab2').addClass('none');								
		$('.flightcartab2').removeClass('none');								
		$('.hotelcartab2').addClass('none');									
		mySelectUpdate();
	});		
	$( "#optionsRadios9" ).click(function() {
		$('.hotelstab2').addClass('none');
		$('.flightstab2').addClass('none');
		$('.vacationstab2').addClass('none');
		$('.carstab2').addClass('none');
		$('.cruisestab2').addClass('none');
		$('.flighthotelcartab2').addClass('none');
		$('.flighthoteltab2').addClass('none');								
		$('.flightcartab2').addClass('none');								
		$('.hotelcartab2').removeClass('none');									
		mySelectUpdate();
	});	

});







//------------------------------
// List Hover Animations
//------------------------------
$(document).ready(function($){
	


	function StartAnime2() {
		var $wlist = $('.listitem2').width();
		var $hlist = $('.listitem2').height();

		$('.liover').css({
			"width":10+"%",
			"height":10+"%",
			"background-color":"#5bbfbf",
			"position":"absolute",
			"top":$hlist/2+"px", 
			"left":$wlist/2+"px", 
			"opacity":0.0, 
		});
		$('.fav-icon').css({
			"top":$hlist/2-11+"px",
			"left":$wlist+"px",
		});
		$('.book-icon').css({
			"top":$hlist/2-11+"px",
			"left":-25+"px",
		});
		
		$( ".listitem2" )
			.mouseenter(function() {
				$(this).find('.liover').stop().animate({ "left":10+"%","top":10+"%","width":80+"%","height":80+"%","opacity":0.5  });
				$(this).find('.book-icon').stop().animate({ "left":$wlist/2-42+"px" });
				$(this).find('.fav-icon').stop().animate({ "left":$wlist/2+18+"px" });


			})
			.mouseleave(function() {
				$(this).find('.liover').stop().animate({ "left":$wlist/2+"px","top":$hlist/2+"px","width":10+"%","height":10+"%","opacity":0.0  });
				$(this).find('.book-icon').stop().animate({ "left":-25+"px" });
				$(this).find('.fav-icon').stop().animate({ "left":$wlist+"px" });
			
			});	
		
	}
	
	StartAnime2();
	
	$(window).resize(function() {
		StartAnime2();					
	});
	


});

$("#clearfilter").click(function(){ 
	$(':input','#searchForm')
	.not(':button, :submit, :reset, :hidden, #daterangepicker')
	.val('')
	.removeAttr('checked')
	.removeAttr('selected');
	hackerList.filter();
});


var hackerList =null;	

function filter(elem) {
	var filters = {};
	$.each($('#searchForm, input[name="bolge"], input[name="how"], input[name="other"]').serializeArray(), function(_, kv) {
		if (filters.hasOwnProperty(kv.name)) {
			filters[kv.name] = $.makeArray(filters[kv.name]);
			filters[kv.name].push(kv.value);
		}
		else {
			filters[kv.name] = kv.value;
		}
	});



	hackerList.filter(function(item) {
		var res = true;
		var vals = item.values();
		if (vals.name.toLowerCase().indexOf(filters.name.toLowerCase()) < 0) {
			res = false;
		} 
		if (vals.max_people_count*1 < filters.a*1)
			res = false;
		
		/*if (regs.length > 0)
		{
			var regres = false;
			for (var i = 0; i< regs.length; i++)
			{
				if (vals.region == regs[i])
					regres = true;
			}
			res = res && regres;
		}*/

		if (filters.bolge != undefined)
			{
				var regres = false;
				if ($.isArray(filters.bolge))
				{
					for (var i = 0; i< filters.bolge.length; i++)
					{
						if (vals.region == filters.bolge[i])
							regres = true;
					}
				}
				else if (vals.region == filters.bolge)
					regres = true;
				res = res && regres;
			}
			
		if (filters.how != undefined)
		{
			var regres = true;
			if ($.isArray(filters.how))
			{
				for (var i = 0; i< filters.how.length; i++)
				{
					if (vals[filters.how[i]] != "on")
						regres = false;
				}
			}
			else if (vals[filters.how] != "on")
				regres = false;
			res = res && regres;
		}

		if (filters.other != undefined)
		{
			var regres = true;
			if ($.isArray(filters.other))
			{
				for (var i = 0; i< filters.other.length; i++)
				{
					if (vals[filters.other[i]] != "on")
						regres = false;
				}
			}
			else if (vals[filters.other] != "on")
				regres = false;
			res = res && regres;
	}
		
		return res;
	});
	

	if (elem != undefined) {
		var elem = $(elem);
		var msg = hackerList.matchingItems.length + " adet villa listelendi";
		if (elem[0].type == "checkbox")
			elem.parent().notify(msg, { position:"right bottom", autoHideDelay: 1000, className: "success" });
		else
			elem.notify(msg, { position:"right bottom", autoHideDelay: 1000, className: "success" });
	}
}

jQuery(document).ready(function(jQuery){
	var options = {
    item: 'villa-item',
	sortClass: "sort",
	valueNames: [{ name: 'vldetail', attr: 'href' },{ name: 'vldetaila', attr: 'action' }, { name: 'vldetail2', attr: 'href' }, { name: 'vlpicture', attr: 'src' }, 'name', 'description', 'price', 'currency', 'hotelpreferences'],
	page: 5,
	pagination: true
	};



hackerList = new List('villa-list', options, villaValues);
$("b.price").filter(function() {return $(this).text().trim() == "0";}).parent().text("-");


$( "#searchForm input,select" ).not("#daterangepicker").bind("propertychange change keyup input paste",function() {
  filter(this);
});

//bölgeler
$("#collapse3 input").bind("propertychange change keyup input paste",function() {
  filter(this);
});

  filter();
  
hackerList.on("pageChange", function(){
	$("html, body").animate({ scrollTop: 120 }, "slow");
});
/*
jQuery('.pagination-sm').twbsPagination({
        totalPages: 35,
        visiblePages: 7,
        onPageClick: function (event, page) {
            $('#page-content').text('Page ' + page);
        },
		first: "İlk Sayfa",
		prev: "Önceki",
		next: "Sonraki",
		last: "Son Sayfa"
    });

*/

});

function lSort(obj) {
	var that = $(obj);
	hackerList.sort(that.data("name"), { order: that.val() }); 
}


jQuery(function($) {
	var minpri = villaValues[0].price;
	for (var i=0;i<villaValues.length;i++)
	{
		if (villaValues[i].price < minpri && villaValues[i].price > 0)
			minpri = villaValues[i].price;
	}

	$('.countprice').countTo({
		from: 0,
		to: minpri,
		speed: 1000,
		refreshInterval: 50,
		onComplete: function(value) {
			console.debug(this);
		}
	});
	$('.counthotel').countTo({
		from: 0,
		to: villaValues.length,
		speed: 2000,
		refreshInterval: 50,
		onComplete: function(value) {
			console.debug(this);
		}
	});			
});

$("#searchForm").submit(function() {
	$("input[name=sd]").val($('#daterangepicker').data('daterangepicker').startDate._d.sql());
	$("input[name=ed]").val($('#daterangepicker').data('daterangepicker').endDate._d.sql());
	return true;
});