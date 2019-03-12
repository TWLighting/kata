function iqTest(numbers){
    var even=numbers.split(' ').filter((x)=>Number(x)%2===0).length;
    var obb=numbers.split(' ').filter((x)=>Number(x)%2!==0).length;
    result=0;
    if(even>obb){
         numbers.split(' ').forEach((x,index)=>{
            if(x%2!==0){
                result= index+1;
            }
        });
    }else{
        numbers.split(' ').forEach((x,index)=>{
            if(x%2===0){
                result= index+1;
            }
        })
    }
    return result;
  }
  
  function iqTest2(numbers){
    var munarr=numbers.split(' ').map((x)=>(Number(x)%2===0?'even':'obb'));
    var evenN=munarr.filter(ele=>ele=='even').length;
    var obbN=munarr.filter(ele=>ele=='obb').length;
    if(evenN>obbN){
        return munarr.indexOf('obb')+1;
    }else{
        return munarr.indexOf('even')+1;
    }
  }
  console.log(iqTest('2 4 6 9 10'));
  console.log(iqTest2('2 4 6 9 10'));