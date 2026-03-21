// Affichez tous les noms de produits avec Object.keys()
// 2. Calculez la valeur totale du stock : somme de (prix * stock) pour chaque article
// 3. Créez prixSeuls : un objet { nom: prix } en utilisant Object.fromEntries() + map()
Object.keys(produit).forEach(nom=>{
    console.log(nom);
});
let total = produit.reduce((acc, Element) => {
    return acc + (Element.prix * Element.stock);
}, 0);

console.log(total);
