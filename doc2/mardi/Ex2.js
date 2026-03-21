const prenoms = ['Alice', 'Bob', 'Clara', 'David', 'Eva']; 
prenoms.forEach((element,index) => {
    console.log((index+1)+"."+element);
    
});
let prenom2=[];
prenoms.forEach(element => {
    prenom2.push(element.length);
    
});
console.log(prenom2);
prenoms.forEach(element => {
    if(element.length>3){
console.log(element);
    }
    
});