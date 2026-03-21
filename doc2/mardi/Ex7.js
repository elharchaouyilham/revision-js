const scores = [45, 12, 78, 3, 99, 56, 23, 67]; 
const noms   = ['Zoe','Alice','Marc','Bob','Yasmine','Chloe']; 
scores.sort((a,b)=>a-b);
console.log(scores);
scores.sort((a,b)=>b-a);
console.log(scores);

noms.sort((a,b)=>a.localeCompare(b));
console.log(noms);

let meilleur=scores.sort((a,b)=>b-a).slice(0, 3);
console.log(meilleur);


// . Triez scores en ordre croissant SANS muter le tableau d'origine (utilisez le spread 
// [...scores]) 
// 2. Triez scores en ordre decroissant de la meme facon 
// 3. Triez noms par ordre alphabetique avec localeCompare() 
// 4. Affichez les 3 meilleurs scores (trier puis slice) 