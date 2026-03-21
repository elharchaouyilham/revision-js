function nettoyer(tableau) {
    return tableau
        .filter(val => val)
        .filter((val, index, arr) => arr.indexOf(val) === index)
        .sort((a, b) => a - b);
}
function rotate(tableau, n) { 
    
}