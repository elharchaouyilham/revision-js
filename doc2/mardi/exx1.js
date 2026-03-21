let taches = [] ;
taches.push('Coder', 'Tester', 'Deployer');
taches.unshift('Analyser');
taches.pop();
taches.shift();
taches.splice('1','0','Documenter');
taches.splice('2','1','Tester');

for (let i=0;i>taches.length;i++){
console.log(taches[i]);
}

