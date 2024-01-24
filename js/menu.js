function createMenu(current) {

	const items = [	
		{nome: 'Home', href: 'index.html'},
		{nome: 'Projetos', href: 'projetos.html'},	
		{nome: 'Artigos', href: 'artigos.html'},
		{nome: 'Parceiros', href: 'parceiros.html'},	                   
		{nome: 'Contato', href: 'contato.html'}
	];
	
	const ul = document.getElementById('menu');
	
	for (let i in items) {
		let li = document.createElement("li"), a = document.createElement("a");
		if(items[i].nome == current) {
			li.classList.add("current");
		}
		a.innerHTML = items[i].nome;
		a.href = items[i].href;
		li.appendChild(a);
		ul.appendChild(li);
	}

}