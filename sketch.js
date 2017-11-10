function setup(){
    var canvas = createCanvas(810, 810);
    canvas.parent('sketch-holder');
    result = loadStrings('data.txt');
    background(255, 255, 200);
}

function preload() {
  
}

function draw(){
    text(result, 10, 10, 80, 80);
}