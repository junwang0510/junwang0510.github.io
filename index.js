const palette = [
    "rgb(220,100,120)",
    "rgb(85,120,105)",
    "rgb(220,200,100)",
    "rgb(130,130,50)",
    "rgb(80,130,200)",
    "rgb(220,100,70)",
    "rgb(90,170,190)",
    "rgb(90,110,80)",
    "rgb(190,70,150)"
];

const randColor = () => palette[Math.floor(Math.random() * palette.length)];

const assignColorBlocks = () => {
    document.querySelectorAll(".color_block").forEach(block => {
        block.style.backgroundColor = randColor();
    });
};

const createColorBlocks = () => {
    document.querySelectorAll('.color-line').forEach(line => {
        [190,160,130,100,70,40,20,10].forEach(w => {
            let block = document.createElement('div');
            block.classList.add('color_block');
            block.style.width = w + 'px';
            block.style.height = '6px';
            line.appendChild(block);
        });
    });
};

const makeLinksOpenInNewTab = () => {
    document.querySelectorAll("a").forEach(link => link.setAttribute("target", "_blank"));
};

const init = () => {
    createColorBlocks();
    assignColorBlocks();
    makeLinksOpenInNewTab();
};

window.addEventListener('load', init);