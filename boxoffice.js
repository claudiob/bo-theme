/// ZEBRA TABLE

function zebra_table() {
  if (document.getElementsByTagName) {
  	tables = document.getElementsByTagName("table");
  	for(j = 0; j < tables.length; j++) {
  	    ncols = tables[j].rows[0].cells.length;
  	    tables[j].rows[0].className='header';
  	    tables[j].rows[0].cells[0].className='first';
  	    tables[j].rows[0].cells[ncols-1].className='last';
  		for (k = 1; k < tables[j].rows.length; k = k + 1) {
  		    tables[j].rows[k].cells[0].className='first';
  		    if(k % 2)
  			    tables[j].rows[k].className='odd';
  		}
    	  var newRow = tables[j].insertRow(1);
    	  newRow.className = 'empty';
    	  var newCell = newRow.insertCell(0);
    	  newCell.colSpan = ncols;
        newCell.innerHTML = '<hr />';
  	}	    
  }  
}

/// TWITTER

// A variation of http://twitter.com/javascripts/blogger.js
// to show statuses from Twitter LISTS, rather than users (include sender!)
// and with time messages in Spanish

function relative_time(time_value) {
  var values = time_value.split(" ");
  var tvalue = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
  var parsed_date = Date.parse(tvalue);
  var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
  var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
  delta = delta + (relative_to.getTimezoneOffset() * 60);

  if (delta < 60)
    return 'ahora mismo';
  else if(delta < 120)
    return 'hace un minuto';
  else if(delta < (60*60))
    return 'hace ' + (parseInt(delta / 60)).toString() + ' minutos';
  else if(delta < (120*60))
    return 'hace una hora';
  else if(delta < (24*60*60))
    return 'hace ' + (parseInt(delta / 3600)).toString() + ' horas';
  else if(delta < (48*60*60))
    return 'hace un d&iacute;a';
  else
    return 'hace ' + (parseInt(delta / 86400)).toString() + ' d&iacute;as';
}
function twitterCallback2(twitters) {
  var statusHTML = [];
  for (var i=0; i<twitters.length; i++){
    var username = twitters[i].user.screen_name;
    var icon = twitters[i].user.profile_image_url;
    var status = twitters[i].text.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
      return '<a href="'+url+'">'+url+'</a>';
    }).replace(/\B@([_a-z0-9]+)/ig, function(reply) {
      return  reply.charAt(0)+'<a href="http://twitter.com/'+reply.substring(1)+'">'+reply.substring(1)+'</a>';
    });
    statusHTML.push('<li><img src="'+icon+'" alt="Profile image" /><a title="Twitter account" class="username" href="http://twitter.com/'+username+'/statuses/'+twitters[i].id+'">'+username+'</a><span class="time">'+relative_time(twitters[i].created_at)+'</span><span class="status">'+status+'</span></li>');
  }
  document.getElementById('twitter_update_list').innerHTML = statusHTML.join('');
}

/// FACEBOOK

function facebook_activate() {
  FB.init("eb07de4c9a3a7c4e710dadc6d44aef93");
  fan = document.createElement("fb:fan");
  fan.setAttribute("profile_id", "121079989452");
  fan.setAttribute("stream", "");
  fan.setAttribute("connections", "10");
  fan.setAttribute("width", "302");
  document.getElementById("facebook").appendChild(fan);  
}

/// SLIMSTAT

var slimstatfile = '/slimstat-js/js.stats.php';

function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			oldonload();
			func();
		};
	}
}

function SlimStat() {
	var ref = escape(document.referrer);
	var res = escape(document.URL);
	
	var img = document.createElement('img');
	img.setAttribute('id','slimstatimg');
	img.setAttribute('width','1');
	img.setAttribute('height','1');
	img.setAttribute('alt','');
	img.setAttribute('src',slimstatfile+'?ref='+ref+'&res='+res);
	if (document.documentElement) {
		document.documentElement.appendChild(img);
	} else {
		document.appendChild(img);
	}
}
