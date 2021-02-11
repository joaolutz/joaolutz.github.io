var strings = {
	logo: "joao.lutz",
	email: "joao.messilutz@gmail.com",
	mailto: "mailto:joao.messilutz@gmail.com",
	footer: "João Lutz &copy; 2021 &minus; Todos os direitos reservados"
};

function getElement(id) {
	return document.getElementById(id);
}

function print(node, value) {
	getElement(node).innerHTML = value;
}

function printStrings() {
	print("top", strings.email);
	print("logo_link", strings.logo);
	print("footerp", strings.footer);
}

function addMailTo() {
	print("mailto", strings.email);
	getElement("mailto").href = strings.mailto;
}