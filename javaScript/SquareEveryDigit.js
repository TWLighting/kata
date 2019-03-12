function squareDigits(num){
   return parseInt(String(num).split('').map(x =>String(Math.pow(x,2))).reduce((a,b)=>a+b));
  }

  function squareDigits2(num){
    return Number(String(num).split('').map(x =>String(Math.pow(x,2))).join(''));
   }

  console.log(squareDigits(145346));
  console.log(squareDigits2(145346));