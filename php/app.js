// var name = "yuven"
// let age = 12;
// const number = 8989389543
// let isTall = true;

// console.log(name);
// console.log(age);
// console.log(number);
// console.log(isTall);

// name = "kenzo";
// age = 11;


// //math operator 
// let x = 12
// let y = 10

// let sum = x-y
// console.log(sum)

// if(x > y){
//     console.log("x is greeter thn y")
// }else if(x < y){
//     console.log("x is less thn y")
// }else if(x==y){

// }else{

// }


// function getValue(){
//     alert("helllo this function is called")
// }

// getValue()

// let ArrowFunction =()=>{
//     alert("arrow funtion caled")
// }

// ArrowFunction();




function ChangeEl(){
    
    let name = document.getElementById('name').value;

    if(name == ""){
        document.getElementById('name_error').style.display = "block"
    }
    let email = document.getElementById('email').value;

    if(email == ""){
        document.getElementById('email_error').style.display = "block"
    }
}