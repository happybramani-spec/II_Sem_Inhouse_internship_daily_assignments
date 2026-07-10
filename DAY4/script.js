   function performarthmaticoperation() {
     const number1 = parseFloat(document.queryselector("#number1").value);
     const number2 = parseFloat(document.getElementById("number2").value);
     const operator = document.getElementById("operation").value;
    let result = 0;
    switch(operator){
        case "add":
            result = number1 + number2;
            break;
            case "subtract":
            result = number1 - number2;     
            break;
            case "multiply":        
            result = number1 * number2; 
            break;
            case "divide":
                if (number2==0){
                    result="divide by 0 error";
                }else{
                     result = number1 / number2;
                }
            break;
             }

            const resultdiv = document.getElementById("result");
            resultdiv.innerHTML = result;
    }
