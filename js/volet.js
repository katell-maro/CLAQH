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
