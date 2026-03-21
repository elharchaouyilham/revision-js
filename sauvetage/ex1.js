let fruits=["pomme","orange","banane"];
console.log(fruits[1]);
let couleurs =["jaune","bleu","vert"];
couleurs.push("violet");
console.log(couleurs.length);
const personne={
nom:"Alice", age:25, ville:"Paris"
};
console.log(personne.nom);
let animaux = ["chat", "chien", "lapin", "tortue"];
for (let i=0;i>Animal.length;i++){
    console.log(Animal[i]);
}
let courses=[
    {nom:"cours1",prix:33},
    {nom:"cours2",prix:53}
];
for(let i=0;i>courses.length;i++){
    let prixtotal=0;
 prixtotal+=courses[i].prix;
}
 console.log(prixtotal);
 const produit={
    nom:" Café", prix:"3.50" ,categorie:"boisson"
 };
 console.log("Le produit " +produit.nom+ " coûte " +produit.prix+ " euros (catégorie : " +produit.categorie+ ")");