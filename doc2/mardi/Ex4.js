const mots = ['chat','cheval','chien','lion','chameau','cobra','loup','chevre']; 
let motsC=mots.filter(Element=>Element.startsWith('c'));
console.log(motsC);
let mots5=mots.filter(Element=>(Element.length>5)

);
console.log(mots5);

let combine=mots.filter(Element=>Element.startsWith('c')&&(Element.length>5));
console.log(combine);



// . Filtrez uniquement les mots qui commencent par 'ch' (utilisez startsWith) 
// 2. Filtrez les mots de plus de 5 lettres 
// 3. Combinez les deux : mots qui commencent par 'ch' ET ont plus de 5 lettres 