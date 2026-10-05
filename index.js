const palette = ["rgb(220,100,120)", "rgb(85,120,105)", "rgb(220,200,100)", "rgb(130,130,50)",
    "rgb(80,130,200)", "rgb(220,100,70)", "rgb(90,170,190)", "rgb(90,110,80)", "rgb(190,70,150)"];

document.querySelectorAll(".color-line").forEach(line => {
    [190, 160, 130, 100, 70, 40, 20, 10].forEach(w => {
        const block = line.appendChild(document.createElement("div"));
        block.style.width = w + "px";
        block.style.backgroundColor = palette[Math.floor(Math.random() * palette.length)];
    });
});