const temperatures = [0, 15, 22, 35, -5, 100]; 
let fehrent=temperatures.map(Element=>{
return Element* 9/5 + 32;
});
console.log(fehrent);
let descriptions=temperatures.map(Element=>{
if(Element>=30)return 'chauld';
if(Element<0)return 'froid';
 return 'tempere';
});
console.log(descriptions);



//  Convertissez en Fahrenheit avec map()  (formule : F = C * 9/5 + 32) 
// 2. Creez un tableau de descriptions : '>= 30 => Chaud', '< 0 => Froid', sinon => 'Tempere' 
// 3. Creez un tableau d'objets { celsius: val, statut: '...' } en combinant les deux idees 
// precedentes