const strings = {
	logo: "joao.lutz",
	email: "joao.messilutz@gmail.com",
	mailto: "mailto:joao.messilutz@gmail.com",
	footer: "João Lutz &copy; 2024 &minus; Todos os direitos reservados"
}

function el(selector) {
	return document.querySelector(selector)
}

function els(selector) {
	return document.querySelectorAll(selector)
}

function text(selector, value) {
	el(selector).innerHTML = value
}

function printStrings() {
	text("#top", strings.email)
	text("#logo_link", strings.logo)
	text("#footerp", strings.footer)
}

function addMailTo() {
	text("#mailto", strings.email)
	el("#mailto").href = strings.mailto
}