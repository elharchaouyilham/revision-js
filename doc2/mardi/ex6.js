const notes = [14, 8, 17, 11, 15, 9, 18, 12]; 
 let somme=0;
for (let i=0;i<notes.length;i++){
   somme += notes[i];
}
console.log(somme);

let moyenne=somme/notes.length;
console.log(moyenne);


let haute =notes.reduce((acc,note)=>{
    if(note>acc){
   return note;
    }else {
        return acc;
    }
    }, notes[0]);   
console.log(haute);

let dessus=notes.reduce((acc,note)=>{
if (note>moyenne){
    return acc +1;
}
else{return acc;} 
},0);
console.log(dessus);




 
// 1. Calculez la somme de toutes les notes 
// 2. Calculez la moyenne (somme / nb de notes) 
// 3. Trouvez la note la plus haute avec reduce() (sans utiliser Math.max) 
// 4. Comptez combien de notes sont au-dessus de la moyenne que vous venez de calculer 