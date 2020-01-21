function setHeader() {
   var metatags = [
      { tag: "meta", "http-equiv": 'Content-Type', content: 'text/html; charset=utf-8' },
      { tag: "meta", name: "Robots", content: "index,follow" },
      { tag: "meta", name: "author", content: "Luka Cvrk (www.solucija.com)" },
      { tag: "meta", name: "description", content: "Site pessoal de João Gabriel Méssi Lutz, analista de sistemas, publicitário e músico." },
      { tag: "meta", name: "keywords", content: "software, java, lutz, it" },
      { tag: "link", rel: "shortcut icon", type: "image/x-icon", href: "images/favicon.ico" },
      { tag: "link", rel: "stylesheet", type: "text/css", href: "css/screen.css", media: "screen" },
      { tag: "title", innerHtml: "João Lutz - Software Developer" }
   ];

   for (var m in metatags) {
      var tag = metatags[m];
      var meta = document.createElement(tag.tag);
      for (let prop in tag) {
         if (prop != 'tag') {
            if (prop != 'innerHtml') {
               meta.setAttribute(prop, tag[prop]);
            } else {
               meta.innerHTML = tag[prop];
            }
         }
      }
      document.getElementsByTagName('head')[0].appendChild(meta);
   }
}