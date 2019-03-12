function validBraces(braces){

    len=braces.length;
    if(len%2!==0 || len===0){
        return false;
    }
    var $result=true;
    for(var st=0;st<len;st++){
      
        if(braces.charAt(st)==='('){
           
            for(let t=st;t<len;t++){
                if(braces.charAt(t)===')'){
                    if((t-st)%2===1){
                        $result=true; 
                        break;
                    }
                }else{
                    $result=false;
                }
            }
        }

        if(braces.charAt(st)=='{'){
            
            for(let t=st;t<len;t++){
                if(braces.charAt(t)==='}'){
                    if((t-st)%2===1){
                        $result=true; 
                        break;
                    }
                }else{
                    $result=false; 
                }
            }
        }

        if(braces.charAt(st)=='['){
            
            for(let t=st;t<len;t++){
                if(braces.charAt(t)===']'){
                    if((t-st)%2===1){
                        $result=true; 
                        break;
                    }
                }else{
                    $result=false;
                }
            }
        }
         
    }
    return $result;
  
  }

  console.log(validBraces('()'));