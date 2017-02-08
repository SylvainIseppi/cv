$(function(){
	var ul=document.getElementById("burger").getElementsByTagName("ul");
	for(i=0,il=ul.length;i<il;i++){
		$(ul[i]).hide();
	}
	$("#burger").click(function(){
		ul=document.getElementById("burger").getElementsByTagName("ul");
		for(i=0,il=ul.length;i<il;i++){
		$(ul[i]).slideToggle();
	}
	});
});

  
