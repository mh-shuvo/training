// Using console
console.warn("hello bro. I am from external js.")

//using DOM(Document Object Model
_print("Hello good people. I am from DOM");

// Variable

// using var 
var name = "Shuvo";

// using let

let role = 10;

// using const

const PI = 3.1416;


function sayHello(){
    console.log(role)
}

function _print(data){
    document.write(data+"<br>");
}

let number = 50.254161465;

let num_str = number.toString()

_print(typeof num_str)

for(i=0;i<10;i++){
    // _print(i)
}


function greet(name,age=10){
    _print(`Hello ${name}. Age is ${age}`)
}

greet("Shuvo");
greet("Akhilesh",22);


// var random = function (num){
//     return Math.floor(50.8);
// }

// _print(random(10))

// var random = () => Math.random();
// _print(random())

var random = (num) => {
    let rnd_val = Math.random();
    _print(rnd_val)
    return num * rnd_val;
}

_print(random(5.5));

var list = [10,5];


var calcualteNumber = (a,b) => a*b;

_print(calcualteNumber())
// _print(calcualteNumber(10,5))

print();