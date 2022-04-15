//PMS:5206
//////////////////////////////////////////////////////////////////////////////
function checkform(){ 
	var totalScore = 0;
	var errorList= new Array();
	var riskProfileStr = "";
	
			var radioButtons = document.getElementsByName("quest_"+1);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+1+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+1+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+1);
			}
	
			var radioButtons = document.getElementsByName("quest_"+2);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+2+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+2+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+2);
			}
	
			var radioButtons = document.getElementsByName("quest_"+3);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+3+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+3+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+3);
			}
	
			var radioButtons = document.getElementsByName("quest_"+4);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+4+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+4+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+4);
			}
	
			var radioButtons = document.getElementsByName("quest_"+5);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+5+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+5+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+5);
			}
	
			var radioButtons = document.getElementsByName("quest_"+6);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+6+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+6+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+6);
			}
	
			var radioButtons = document.getElementsByName("quest_"+7);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+7+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+7+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+7);
			}
	
			var radioButtons = document.getElementsByName("quest_"+8);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+8+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+8+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+8);
			}
	
			var radioButtons = document.getElementsByName("quest_"+9);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+9+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+9+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+9);
			}
	
			var radioButtons = document.getElementsByName("quest_"+10);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+10+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+10+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+10);
			}
	
			var radioButtons = document.getElementsByName("quest_"+11);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+11+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+11+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+11);
			}
	
			var radioButtons = document.getElementsByName("quest_"+12);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+12+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+12+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+12);
			}
	
			var radioButtons = document.getElementsByName("quest_"+13);
			var checked = false;
			for (var x = 0; x < radioButtons.length; x ++) {
				if (radioButtons[x].checked) {
					checked = true;  
			    	totalScore += Number(radioButtons[x].value);
			    	//alert(document.getElementById("hid_quest_"+13+"_"+x).value);
			    	riskProfileStr += document.getElementById("hid_quest_"+13+"_"+x).value +"`";
			  	}
			}
			if(!checked){
				errorList.push("Please select answer for question "+13);
			}
	

	var msg = "";
	var i;
	for(i=0; i<errorList.length; i++) {
		if(i > 14) {
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
	document.questions.totalScore.value = totalScore;
	
			if(totalScore!=0 && totalScore >= 13 && totalScore <= 24){
			
				document.getElementById("riskLevelShow").innerHTML = 'Conservative';
				document.questions.riskLevel.value = 'Conservative';
				scroll(0, 100);
			}
			
			if(totalScore!=0 && totalScore >= 25 && totalScore <= 35){
			
				document.getElementById("riskLevelShow").innerHTML = 'Moderately Conservative';
				document.questions.riskLevel.value = 'Moderately Conservative';
				scroll(0, 100);
			}
			
			if(totalScore!=0 && totalScore >= 36 && totalScore <= 46){
			
				document.getElementById("riskLevelShow").innerHTML = 'Balanced';
				document.questions.riskLevel.value = 'Balanced';
				scroll(0, 100);
			}
			
			if(totalScore!=0 && totalScore >= 47 && totalScore <= 57){
			
				document.getElementById("riskLevelShow").innerHTML = 'Moderately Aggressive';
				document.questions.riskLevel.value = 'Moderately Aggressive';
				scroll(0, 100);
			}
			
			if(totalScore!=0 && totalScore >= 58 && totalScore <= 65){
			
				document.getElementById("riskLevelShow").innerHTML = 'Aggressive';
				document.questions.riskLevel.value = 'Aggressive';
				scroll(0, 100);
			}
			
		
	document.getElementById("riskProfileAppetite").style.visibility='visible';
	document.questions.riskProfileStr.value = riskProfileStr;

	//document.questions.submit();
	
}
