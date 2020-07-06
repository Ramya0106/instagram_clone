const calcy1={
	displayValue:'0',
	flag:false,
    firstOperand:null,
    waitingForSecondOperand:false,
	secondOperand:null,
	operator:null,
	display:'0',
};
function updateDisplay(){
	const display=document.querySelector('.cscreen');
	const display1=document.querySelector('.cscreen');
	display.value=calcy1.displayValue;
}
updateDisplay();
var element=document.querySelector(".ckeys");
element.addEventListener('click',(event)=>{
	const {target}=event;
	if(!target.matches("button")){
		return;
	}
	if(target.classList.contains("symbol"))
	{
		//console.log("Symbol",target.value);
		//updateDisplay();
		handelOperator(target.value);
		updateDisplay();
		return;
	}
	if(target.classList.contains("clear"))
	{
		//console.log("Clear Clear");
		reset();
		return;
	}
	if(target.classList.contains("decimal"))
	{
		inputDecimal(target.value);
		updateDisplay();
		return;
	}
	 if(target.classList.contains("eqaulto"))
	 {
		const inputValue=parseFloat(calcy1.display);
		calcy1.secondOperand=inputValue;
		 //console.log("equal to",target.value,calcy1.firstOperand,calcy1.operator,calcy1.secondOperand);
		 perform(calcy1.firstOperand,calcy1.operator,calcy1.secondOperand);
	 	return;
	 }
	inputDigit(target.value);
	updateDisplay();
});
function inputDigit(digit)
{
	const {displayValue,waitingForSecondOperand,secondOperand,firstOperand,display}=calcy1;
	if(waitingForSecondOperand==true)
	{
		calcy1.display=display=='0'?digit:display+digit;
		calcy1.displayValue+=calcy1.display;
		updateDisplay();
		//console.log("done")
		
		calcy1.waitingForSecondOperand=false;
	}
	else
	{
		 if(calcy1.flag==true)
		  {
		 	// displayValue='0';
		 	calcy1.display=display=='0'?digit:display+digit;
		 	// console.log("flag",calcy1.display);
			 
		  }
		 calcy1.displayValue=displayValue=='0'?digit:displayValue+digit;
		 //console.log(calcy1.displayValue);
		 calcy1.secondOperand=calcy1.display;
	}
}
function inputDecimal(dot)
{
	if(!calcy1.displayValue.includes(dot))
	{
		calcy1.displayValue+=dot;
	}
}
function handelOperator(nxtOperator)
{
	const {firstOperand,displayValue,operator,secondOperand}=calcy1;
	const inputValue=parseFloat(displayValue);
	if(firstOperand==null)
	{
		calcy1.firstOperand=inputValue;
	}
	calcy1.waitingForSecondOperand=true;
	calcy1.operator=nxtOperator;
	calcy1.displayValue+=nxtOperator;
	updateDisplay();
	calcy1.flag=true;
}
function perform(firstOperand,operator,secondOperand)
{
	//console.log("perform",operator);
	switch(operator)
	{
		case "+":
			//console.log("plus");
			var result=firstOperand+secondOperand;
			calcy1.displayValue=result;
			updateDisplay();
			calcy1.firstOperand=result;
			calcy1.secondOperand=null;
			calcy1.display='0';
			break;
		case "-":
			//console.log("minus");
			var result=firstOperand-secondOperand;
			calcy1.displayValue=result;
			updateDisplay();
			calcy1.firstOperand=result;
			calcy1.secondOperand=null;
			calcy1.display='0';
			break;
		case "*":
			var result=firstOperand*secondOperand;
			calcy1.displayValue=result;
			updateDisplay();
			calcy1.firstOperand=result;
			calcy1.secondOperand=null;
			calcy1.display='0';
			break;
		case "/":
			var result=firstOperand/secondOperand;
			calcy1.displayValue=result;
			updateDisplay();
			calcy1.firstOperand=result;
			calcy1.secondOperand=null;
			calcy1.display='0';
			break;
		case "%":
			var result=firstOperand/100;
			calcy1.displayValue=result;
			updateDisplay();
			calcy1.firstOperand=result;
			calcy1.secondOperand=null;
			calcy1.display='0';
			break;
		default:
			console.log("No Operation");
	}
}
function reset()
{
	calcy1.displayValue='0';
	calcy1.display='0';
    calcy1.firstOperand=null;
    calcy1.waitingForSecondOperand=false;
	calcy1.secondOperand=null;
	calcy1.operator=null;
	calcy1.flag=null;
	updateDisplay();
}