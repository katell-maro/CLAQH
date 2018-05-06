function enSavoirPlus(elmt) {
  if (typeof elmt == "string") {
      elmt = document.getElementById(elmt);
  }

  if(elmt.style.display == "block") {
      elmt.style.display = "none";
  } else {
      elmt.style.display = "block";
  }
}


function definitionVisible(elmt) {
	var aDefinir = $(elmt);
	var definition = aDefinir.children(".definition");
	definition.removeClass('cache');
}

function definitionCache(elmt) {
	var aDefinir = $(elmt);
	var definition = aDefinir.children(".definition");
	definition.addClass('cache');
}
