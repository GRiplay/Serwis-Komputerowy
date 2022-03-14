function S(){
      $("#Photo").fadeOut(1000);
}
function Funkcja(){
    var x = document.getElementById("Photo");
    if(x.name == 1){
      x.src="Linux.png";
      x.style.padding="0 0 0 0";
      x.name="2";
    }else if(x.name == 2){
      x.src="Windows.png";
      x.style.backgroundColor = "#171C21";
      x.style.padding="8px 0 0 0";
      x.name="1";
    }
      $("#Photo").fadeIn(1000);
      setTimeout("Funkcja()",5000);
      setTimeout("S()",4000);
}
