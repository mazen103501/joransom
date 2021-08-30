// intro image
let introImage = document.querySelector(".intro-section .intro-containter .section-img");

window.addEventListener("scroll" , showIntroImage);
if(window.innerWidth > 1107){
    setTimeout(() => {
        introImage.classList.add("showimage");
    }, 500);
    
}
function showIntroImage(){
    introImage.classList.add("showimage");
}







let aboutUsBoxes = document.querySelectorAll(".about-us .thecont .about-box .box"),
    textBox= document.querySelector(".about-us .thecont .text-box"),
    textBoxParag = document.querySelectorAll(".about-us .thecont .text-box p");

console.log(textBox)
function showAboutUsText(){
    aboutUsBoxes.forEach((e)=>{
        e.classList.remove("selected-box")
    });
    textBoxParag.forEach((e)=>{
        e.classList.remove("show-text")
        e.classList.remove("absolute")
    })
    if(Array.from(this.parentNode.children).indexOf(this) == 0){
        textBoxParag[0].classList.add("absolute")
        textBox.classList.add("hidetextbox")
        this.classList.add("selected-box");
        textBoxParag[0].classList.add("show-text")
        setTimeout(() => {
            textBox.classList.remove("hidetextbox")
        }, 1000);
        setTimeout(() => {
            textBoxParag[0].classList.remove("absolute")
        }, 2000);
    }else if(Array.from(this.parentNode.children).indexOf(this) == 1){
        textBoxParag[1].classList.add("absolute")
        textBox.classList.add("hidetextbox")
        this.classList.add("selected-box");
        textBoxParag[1].classList.add("show-text")
        setTimeout(() => {
            textBox.classList.remove("hidetextbox")
        }, 1000);
        setTimeout(() => {
            textBoxParag[1].classList.remove("absolute")
        }, 2000);
    }else if(Array.from(this.parentNode.children).indexOf(this) == 2){
        textBoxParag[2].classList.add("absolute")
        textBox.classList.add("hidetextbox")
        this.classList.add("selected-box");
        textBoxParag[2].classList.add("show-text")
        setTimeout(() => {
            textBox.classList.remove("hidetextbox")
        }, 1000);
        setTimeout(() => {
            textBoxParag[2].classList.remove("absolute")
        }, 2000);
    }

}

aboutUsBoxes.forEach((e)=>{
    e.addEventListener("click" , showAboutUsText);
});




let navBar = document.querySelector("nav"),
    cards = document.querySelectorAll(".cards > div"),
    homeCourses = document.querySelectorAll(".courses > a"),
    socialMedia = document.querySelectorAll("footer div:last-of-type i"),
    trainingCourses = document.querySelectorAll(".course-container > div");


    let theLink = location.href;

    // console.log(trainingCourses)
if(theLink.includes("pages=")){
    socialMedia.forEach(ele=>{
            ele.classList.add("showsocial");
    });
    // console.log(trainingCourses)
    window.onload = function(){
    let theTime = 100;
    trainingCourses.forEach(ele=>{
        setTimeout(() => {
            ele.classList.add("showtrainingcourse")
        }, theTime);
        theTime+=100;
    })
    }


}else{
    console.log(homeCourses)
    window.onscroll = function(){
        // console.log(document.documentElement.scrollTop)
        // if(innerWidth > 500){

        // }
        if(document.documentElement.scrollTop > (homeCourses[0].parentElement.offsetTop -250)){
            let theTime = 200;
            homeCourses.forEach(ele=>{
                setTimeout(() => {
                    ele.classList.add("showcourses")
                }, theTime);
                theTime+=200;
            })
        }
    }
}

let select = document.querySelector("select"),
    enroll = document.querySelectorAll(".course-container a"),
    theSelectNumber;


enroll.forEach((ele,i)=>{
    ele.addEventListener("click",function(){
        theSelectNumber = i;
        select.options[theSelectNumber].selected = true;
    })
});




