/// GENERIC

function get_object(id) {
 if (document.layers) {return document.layers[id];} 
 else if (document.all) {return document.all[id];} 
 else if (document.getElementById) {return document.getElementById(id);}
}

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

/// DEFERRED SCRIPTS (DELAY)

function import_script(url) {
  var scriptElem = document.createElement('script');
  scriptElem.setAttribute('src', url);
  scriptElem.setAttribute('type', 'text/javascript');
  document.getElementsByTagName('head')[0].appendChild(scriptElem);
}

/// SLIMSTAT

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {window.onload = func;} 
  else {window.onload = function() {oldonload(); func();};}
}

function SlimStat() {
  // NOTE: This won´t work locally where the ROOT is not /
	var ssSrc = '/slimstat2.2/stats_js.php?ref=' + encodeURIComponent(document.referrer)
		+ '&url=' + encodeURIComponent(document.URL)
		+ '&res=' + encodeURIComponent(screen.width+'x'+screen.height)
		+ '&ttl=' + encodeURIComponent(document.title)
		+ '&ts=1294484089';
	
	var ssImg = document.createElement('img');
	ssImg.setAttribute('id', 'slimstat2.2img');
	ssImg.setAttribute('src', ssSrc);
	ssImg.setAttribute('style', 'position:absolute;top:-10px;left:0');
	ssImg.setAttribute('width', '1');
	ssImg.setAttribute('height', '1');
	ssImg.setAttribute('alt', '');
	document.body.appendChild(ssImg);
}

addLoadEvent(SlimStat);

/// SLIMSTAT OLD (temporarily, store stats in BOTH systems)

var slimstatfile = '/slimstat-js/js.stats.php';

function SlimStatOld() {
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

addLoadEvent(SlimStatOld);


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
    statusHTML.push('<li><img src="'+icon+'" alt="Profile image" /><!--a title="Twitter account" class="username" href="http://twitter.com/'+username+'/statuses/'+twitters[i].id+'"-->'+username+'<!--/a--><span class="time">'+relative_time(twitters[i].created_at)+'</span><span class="status">'+status+'</span></li>');
  }
  document.getElementById('twitter_update_list').innerHTML = statusHTML.join('');
}

function activate_twitter() { // loaded with a delay to improve site performance
  import_script('http://twitter.com/BoxOfficeSpain/lists/boxoffice/statuses.json?callback=twitterCallback2&per_page=4');
}

/// FACEBOOK

function activate_facebook() { // loaded with a delay to improve site performance
  setTimeout(function() {
    FB.init("eb07de4c9a3a7c4e710dadc6d44aef93");
    fan = document.createElement("fb:fan");
    fan.setAttribute("profile_id", "121079989452");
    fan.setAttribute("stream", "");
    fan.setAttribute("connections", "10");
    fan.setAttribute("width", "302");
    document.getElementById("facebook").appendChild(fan);  
  }, 4000);
}

/// TRAILERS

function activate_trailers() { // loaded with a delay to improve site performance
  object = get_object("trailer_object");
  trailer_url = "http://www.player.filmtrailer.com/v3.4/player.swf?file=http://es.player-feed.previewnetworks.com/cinema/now-5/341100112-1/&display_title=always&menu=true&enable_link=true&default_quality=small&controlbar=over&autostart=false&backcolor=888888&frontcolor=000000&lightcolor=ffffff&screencolor=ffffff&share=0&repeat=always&shuffle=true&volume=80";
  var param = document.createElement("param");
  param.setAttribute("name", "movie");
  param.setAttribute("value", trailer_url);
  object.appendChild(param);
  object.setAttribute("data", trailer_url);
}

/// GOOGLE ANALYTICS

function activate_analytics() { // loaded with a delay to improve site performance
  import_script('http://www.google-analytics.com/ga.js');
  setTimeout(function() {
    if(typeof(_gat)=='object') {
      var pageTracker = _gat._getTracker("UA-754675-1");
      pageTracker._setDomainName("www.boxoffice.es");
      pageTracker._trackPageview();
    }
  }, 1500);
}
