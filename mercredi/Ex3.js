const commande = {
id: 'CMD-001',
client: { nom: 'Dupont', email: 'dupont@mail.com' },
total: 18.50,
livree: false
};
// 1. Déstructurez id et total en une ligne
// 2. Déstructurez le nom du client en imbriquant la déstructuration
// 3. Déstructurez en renommant total => montant et livree => estLivree
const { id, total} = commande;
const { client: { nom } } = commande;
const { total: montant, livree: estLivree } = commande;
