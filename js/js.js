/*var li=document.getElementById("burger")

 var ul=li.getElementsByTagName("ul");
 for(i=0,il=ul.length;i<il;i++){
 	ul[i].style.display="none";
 }

li.addEventListener("click",function(){
	 for(i=0,il=ul.length;i<il;i++){
 		ul[i].style.display="inline-block";
 	
})};*/
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

  
