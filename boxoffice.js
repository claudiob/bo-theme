/* Are you JS curious? Check boxoffice-max.js for the non-minified version! */  function get_object(a){if(document.layers){return document.layers[a]}else{if(document.all){return document.all[a]}else{if(document.getElementById){return document.getElementById(a)}}}}function zebra_table(){if(document.getElementsByTagName){tables=document.getElementsByTagName("table");for(j=0;j<tables.length;j++){ncols=tables[j].rows[0].cells.length;tables[j].rows[0].className="header";tables[j].rows[0].cells[0].className="first";tables[j].rows[0].cells[ncols-1].className="last";for(k=1;k<tables[j].rows.length;k=k+1){tables[j].rows[k].cells[0].className="first";if(k%2){tables[j].rows[k].className="odd"}}var a=tables[j].insertRow(1);a.className="empty";var b=a.insertCell(0);b.colSpan=ncols;b.innerHTML="<hr />"}}}function import_script(b){var a=document.createElement("script");a.setAttribute("src",b);a.setAttribute("type","text/javascript");document.getElementsByTagName("head")[0].appendChild(a)}function addLoadEvent(a){var b=window.onload;if(typeof window.onload!="function"){window.onload=a}else{window.onload=function(){b();a()}}}function SlimStat(){var b="http://dreamhost.boxoffice.es/slimstat2.2/stats_js.php?ref="+encodeURIComponent(document.referrer)+"&url="+encodeURIComponent(document.URL)+"&res="+encodeURIComponent(screen.width+"x"+screen.height)+"&ttl="+encodeURIComponent(document.title)+"&ts=1294484089";var a=document.createElement("img");a.setAttribute("id","slimstat2.2img");a.setAttribute("src",b);a.setAttribute("style","position:absolute;top:-10px;left:0");a.setAttribute("width","1");a.setAttribute("height","1");a.setAttribute("alt","");document.body.appendChild(a)}addLoadEvent(SlimStat);var slimstatfile="http://dreamhost.boxoffice.es/slimstat-js/js.stats.php";function SlimStatOld(){var c=escape(document.referrer);var b=escape(document.URL);var a=document.createElement("img");a.setAttribute("id","slimstatimg");a.setAttribute("width","1");a.setAttribute("height","1");a.setAttribute("alt","");a.setAttribute("src",slimstatfile+"?ref="+c+"&res="+b);if(document.documentElement){document.documentElement.appendChild(a)}else{document.appendChild(a)}}addLoadEvent(SlimStatOld);function relative_time(d){var b=d.split(" ");var c=b[1]+" "+b[2]+", "+b[5]+" "+b[3];var a=Date.parse(c);var e=(arguments.length>1)?arguments[1]:new Date();var f=parseInt((e.getTime()-a)/1000);f=f+(e.getTimezoneOffset()*60);if(f<60){return"ahora mismo"}else{if(f<120){return"hace un minuto"}else{if(f<(60*60)){return"hace "+(parseInt(f/60)).toString()+" minutos"}else{if(f<(120*60)){return"hace una hora"}else{if(f<(24*60*60)){return"hace "+(parseInt(f/3600)).toString()+" horas"}else{if(f<(48*60*60)){return"hace un d&iacute;a"}else{return"hace "+(parseInt(f/86400)).toString()+" d&iacute;as"}}}}}}}function twitterCallback2(c){var a=[];for(var d=0;d<c.length;d++){var f=c[d].user.screen_name;var e=c[d].user.profile_image_url;var b=c[d].text.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g,function(g){return'<a href="'+g+'">'+g+"</a>"}).replace(/\B@([_a-z0-9]+)/ig,function(g){return g.charAt(0)+'<a href="http://twitter.com/'+g.substring(1)+'">'+g.substring(1)+"</a>"});a.push('<li><img src="'+e+'" alt="Profile image" /><!--a title="Twitter account" class="username" href="http://twitter.com/'+f+"/statuses/"+c[d].id+'"-->'+f+'<!--/a--><span class="time">'+relative_time(c[d].created_at)+'</span><span class="status">'+b+"</span></li>")}document.getElementById("twitter_update_list").innerHTML=a.join("")}function activate_twitter(){import_script("http://api.twitter.com/1/BoxOfficeSpain/lists/boxoffice/statuses.json?callback=twitterCallback2&per_page=4")}function activate_facebook(){import_script("http://connect.facebook.net/es_ES/all.js#xfbml=1")}function activate_trailers(){object=get_object("trailer_object");trailer_url="http://www.player.filmtrailer.com/v3.4/player.swf?file=http://es.player-feed.previewnetworks.com/cinema/now-5/341100112-1/&display_title=always&menu=true&enable_link=true&default_quality=small&controlbar=over&autostart=false&backcolor=888888&frontcolor=000000&lightcolor=ffffff&screencolor=ffffff&share=0&repeat=always&shuffle=true&volume=80";var a=document.createElement("param");a.setAttribute("name","movie");a.setAttribute("value",trailer_url);object.appendChild(a);object.setAttribute("data",trailer_url)}function activate_analytics(){import_script("http://www.google-analytics.com/ga.js");setTimeout(function(){if(typeof(_gat)=="object"){var a=_gat._getTracker("UA-754675-1");a._trackPageview()}},1500)};