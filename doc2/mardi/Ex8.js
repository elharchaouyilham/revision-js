// artie A -- Spread 
// 1. Creez fruits=['pomme','poire'] et legumes=['carotte','tomate'], fusionnez-les dans aliments 
// avec spread 
// 2. Copiez aliments dans copiePanier, ajoutez 'cerise' a copiePanier, verifiez qu'aliments est 
// intact 
// 3. Trouvez le max et le min de [3,1,4,1,5,9,2,6] avec Math.max/min et le spread 
const fruits=['pomme','poire'];
const legumes=['carotte','tomate'];
const aliments=[fruits,legumes];
const copiePanier=[aliments];
copiePanier.push('cerise');
console.log(copiePanier);
let tabb=[3,1,4,1,5,9,2,6];
const min=Math.min(tabb);
const max=Math.max(tabb);
console.log(min);
console.log(max);










// Destructurez const couleurs=['rouge','vert','bleu','jaune'] pour obtenir : premiere, 
// deuxieme, et un tableau autresCouleurs 
// 2. Echangez les valeurs de x=10 et y=20 en une seule ligne grace a la destructuration 
// 3. Destructurez const data=[42] avec valeur par defaut : const [val, unite='kg'] = data -- 
// affichez les deux 
const couleurs = ['rouge', 'vert', 'bleu', 'jaune'];
const [premiere, deuxieme,autresCouleurs] = couleurs;
let x = 10;
let y = 20;
[x,y]=[y,x];
const data = [42];
const [val, unite='kg'] = data;
console.log(val); 
console.log(unite);
console.log(+val+""+unite);