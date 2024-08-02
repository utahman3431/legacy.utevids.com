function show(divName) {
		collapseAll();
		document.getElementById(divName).style.display = 'block';
		}

function subshow(divName) {
		if (document.getElementById(divName).className == 'hiddendiv') {
				document.getElementById(divName).className = 'visiblediv';
		}
		else {
			document.getElementById(divName).className = 'hiddendiv';
		}
		return false;
		}


function expandAll() {
	var divs = document.getElementsByClassName('schedule');
	for(i=0;i<divs.length;i++){
		divs[i].style.display='block';
	}
}

function collapseAll() {
	var divs = document.getElementsByClassName('schedule');
	for(i=0;i<divs.length;i++){
		divs[i].style.display='none';
	}
}

function ytShow(d) {
		ytcollapseAll();
		document.getElementById(d).style.display = 'block';
	}
		
function ytcollapseAll() {
	var divs = document.getElementsByClassName('ytEmbeds')
	for(i=0;i<divs.length;i++){
		divs[i].style.display='none';
		}
	}