
$(document).ready( function()
{
	/*  w = $(window).width();
	$.cookie('device_width', w);*/

	$("#menu_burger").on("click", function() { menu("default"); });
	$("#mmenu_switch").on("click", function() { menu("mobile");});
	$("#mobile_menu_show > #close").on("click", function() { menu("close");});
	$("#pagination_input").on("focus", function() { $("li#input div#tooltip").fadeIn(300); } );
	$("#pagination_input").on("blur", function() { $("li#input div#tooltip").fadeOut(300); } );
	$("#pagination_input").keypress(function(e){ if(e.keyCode==13){ pagination(); } });


	$("input[name=country_value]").val("");
	$("input[name=region_value]").val("");

	/*$("#text_country").on("click", function() { geo_menu('country'); });
	$("#text_region").on("click", function() { geo_menu('region'); });
	$("#psevdo_select.country li").on("click", function() { geo_select("country", $(this).attr("data-value"), $(this).html() ); });
	$("#psevdo_select.region li").on("click", function() { geo_select("region", $(this).attr("data-value"), $(this).html() ); });*/

	/*
	$("#next.geo").on("click", function() { geo_location(); } );*/

	country = $("select[name=country]").val();
	/* if(country == 1) { $("#region_select").show(); }
	else { $("#region_select").hide(); }*/

	$("input[name=track]").change( function()
	{
		var mime = document.getElementById('fileChooserID').files[0].type;

		if(mime == "audio/mpeg" || mime == "audio/mp3")
		{
			$("#upload_track_bar #full").animate({width: "100%"}, 3000);
			$("div#veref.track div.indicator").attr("id","yes");
		}
		else
		{
			$("div#veref.track div.indicator").attr("id","no");
			$("#upload_track_bar #full").css({width: "0px"});
			$("input[name=track]").val("");
		}


	} );

	$("input[name=track].add").change( function()
	{
		var mime = document.getElementById('fileChooserID').files[0].type;

		if(mime == "audio/mpeg" || mime == "audio/mp3")
		{
			$("#upload_track_bar.add #full").animate({width: "100%"}, 3000);
			$("div#veref.track div.indicator#add").attr("id","yes");
		}
		else
		{
			$("div#veref.track div.indicator#add").attr("id","no");
			$("#upload_track_bar.add #full").css({width: "0px"});
			$("input[name=track]").val("");
		}


	} );

	$('#search_input').keydown(function (event) {

		if (event.keyCode == 13) {

			nickname = $("input[name=search]").val();
			console.log(rounds);
			$.post( "/search.php", { nickname:nickname}, function( data ) {
				rounds.forEach( function(v,i,rounds) {
					$('#block_'+rounds[i].number+' .sound-widget').html(data.rounds[i].soundcloud);
					$('#block_'+rounds[i].number+' .name-artist').html(data.nickname);
					$('#block_'+rounds[i].number+' .city-artist').html(data.city);
					if(data.vk!=''){
						$('#block_'+rounds[i].number+' .vk').html('ВКонтакте: <a style="color:#ff0080" href="'+data.vk+'">'+data.vk+'</a></br>');
					}else{
						$('#block_'+rounds[i].number+' .vk').html('');
					}
					if (data.fb!='') {
						$('#block_'+rounds[i].number+' .fb').html('Facebook: <a style="color:#ff0080" href="'+data.fb+'">'+data.fb+'</a></br>');
					}else{
						$('#block_'+rounds[i].number+' .fb').html('');
					}
					if (data.youtube!='') {
						$('#block_'+rounds[i].number+' .youtube').html('Youtube: <a style="color:#ff0080" href="'+data.youtube+'">'+data.youtube+'</a></br>');
					}else{
						$('#block_'+rounds[i].number+' .youtube').html('');
					}

					$('#block_'+rounds[i].number+' .info-trek').html(data.rounds[i].round_desc);
					$('#block_'+rounds[i].number+' .view').html('<i class="icon-eye-outline"></i>'+data.rounds[i].views);
					$('#popup-marks'+rounds[i].number+' .rating-list-wrapp').html(data.rounds[i].marks_block);
					$('#opponent_button'+rounds[i].number).attr('data-opponent-id', data.rounds[i].opponent_id);

					if(rounds[i].number==round.number){
						$('.popup-tabs-item').removeClass('active');
						$("#popup-tabs-item_"+rounds[i].number).closest('.popup-tabs-item').addClass('active');
						var block = document.getElementById("block_"+rounds[i].number);
						block.style.display += "block";

					}
					console.log(round.number);

				});






				//


				window.target_user_id=data.user_id;

				//		window.opponent_id=data.opponent_id;
				//		window.opponent_name=data.opponent_name;
				//		window.opponent_city=data.opponent_city;
				//		window.name=data.nickname;
				$.magnificPopup.open({
					items: {
						src: '#popup-track'
					},
					type: 'inline'
				});
			}, "json");

		}

	});
});


function menu(type)
{
	if(type == "default") { $("#menu_burger > ul").show(); $("#opacity").fadeIn(300); }
	if(type == "mobile") { $("#mobile_menu_show").fadeIn(300); }
	if(type == "close") { $("#mobile_menu_show").fadeOut(300); }
}

/*function if_ua()
{
country = $("select[name=country]").val();
if(country == "Украина") { $("label#region_ua").show(); $("div.region_ua").show(); } else { $("label#region_ua").hide(); $("div.region_ua").hide(); }
}
*/

$(document).on('click', '.js_signin', function(){

	var email=$('input[name="email_signin"]').val();
	var password=$('input[name="password_signin"]').val();
	console.log(email);
	console.log(password);
	$('input').removeClass('error-input');
	$('.error-txt').empty();
	$.post( "/index.php?p1=/signin/", {func: 'signin', email:email, password:password }, function( data ) {
		if(data.result.result==0){
			$('input[name="email_signin"]').addClass('error-input');
			$('input[name="password_signin"]').addClass('error-input');
			$('.err_signin').text(data.result.err);
		}else{
			window.location.href="/profile/";
		}
	}, "json");
	return false;
})

$(document).on('click', '.js_signout', function(){

	
	$.post( "/index.php?p1=/signout/", {func: 'signout' }, function( data ) {
		
			window.location.href="/";
		
	}, "json");
	return false;
})





function verification_reg()
{
	action = $("input[name=action]").val();
	//    vk_id = parseInt($("input[name=vk_id]").val());
	name = $("input[name=name]").val();
	email = $("input[name=email]").val();
	nickname = $("input[name=group_name]").val();
	password = $("input[name=pass]").val();
	country = $("select[name=country]").val();
	city = $("input[name=city]").val();
	phone = $("input[name=phone]").val();
	group_name = $("input[name=group_name]").val();
	type_group1 = $("input#type_group1").prop("checked");
	type_group2 = $("input#type_group2").prop("checked");
	//    track_name = $("input[name=track_name]").val();
	rule_accept = $("input[name=rule_accept]").prop("checked");
	//    track = $("input[name=track]").val();

	$('input').removeClass('error-input');
	$('.error-txt').empty();
	if(action == "registration")
	{
		$.ajax({
			type: "POST",
			url: "/check.php",
			dataType: "json",
			data: "email="+email+"&phone="+phone+"&nickname="+nickname+"&password="+password,
			success: function(data)
			{
				if(data.err.phone!=""){
					$('input[name="phone"]').addClass('error-input');
					$('.err_phone').text(data.err.phone);
				}else{
					$('input[name="phone"]').removeClass('error-input');
				}
				if(data.err.email!=""){
					$('input[name="email"]').addClass('error-input');
					$('.err_email').text(data.err.email);
				}else{
					$('input[name="email"]').removeClass("error-input");
				}
				if(data.err.password!=""){
					$('input[name="pass"]').addClass('error-input');
					$('.err_password').text(data.err.password);
				}else{
					$('input[name="pass"]').removeClass('error-input');
				}
				if(data.err.nickname!=""){
					$('input[name="group_name"]').addClass('error-input');
					$('.err_nickname').text(data.err.nickname);
				}else{
					$('input[name="group_name"]').removeClass('error-input');
				}
			}
		});
	}
}
//		$.post( "/check.php", { email:email,  phone:phone}, function( data ) {
//			if(data.result.result==0){
////				if(data.result.err.login!=""){
////					$('input[name="login"]').addClass('error-input');
////					$('.err_signup_login').text(data.result.err.login);
////				}else{
////					$('input[name="login"]').removeClass("error-input");
////				}
//				if(data.result.err.email!=""){
//					$('input[name="email"]').addClass('error-input');
//					$('.err_signup_email').text(data.result.err.email);
//				}else{
//					$('input[name="email"]').removeClass("error-input");
//				}
////				if(data.result.err.ref!=""){
////					$('input[name="ref"]').addClass('error-input');
////					$('.err_signup_ref').text(data.result.err.ref);
////				}else{
////					$('input[name="ref"]').removeClass("error-input");
////				}
////				if(data.result.err.password!=""){
////					$('input[name="passwd"]').addClass('error-input');
////					$('.err_signup_pass').text(data.result.err.password);
////				}else{
////					$('input[name="passwd"]').removeClass('error-input');
////				}
//				if(data.result.err.phone!=""){
//					$('input[name="phone"]').addClass('error-input');
//					$('.err_signup_phone').text(data.result.err.phone);
//				}else{
//					$('input[name="phone"]').removeClass('error-input');
//				}
//			}else{
//				$("#window.registration form").submit();
//			}
//
//		}, "json");
//	}
//

//
//
//	//            if(track.length > 3) { tr = 1; $("input[name=track]").css("background","#FFFFFF"); $("div#veref.track div.indicator").attr("id","yes");  }
//	//            else { tr = 0; $("input[name=track]").css("background","#FCD3D7"); $("div#veref.track div.indicator").attr("id","no"); }
//
//	if(name.length > 2) { n = 1; $("input[name=name]").css("background","#FFFFFF"); $("div#veref.name div.indicator").attr("id","yes");  }
//	else { n = 0; $("input[name=name]").css("background","#FCD3D7"); $("div#veref.name div.indicator").attr("id","no"); }
//
//	if(country.length > 2) { co = 1; $("select[name=country]").css("background","#FFFFFF"); $("div#veref.country div.indicator").attr("id","yes");  }
//	else { co = 0; $("select[name=country]").css("background","#FCD3D7"); $("div#veref.country div.indicator").attr("id","no"); }
//
//	if(city.length > 2) { ci = 1; $("input[name=city]").css("background","#FFFFFF"); $("div#veref.city div.indicator").attr("id","yes");  }
//	else { ci = 0; $("input[name=city]").css("background","#FCD3D7"); $("div#veref.city div.indicator").attr("id","no"); }
//
//	if(phone.length > 2) { p = 1; $("input[name=phone]").css("background","#FFFFFF"); $("div#veref.phone div.indicator").attr("id","yes");  }
//	else { p = 0; $("input[name=phone]").css("background","#FCD3D7"); $("div#veref.phone div.indicator").attr("id","no"); }
//
//	if(group_name.length > 2) { g = 1; $("input[name=group_name]").css("background","#FFFFFF"); $("div#veref.group_name div.indicator").attr("id","yes");  }
//	else { g = 0; $("input[name=group_name]").css("background","#FCD3D7"); $("div#veref.group_name div.indicator").attr("id","no"); }
//
//	if(type_group1 == true || type_group2 == true) { tg = 1; $("input[name=type_group]").css("background","#FFFFFF"); $("div#veref.type_group div.indicator").attr("id","yes");  }
//	else { tg = 0; $("input[name=type_group]").css("background","#FCD3D7"); $("div#veref.type_group div.indicator").attr("id","no"); }
//
//	//            if(track_name.length > 2) { tn = 1; $("input[name=track_name]").css("background","#FFFFFF"); $("div#veref.track_name div.indicator").attr("id","yes");  }
//	//            else { tn = 0; $("input[name=track_name]").css("background","#FCD3D7"); $("div#veref.track_name div.indicator").attr("id","no"); }
//
//	if(rule_accept == true) { r = 1; $("input[name=rule_accept]").css("background","#FFFFFF"); $("div#veref.rule div.indicator").attr("id","yes");  }
//	else { r = 1; $("input[name=rule_accept]").css("background","#FCD3D7"); $("div#veref.rule div.indicator").attr("id","no"); }
//
//	total = n+co+ci+p+g+tg+r;
//	if(total == 7) {   $("#window.registration form").submit();  }
//
//
//



function verification_update()
{
	action = $("input[name=action]").val();
	round = $("input[name=round]").val();
	vk_id = parseInt($("input[name=vk_id]").val());
	track_name = $("input[name=track_name]").val();
	track = $("input[name=track]").val();


	if(action == "update")
	{

		if(track.length > 3) { tr = 1; $("input[name=track]").css("background","#FFFFFF"); $("div#veref.track div.indicator").attr("id","yes");  }
		else { tr = 0; $("input[name=track]").css("background","#FCD3D7"); $("div#veref.track div.indicator").attr("id","no"); }


		if(track_name.length > 2) { tn = 1; $("input[name=track_name]").css("background","#FFFFFF"); $("div#veref.track_name div.indicator").attr("id","yes");  }
		else { tn = 0; $("input[name=track_name]").css("background","#FCD3D7"); $("div#veref.track_name div.indicator").attr("id","no"); }

		total = tr+tn;
		if(total == 2) {   $("#window.registration form#update").submit();  }



	} else { alert("Системная ошибка"); }
}


function verification_add()
{
	action = $("input[name=action].add").val();
	round = $("input[name=round].add").val();
	vk_id = parseInt($("input[name=vk_id].add").val());
	track_name = $("input[name=track_name].add").val();
	track = $("input[name=track].add").val();
	round_description = $("input[name=round_description].add").val();
	if(action == "add")
	{
		if(track.length > 3) { tr = 1; $("input[name=track].add").css("background","#FFFFFF"); $("div#veref.track div.indicator#add").attr("id","yes");  }
		else { tr = 0; $("input[name=track].add").css("background","#FCD3D7"); $("div#veref.track div.indicator#add").attr("id","no"); }


		if(track_name.length > 2) { tn = 1; $("input[name=track_name].add").css("background","#FFFFFF"); $("div#veref.track_name div.indicator#add").attr("id","yes");  }
		else { tn = 0; $("input[name=track_name].add").css("background","#FCD3D7"); $("div#veref.track_name div.indicator#add").attr("id","no"); }

		total = tr+tn;
		if(total == 2) {   $("#window.registration form#add").submit();  }
	} else { alert("Системная ошибка"); }
}



function pagination()
{
	current_url = window.location.href;
	arr = current_url.split('?');

	page = parseInt($("#pagination_input").val());
	if(page > 1) { $("#pagination_input").css("border-color", "#FFFFFF"); window.location.href = arr[0]+"?page="+page; }
	else { $("#pagination_input").css("border-color", "#F50068"); }

	if (page == null) { $("#pagination_input").css("border-color", "#FFFFFF"); }
}

function geo_menu(type)
{
	if(type == "country") { $("ul#psevdo_options.country").show(); }
	if(type == "region") { $("ul#psevdo_options.region").show(); }
}

function geo_select(type, data, title)
{
	if(type == "country")
	{
		$("input[name=country_select]").val(data);
		$("#psevdo_select.country #text_country").html(title);
		$("ul#psevdo_options.country").css("display","none");
		if(data == "ua/") { $("#psevdo_select.region").show(); } else { $("#psevdo_select.region").hide(); $("input[name=region_select]").val(""); $("#psevdo_select.region #text_region").html("Выбрать регион"); }
		createNextUrl();
	}

	if(type == "region")
	{
		$("input[name=region_select]").val(data);
		$("#psevdo_select.region #text_region").html(title);
		$("ul#psevdo_options.region").css("display","none");
		createNextUrl();
	}

}

function createNextUrl()
{
	round = $("input[name=round_select").val();
	country = $("input[name=country_select]").val();
	region = $("input[name=region_select]").val();
	alert(round);

	if(country == "ua/")
	{
		if(region.length > 2)
		{
			url = "/table/"+round+country+region;
			$("a#next.geo").attr("href", url).css({"background-color":"#ED008D", "cursor":"pointer"});

		} else { $("a#next.geo").attr("href", "#").css({"background-color":"#313131", "cursor":"default"}); }
	}
	else
	{
		if(country.length > 1)
		{
			url = "/table/"+round+country+region;
			/*  $("a#next.geo").attr("href", url).css({"background-color":"#ED008D", "cursor":"pointer"});*/
		}
	}
}

/*function geo_region(region)
{
$("#psevdo_select.region #text_region").html(region);
$("ul#psevdo_options.region").css("display","none");
$("input[name=region_select]").val(region);
}

function geo_location()
{
round = $("input[name=round_select]").val();
country = $("input[name=country_select").val();
region = $("input[name=region_select").val();
url = "";

var country_arr = {"Украина":"1", "Россия":"2", "Белоруссия":"3", "Молдавия":"4", "Азербайджан":"5", "Армения":"6", "Грузия":"7", "Казахстан":"8", "Киргизия":"9", "Таджикистан":"10", "Туркмения":"11", "Узбекистан":"12", "Другая":"13"};
var region_arr = {"Центр":"14", "Восток":"15", "Юг":"16", "Запад":"17", "Север":"18"}

if(country.length > 1)
{
if(country_arr[country] == "1")
{
if(region.length > 1)
{
url = "http://2017.pit-battle.com/table/"+round+"/?c=1&r="+region_arr[region];

} else { alert("Выберете регион"); }
}
else { url = "http://2017.pit-battle.com/table/"+round+"/?c="+country_arr[country]; }

} else { alert("Выберете страну"); }

if(url.length > 0) { window.location.href = url; }

}
*/
function like(round, user)
{
	//Проверяем авторизированы ли ВК
	social_id = parseInt($.cookie('social_id'));
	track_id = "r"+round+"_"+user;
	if(social_id > 0)
	{
		$.ajax({
			type: "POST",
			url: "/application/models/model_table.php",
			dataType: "json",
			data: "ajaxfn=like&round="+round+"&user="+user,
			success: function(result)
			{
				if(result == "error") { alert("System Error"); }
				else
				{
					likes = parseInt(result);
					$("button#like[data-id="+track_id+"]").html(likes);
				}
				/*listening = parseInt(result);
				listening = listening+1;
				$("button[data-id="+track_id+"]").html(listening);*/
			}
		});
	}
	else { /*$("#opacity_alarm.vk").fadeIn(300); */}
}
$(document).on('click', '.js_track_popup',function popup()
{
	var user_id = $(this).attr('user_id');
	var name = $(this).attr('name');
	var city = $(this).attr('city');
	var opponent_id = $(this).attr('opponent_id');
	var opponent_name = $(this).attr('opponent_name');
	var opponent_city = $(this).attr('opponent_city');
	console.log(opponent_id);
	$.post( "/get_track_info.php", { user_id:user_id,data_array:data_array, opponent_id:opponent_id}, function( data ) {
		$('#block_4 .sound-widget').html(data.soundcloud);
		$('#block_4 .name-artist').html(name);
		$('#block_4 .city-artist').html(city);
		$('#block_4 .view').html('<i class="icon-eye-outline"></i>'+data.views);
		$('#block_3 .sound-widget').html(data.soundcloud_3);
		$('#block_3 .name-artist').html(name);
		$('#block_3 .city-artist').html(city);
		$('#block_3 .view').html('<i class="icon-eye-outline"></i>'+data.views);

		window.name=name;
		window.city=city;
		window.target_user_id=data.user_id;
		window.opponent_id=opponent_id;
		window.opponent_name=opponent_name;
		window.opponent_city=opponent_city;
		window.marks_block=data.marks_block;
		window.marks3=data.marks3;

		$.magnificPopup.open({
			items: {
				src: '#popup-track'
			},
			type: 'inline'
		});
	}, "json");
});

$(document).on('click', '.js_first_track_popup',function popup()
{
	var user_id = $(this).data("user-id");
	$.post( "/get_first_track_info.php", { user_id:user_id,rounds:rounds}, function( data ) {
		rounds.forEach( function(v,i,rounds) {
			$('#block_'+rounds[i].number+' .name-artist').html(data.nickname);
			$('#block_'+rounds[i].number+' .city-artist').html(data.city);
			if(data.vk!=''){
				$('#block_'+rounds[i].number+' .vk').html('ВКонтакте: <a style="color:#ff0080" href="'+data.vk+'">'+data.vk+'</a></br>');
			}else{
				$('#block_'+rounds[i].number+' .vk').html('');
			}
			if (data.fb!='') {
				$('#block_'+rounds[i].number+' .fb').html('Facebook: <a style="color:#ff0080" href="'+data.fb+'">'+data.fb+'</a></br>');
			}else{
				$('#block_'+rounds[i].number+' .fb').html('');
			}
			if (data.youtube!='') {
				$('#block_'+rounds[i].number+' .youtube').html('Youtube: <a style="color:#ff0080" href="'+data.youtube+'">'+data.youtube+'</a></br>');
			}else{
				$('#block_'+rounds[i].number+' .youtube').html('');
			}
			if(data.rounds[i].round_desc=='' && data.rounds[i].soundcloud==''){
				$('#block_'+rounds[i].number+' .info-trek').html('Участник ещё не загрузил трек');
				$('#block_'+rounds[i].number+' .sound-widget').html('');
			}else if(data.rounds[i].round_desc=='' && data.rounds[i].soundcloud!='' && rounds[i].number==9){
				$('#block_'+rounds[i].number+' .info-trek').html('Если нравится мой трек - ставь Like');
				$('#block_'+rounds[i].number+' .sound-widget').html(data.rounds[i].soundcloud);
			}else if(data.rounds[i].round_desc=='' && data.rounds[i].soundcloud!='' && rounds[i].number!=9){
				$('#block_'+rounds[i].number+' .info-trek').html(rounds[i].number+' раунд   |   '+rounds[i].title);
				$('#block_'+rounds[i].number+' .sound-widget').html(data.rounds[i].soundcloud);
			}else{
				$('#block_'+rounds[i].number+' .info-trek').html(data.rounds[i].round_desc);
				$('#block_'+rounds[i].number+' .sound-widget').html(data.rounds[i].soundcloud);
			}
			if(data.rounds[i].views==0){
				$('#block_'+rounds[i].number+' .view').html('');
			}else{
				$('#block_'+rounds[i].number+' .view').html('<i class="icon-eye-outline"></i>'+data.rounds[i].views);
			}
			var block = document.getElementById("block_"+rounds[i].number);
			$('#popup-marks'+rounds[i].number+' .rating-list-wrapp').html(data.rounds[i].marks_block);
			$('#opponent_button'+rounds[i].number).attr('data-opponent-id', data.rounds[i].opponent_id);
			
			block.style.display = "none";
			if(rounds[i].number==9){

				block.style.display = "block";
				$('.popup-tabs-item').removeClass('active');
				$("#popup-tabs-item_"+9).closest('.popup-tabs-item').addClass('active');

			}
		});
		window.target_user_id=data.user_id;
		$.magnificPopup.open({
			items: {
				src: '#popup-track'
			},
			type: 'inline'
		});
	}, "json");
});


$(document).on('click', '.js_opponent_track_popup',function popup()
{
	var opponent_id=$(this).attr("data-opponent-id");
	console.log("USER ID "+opponent_id);
	$.post( "/get_first_track_info.php", {user_id:opponent_id,rounds:rounds}, function( data ) {
		rounds.forEach( function(v,i,rounds) {

			$('#block_'+rounds[i].number+' .name-artist').html(data.nickname);
			$('#block_'+rounds[i].number+' .city-artist').html(data.city);
			if(data.vk!=''){
				$('#block_'+rounds[i].number+' .vk').html('ВКонтакте: <a style="color:#ff0080" href="'+data.vk+'">'+data.vk+'</a></br>');
			}else{
				$('#block_'+rounds[i].number+' .vk').html('');
			}
			if (data.fb!='') {
				$('#block_'+rounds[i].number+' .fb').html('Facebook: <a style="color:#ff0080" href="'+data.fb+'">'+data.fb+'</a></br>');
			}else{
				$('#block_'+rounds[i].number+' .fb').html('');
			}
			if (data.youtube!='') {
				$('#block_'+rounds[i].number+' .youtube').html('Youtube: <a style="color:#ff0080" href="'+data.youtube+'">'+data.youtube+'</a></br>');
			}else{
				$('#block_'+rounds[i].number+' .youtube').html('');
			}
			if(data.rounds[i].round_desc=='' && data.rounds[i].soundcloud==''){
				$('#block_'+rounds[i].number+' .info-trek').html('Участник ещё не загрузил трек');
				$('#block_'+rounds[i].number+' .sound-widget').html('');
			}else if(data.rounds[i].round_desc=='' && data.rounds[i].soundcloud!='' && rounds[i].number==9){
				$('#block_'+rounds[i].number+' .info-trek').html('Если нравится мой трек - ставь Like');
				$('#block_'+rounds[i].number+' .sound-widget').html(data.rounds[i].soundcloud);
			}else if(data.rounds[i].round_desc=='' && data.rounds[i].soundcloud!='' && rounds[i].number!=9){
				$('#block_'+rounds[i].number+' .info-trek').html(rounds[i].number+' раунд   |   '+rounds[i].title);
				$('#block_'+rounds[i].number+' .sound-widget').html(data.rounds[i].soundcloud);
			}else{
				$('#block_'+rounds[i].number+' .info-trek').html(data.rounds[i].round_desc);
				$('#block_'+rounds[i].number+' .sound-widget').html(data.rounds[i].soundcloud);
			}
			if(data.rounds[i].views==0){
				$('#block_'+rounds[i].number+' .view').html('');
			}else{
				$('#block_'+rounds[i].number+' .view').html('<i class="icon-eye-outline"></i>'+data.rounds[i].views);
			}
			$('#popup-marks'+rounds[i].number+' .rating-list-wrapp').html(data.rounds[i].marks_block);
			$('#opponent_button'+rounds[i].number).attr('data-opponent-id', data.rounds[i].opponent_id);
			//			if(rounds[i].number==round.number){
			//				$('.popup-tabs-item').removeClass('active');
			//				$("#popup-tabs-item_"+rounds[i].number).closest('.popup-tabs-item').addClass('active');
			//				var block = document.getElementById("block_"+rounds[i].number);
			//				block.style.display += "block";
			//
			//			}
			//console.log(round.number);

		});

		window.target_user_id=data.user_id;

		$.magnificPopup.open({
			items: {
				src: '#popup-track'
			},
			type: 'inline'
		});
	}, "json");
});



$(document).on('click', '.js_first_opponent_track_popup',function popup()
{console.log("ID юзера: "+window.opponent_id);

$.post( "/get_first_track_info.php", {user_id:window.opponent_id,data_array:data_array}, function( data ) {
	console.log(window.opponent_name);

	$('#block_4 .sound-widget').html(data.soundcloud);
	$('#block_4 .name-artist').html(window.opponent_name);
	$('#block_4 .city-artist').html(window.opponent_city);
	$('#block_4 .view').html('<i class="icon-eye-outline"></i>'+data.views);
	$('#block_3 .sound-widget').html(data.soundcloud_3);
	$('#block_3 .name-artist').html(window.opponent_name);
	$('#block_3 .city-artist').html(window.opponent_city);
	$('#block_3 .view').html('<i class="icon-eye-outline"></i>'+data.views);
	var user_id =window.target_user_id;
	var name = window.name;
	var city = window.city;
	var opponent_id = window.opponent_id;
	var opponent_name = window.opponent_name;
	var opponent_city = window.opponent_city;


	window.name=opponent_name;
	window.city=opponent_city;
	window.target_user_id=window.opponent_id;
	window.opponent_id=user_id;
	window.opponent_name=name;
	window.opponent_city=city;
	window.marks_block=data.marks_block;
	window.marks3=data.marks3;

	$.magnificPopup.open({
		items: {
			src: '#popup-track'
		},
		type: 'inline'
	});
}, "json");
});


$(document).on('click', '.js_set_like',function popup()
{
	$.post( "/ajax_like.php", {target_user_id:window.target_user_id,social_id:social_id}, function( data ) {
		$('#popup-like .desc').html(data.res);
		$('#popup-like .btn-wrapp').html('<a href="/" class="btn btn-close-like">ОК</a>');
		$('#popup-like').css('display', 'block');
	}, "json");
});

$(document).on('click', '.js_set_respect',function popup()
{
	$.post( "/ajax_like.php", {target_user_id:window.target_user_id,social_id:social_id}, function( data ) {
		$('#popup-like .desc').html(data.respect);
		$('#popup-like .icons').html('');
		$('#popup-like .btn-login').attr("href",data.link);
		$('#popup-like .btn-login').html(data.button);
		$('#popup-like').css('display', 'block');

	}, "json");
});




$(document).on('click', '.js_get_next',function popup()
{
	var rounds = document.getElementById("rounds"); // Получаем список раундов
	var round = rounds.options[rounds.selectedIndex].value; //Получаем значение выбранного раунда
	var countries = document.getElementById("countries"); // Получаем список стран
	var country= countries.options[countries.selectedIndex].value; //Получаем значение выбранной страны
	window.location.href="/table/"+round+country;  //Формируем ссылку для перехода и переходим
});

$(document).on('click', '.js_show_marks',function popup_marks()
{ var round_number = $(this).data("round-number");
//	$('#popup-marks .rating-list-wrapp').html(window.marks_block);
$('#popup-marks'+round_number).closest('.popup-trek-wrapp').find('.rating-list').css('display', 'block');
});

$(document).on('click', '.js_show_marks3',function popup_marks()
{
	//	$('#popup-marks3 .rating-list-wrapp').html(window.marks3);
	$('#popup-marks3').closest('.popup-trek-wrapp').find('.rating-list').css('display', 'block');
});

function show_submenu(type)
{
	if(type == "country") { $("ul#psevdo_options.country").show(); }
	if(type == "region") { $("ul#psevdo_options.region").show(); }
	if(type == "round") { $("ul#psevdo_options.round").show(); }
}

function createNextLink(type, value, text)
{
	if (type == "round")
	{
		$("ul#psevdo_options.round").hide();
		$("input[name=round_value]").val(value);
		$("span#text_round").html(text);
		round = $("input[name=round_select").val();
		$("a#next.geo").attr("href", "pitbull.sxss.com.ua/table/"+round+value).css({"background-color":"#ED008D", "cursor":"pointer"});
	}

	if(type == "country")
	{
		$("ul#psevdo_options.country").hide();
		$("input[name=country_value]").val(value);
		round = $("input[name=round_select").val();
		$("span#text_country").html(text);

		if(value == "ua/")
		{
			$("div#psevdo_select.region").show();
			$("a#next.geo").attr("href", "#").css({"background-color":"#313131", "cursor":"default"});
			$("span#text_region").html("Выбрать регион");
		}
		else
		{
			$("div#psevdo_select.region").hide();
			$("input[name=region_value]").val("");
			round = $("input[name=round_select").val();
			$("a#next.geo").attr("href", "/table/"+round+value).css({"background-color":"#ED008D", "cursor":"pointer"});
		}
	}

	if (type == "region")
	{
		$("ul#psevdo_options.region").hide();
		$("input[name=region_value]").val(value);
		round = $("input[name=round_select").val();
		$("span#text_region").html(text);
		$("a#next.geo").attr("href", "/table/"+round+"ua/"+value).css({"background-color":"#ED008D", "cursor":"pointer"});
	}
}

function search_mobile()
{

	$("#mobile_search_show").fadeIn(300);
}

function savePersonalInfo()
{
	fio = $("input[name=personal_fio]").val();
	phone = $("input[name=personal_phone]").val();
	email = $("input[name=personal_email]").val();
	nickname = $("input[name=personal_nickname]").val();

	if(fio.length > 2)
	{
		$.ajax({
			type: "POST",
			url: "/application/models/model_personal.php",
			dataType: "json",
			data: "ajaxfn=personalInfo&fio="+fio+"&phone="+phone+"&email="+email+"&nickname="+nickname,
			success: function(result)
			{
				if(result.change == "good") { $("p#result_change.green").css("opacity", "1"); }
			}
		});
	} else { $("input[name=personal_fio]").css("border-color", "red"); $("p#result_change.green").css("opacity", "0"); }

}

function updatePersonalPass()
{
	$("p#result_change[data-type='pass']").html("").css("opacity", "0").css("color", "red");

	oldpass = $("input[name=oldpass]").val();
	newpass = $("input[name=newpass]").val();
	repeatpass = $("input[name=repeatpass]").val();

	if(oldpass.length > 2 && newpass.length > 2 && repeatpass.length > 2)
	{
		$.ajax({
			type: "POST",
			url: "/application/models/model_personal.php",
			dataType: "json",
			data: "ajaxfn=personalPass&oldpass="+oldpass+"&newpass="+newpass+"&repeatpass="+repeatpass,
			success: function(result)
			{
				if(result == "good") { $("p#result_change.green[data-type='pass']").html("Успешно сохранено").css("opacity", "1").css("color", "green"); }
				if(result == "bad1") { $("p#result_change[data-type='pass']").html("Системная ошибка").css("opacity", "1").css("color", "red"); }
				if(result == "bad2") { $("p#result_change[data-type='pass']").html("Неверный пароль").css("opacity", "1").css("color", "red"); }
				if(result == "bad3") { $("p#result_change[data-type='pass']").html("Пароли не совпадают").css("opacity", "1").css("color", "red"); }
			}
		});
	} else
	{
		$("p#result_change[data-type='pass']").html("Заполните все поля").css("opacity", "1").css("color", "red");
	}
}

function showResult(id)
{
	$("#jResultCard[data-id=u"+id+"]").show();
	$("#backRJ[data-id=u"+id+"]").show();
	$("#jResultCardContent[data-id=u"+id+"]").show();
}


function hideResult(id)
{
	$("#jResultCard[data-id=u"+id+"]").hide();
	$("#backRJ[data-id=u"+id+"]").hide();
	$("#jResultCardContent[data-id=u"+id+"]").hide();
}


$('.btn-close-like').on('click', function () {
	$('#popup-like').css('display', 'none');
	return false;
});

$(document).on('click', '.js_change_personal', function(){
	var name=$('input[name="name"]').val();
	var nickname=$('input[name="nickname"]').val();
	var email=$('input[name="email"]').val();
	var phone=$('input[name="phone"]').val();
	console.log(name);
	console.log(nickname);
	console.log(email);
	console.log(phone);
	$('input').removeClass('error-input');
	$('.error-txt').empty();

	$.post( "/index.php?p1=/changePersonal/", {func:'changePersonal', name:name, email:email, phone:phone,nickname:nickname}, function( data ) {
		if(data.result.result==0){
			if(data.result.err.nickname!=""){
				$('input[name="nickname"]').addClass('error-input');
				$('.err_change_nickname').text(data.result.err.nickname);
			}else{
				$('input[name="nickname"]').removeClass("error-input");
			}
			if(data.result.err.email!=""){
				$('input[name="email"]').addClass('error-input');
				$('.err_change_email').text(data.result.err.email);
			}else{
				$('input[name="email"]').removeClass("error-input");
			}
			if(data.result.err.phone!=""){
				$('input[name="phone"]').addClass('error-input');
				$('.err_change_phone').text(data.result.err.phone);
			}else{
				$('input[name="phone"]').removeClass('error-input');
			}
		}else{
			window.location.href="/profile/";
		}

	}, "json");
});



$(document).on('click', '.js_change_social', function(){
	var vk=$('input[name="vk"]').val();
	var fb=$('input[name="fb"]').val();
	var youtube=$('input[name="youtube"]').val();
	$.post( "/index.php?p1=/changeSocial/", {func:'changeSocial',vk:vk,fb:fb,youtube:youtube}, function( data ) {
		window.location.href="/profile/";
	}, "json");
});

$(document).on('click', '.js_restore', function(){
	var email_restore=$('input[name="email_restore"]').val();
	$.post( "/index.php?p1=/restorePassword/", {func:'restorePassword',email_restore:email_restore}, function( data ) {
		if(data.result.result==0){
			$('input[name="email_restore"]').addClass('error-input');
			$('.err_restore').text(data.result.err);
		}else{
			window.location.href="/";
		}

	}, "json");
});


$(document).on('click', '.js_add_track', function(){
	var soundcloud=$('input[name="soundcloud"]').val();
	var track_name=$('input[name="track_name"]').val();
	var round_desc=$('textarea[name="round_desc"]').val();
	$.post( "/index.php?p1=/addTrack/", {func:'addTrack',soundcloud:soundcloud, track_name:track_name, round_desc:round_desc}, function( data ) {
		if(data.result.result==0){
			$('input[name="soundcloud"]').addClass('error-input');
			$('.err_soundcloud').text(data.result.err);
		}else{
			window.location.href="/profile/";
		}

	}, "json");
});

$(document).on('click', '.js_change_password', function(){
	var old_password=$('input[name="old_password"]').val();
	var new_password1=$('input[name="new_password1"]').val();
	var new_password2=$('input[name="new_password2"]').val();

	$('input').removeClass('error-input');
	$('.error-txt').empty();

	$.post( "/index.php?p1=/changePassword/", {func:'changePassword', old_password:old_password, new_password1:new_password1, new_password2:new_password2}, function( data ) {
		if(data.result.result==0){
			if(data.result.err.old_password!=""){
				$('input[name="old_password"]').addClass('error-input');
				$('.err_change_old_password').text(data.result.err.err_change_old_password);
			}else{
				$('input[name="old_password"]').removeClass("error-input");
			}
			if(data.result.err.new_password1!=""){
				$('input[name="new_password1"]').addClass('error-input');
				$('.err_change_new_password1').text(data.result.err.err_change_new_password1);
			}else{
				$('input[name="new_password1"]').removeClass("error-input");
			}
			if(data.result.err.new_password2!=""){
				$('input[name="new_password2"]').addClass('error-input');
				$('.err_change_new_password2').text(data.result.err.err_change_new_password2);
			}else{
				$('input[name="new_password2"]').removeClass('error-input');
			}
		}else{
			window.location.href="/profile/";
		}

	}, "json");
});

