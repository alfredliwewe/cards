let _ = (id) => {
    return document.getElementById(id);
}

window.onload = () => {
    let root = document.getElementById("root");

    root.appendChild(parseElement(`<div class"">Hello</div>`))
}