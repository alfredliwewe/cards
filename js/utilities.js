function elem(type){
    return document.createElement(type);
}

function div(){
    return document.createElement("div");
}

function parseElement(html){
    const parser = new DOMParser();
	const doc3 = parser.parseFromString(html, "text/html");
    return doc3.body.firstChild;
}

function isImage(name){
    let allowed = ['png', 'jpeg', 'jpg', 'webp', 'gif'];

    let chars = name.split(".");
    let ext = chars[chars.length - 1].toLowerCase();

    return allowed.includes(ext);
}

function camelToKebab(camelCase) {
    return camelCase.replace(/([a-z])([A-Z])/g, '$1-$2').toLowerCase();
}

function setClasses(elem, classes){
    for(let c of classes){
        let chars = c.split(" ");
        for(let ch of chars){
            elem.classList.add(ch);
        }
    }
    return elem;
}

function setAttributes(elem, attributes){
    for(let k in attributes){
        elem.setAttribute(k, attributes[k]);
    }
}

function setStyle(elem, styles){
    for(let k in styles){
        elem.style.setProperty(camelToKebab(k), styles[k]);
    }
}

function addAll(parent, children){
    for(let child of children){
        parent.appendChild(child);
    }
}