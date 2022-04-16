//PMS:5206
//////////////////////////////////////////////////////////////////////////////
var totalScore = 0;
var errorList= new Array();
var riskProfileStr = "";

function quest(i){
	let radioButtons = document.getElementsByName("quest_"+i);
			let checked = false;
			for (let x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+1+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+i+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+i);
			}
}
function checkform(){ 
	for(let i=1; i<=10; i++){
		quest(i)
	}

	var msg = "";
	var i;
	for(i=0; i<errorList.length; i++) {
		if(i > 11) {
			msg += "And more......\n";
			break;
		}
		msg += i+1 + ". " + errorList[i] + "\n";
	}
	
	if(msg != "")	{
		msg += "\nTotal number of error(s) found = " + errorList.length;
		alert(msg);
		return false;
	}
	alert(riskProfileStr);
	document.risk_analyze.totalScore.value = totalScore;
	document.risk_analyze.riskProfileStr.value = riskProfileStr;
				
	// document.questions.totalScore.value = totalScore;
	
}
