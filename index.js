function randColor() {
    var palette = [
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
    return palette[Math.floor(Math.random() * palette.length)];
}

function assignColorBlocks() {
    var blocks = document.getElementsByClassName("color_block");
    for (var i = 0; i < blocks.length; i++) {
        blocks[i].style.backgroundColor = randColor();
    }
}

window.onload = assignColorBlocks;
