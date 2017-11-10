function setup(){
    var canvas = createCanvas(810, 810);
    canvas.parent('sketch-holder');
    background(255, 0, 200);
}

function preload() {
  result = loadStrings('data.txt');
}

function draw(){
    text(result, 10, 10, 80, 80);
}