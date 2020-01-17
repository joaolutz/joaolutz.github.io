function createMenu(current) {

	var itens = [	
	{nome: 'Home', href: 'index.html'},
	{nome: 'Projetos', href: 'projetos.html'},	
	{nome: 'Artigos', href: 'artigos.html'},
	{nome: 'Parceiros', href: 'parceiros.html'},	                   
	{nome: 'Contato', href: 'contato.html'}];
	
	var ul = document.getElementById('menu');
	
	for (var i in itens) {
		var li = document.createElement("li"), a = document.createElement("a");
		if(itens[i].nome == current) {
			li.classList.add("current");
		}
		a.innerHTML = itens[i].nome;
		a.href = itens[i].href;
		li.appendChild(a);
		ul.appendChild(li);
	}

}