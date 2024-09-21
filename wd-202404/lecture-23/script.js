// console.error("Hello World")
// alert("Hello Akhilesh")
// document.write("Hello Web fooker")

const PI = 3.1416;


function varScoping() {
    var x = 1;
  
    if (true) {
      var x = 2;
      console.log(x); // will print 2
    }
  
    console.log(x); // will print 2
  }
  
  function letScoping() {
    let x = 1;
  
    if (true) {
      let x = 2;
      console.log(x); // will print 2
    }
  
    console.log(x); // will print 1
  }
  

//   varScoping()
//   letScoping()

  var sayHi = (name)=> console.log(`Hi ${name}`);

//   sayHi("Shuvo")
//   sayHi("Akhilesh")
//   sayHi("Hasan")


/**
 * Array
 */

// var list = [10,20,30];
// var list = new Array(10,20,30);

/***
 * String
 */

var username = "mehedi hasan";
var invoiceNo = "101";
// console.log(username.length)
// console.log(username.includes("Akh"))
// console.log(username.startsWith("Me"))
// console.log(invoiceNo.padStart(6,0))
// console.log(invoiceNo.repeat(5))
// console.log(username.charAt(0).toUpperCase() + username.slice(1,6))


/**
 * DOM-> Document Object Model
 */


// var rawH1 = `<h1 id="title">Hello</h1>`;


// var heading = document.createElement("h1")

// heading.append("Hello")
// heading.setAttribute("id","title")


// var wrapper = document.getElementById("wrapper")
// wrapper.append(heading)


// var paragraph = document.createElement("p")

// paragraph.append("This is paragraph text")
// wrapper.appendChild(paragraph)


// heading.innerText = "Hi Everyone."
// heading.style.color = "purple"




function renderList(){

    var studentList = document.getElementsByClassName("student")


    // var studentArray = Array.from(studentList) 
    
    // console.log(studentArray)
    
    
    var studentArray = [...studentList];
    
    
    // for(let i = 0; i < studentList.length; i++){
    //     var el = studentList[i];
    //     el.innerText = "Student "+(i+1)
    // }
    
    studentArray.forEach((element,key)=>{
        element.innerText = element.getAttribute("data-name")

        const type = element.getAttribute("data-type")
        const classes = element.getAttribute("class")
        var newClasses = `${classes} student-${type}`
        element.setAttribute("class",newClasses)
        // element.style.background = "purple"
        // element.style.color = "white"
        // element.style.margin = "5px 0px"
        // element.style.padding = "7px"
        // element.style.border = "1px solid purple"
        // element.style.borderRadius = "10px"
    
        element.style.cssText = `color:white; margin:5px 0px; padding:7px;
        border: 1px solid purple; border-radius: 10px;
        `
    })

    var wrapper = document.querySelector("#wrapper")
    wrapper.style.display = "block";
   

}


const btn = document.getElementById("show_btn")
const hide_btn = document.getElementById("hide_btn")

btn.addEventListener("click",()=>{
    renderList()
})


hide_btn.addEventListener("click",()=>{
    // var studentList = document.querySelectorAll(".student")

    // studentList.forEach((element,key)=>{
    //     element.innerText = ""
    //     element.display = "none"
    // })


    var wrapper = document.querySelector("#wrapper")
    wrapper.style.display = "none";
})
