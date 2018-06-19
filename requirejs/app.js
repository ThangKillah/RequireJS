require(["lib/knockout-2.2.0.debug", "formbind"],
function (ko, formbindAppObject) { 
	
	var oj = null;
	
	document.getElementById("button").onclick = function () 
	{
		oj = new formbindAppObject();
		dataModel.firstName(Math.random().toString(36).substring(7));
		dataModel.lastName(Math.random().toString(36).substring(7));
		ko.applyBindings(oj);
	} 
});
