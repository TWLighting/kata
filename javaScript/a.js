function alphabetPosition(text) {
    var len=text.length;
    var nubarr=[];
    var result=' ';
    text=text.toLowerCase();
    for(var sr=0;sr<len;sr++){
        if(text.charCodeAt(sr)>=97 && text.charCodeAt(sr)<=122){
            var num=text.charCodeAt(sr)-96;
            result=result.concat(' ', num.toString());
        }
    }
   return result.trim();
   
  }

  console.log(alphabetPosition('The narwhal bacons at midnight.'));

