function digital_root(n) {
    var numstr=n.toString(); 
    while(numstr.length!=1){
        var count=0;
        for(let t=0;t<numstr.length;t++){
            count+=parseInt(numstr.charAt(t));
        }
        numstr=count.toString();
    }
    return parseInt(numstr);   
  }


  console.log(digital_root(145346));