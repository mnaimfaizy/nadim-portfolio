var tabButtons =document.querySelectorAll(".edu_cont_1 .edu_buttons .button");
var tabPannels = document.querySelectorAll(".edu_cont_1 .edu_tabpanel");

function showPanel(panelIndex, colorCode){
	tabButtons.forEach(function(node)){
		node.style.backgroundColor="";
		node.style.color="";
	};
	tabButtons[panelIndex].style.backgroundColor=colorCode;
	tabButtons[panelIndex].style.color="white";
	tabPannels.forEach(function(node)){
		node.style.display="none";
	};
	tabPannels[panelIndex].style.display="block";
	tabButtons[panelIndex].style.backgroundColor=colorCode;


}
showPanel(0,'#f44336');