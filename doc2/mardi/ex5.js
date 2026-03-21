const catalogue = [ 
    { ref: 'A01', nom: 'Stylo bille',  prix: 1.20 }, 
    { ref: 'A02', nom: 'Cahier A4',    prix: 3.50 }, 
    { ref: 'A03', nom: 'Surligneur',   prix: 2.10 }, 
    { ref: 'A04', nom: 'Post-it',      prix: 3.80 }, 
    { ref: 'A05', nom: 'Ciseaux',      prix: 6.30 }, 
]; 

let cat=catalogue.find(Element=>Element.ref=='A03');
console.log(cat);
let indexx=catalogue.findIndex(Element=>Element.nom=='Cahier A4');
console.log(indexx);
let refe=catalogue.find(Element=>Element.ref=='A03');
if (refe==undefined){
    console.log('not found');
}else {
    console.log(refe);
}







// Trouvez le produit de reference 'A03' avec find() 
// 2. Trouvez l'index du 'Cahier A4' avec findIndex() 
// 3. Cherchez la ref 'A99' et affichez un message adapte si elle n'existe pas (gerez le 
// undefined) 