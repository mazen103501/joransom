let navBar = document.querySelector("nav"),
    whoAreWeH2 = document.querySelector(".who-are-we h2"),
    cards = document.querySelectorAll(".cards > div"),
    objectives = document.querySelector(".objectives "),
    homeCourses = document.querySelectorAll(".courses > a"),
    socialMedia = document.querySelectorAll("footer div:last-of-type i"),
    trainingCourses = document.querySelectorAll(".course-container > div");


    let theLink = location.href;

    // console.log(trainingCourses)
if(theLink.includes("pages=")){
    socialMedia.forEach(ele=>{
            ele.classList.add("showsocial");
    });
    console.log(trainingCourses)
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
    window.onscroll = function(){
        console.log(document.documentElement.scrollTop)
        // if(document.documentElement.scrollTop < 99){
        //     navBar.classList.remove("sticky")
        // }
        // if(document.documentElement.scrollTop > 99){
        //     navBar.classList.add("sticky")
        // }
        if(document.documentElement.scrollTop > 60){
            whoAreWeH2.classList.add("showWhoAreWe");
        }
        if(document.documentElement.scrollTop > 500){
            let theTime = 300;
            cards.forEach(ele=>{
                setTimeout(() => {
                    ele.classList.add("showcards")
                }, theTime);
                theTime+=300;
            })
            // cards[0].classList.add("showcards");
            // setTimeout(() => {
            //     cards[1].classList.add("showcards");
            // }, 300);
            // setTimeout(() => {
            //     cards[2].classList.add("showcards");
            // }, 600);
            
        }
        if(document.documentElement.scrollTop >950){
            objectives.classList.add("showobjectives")
        }
        if(document.documentElement.scrollTop > 1380){
            let theTime = 200;
            homeCourses.forEach(ele=>{
                setTimeout(() => {
                    ele.classList.add("showcourses")
                }, theTime);
                theTime+=200;
            })
            // homeCourses[0].classList.add("showcourses");
            // setTimeout(() => {
            //     homeCourses[1].classList.add("showcourses");
            // }, 300);
            // setTimeout(() => {
            //     homeCourses[2].classList.add("showcourses");
            // }, 600);
            // setTimeout(() => {
            //     homeCourses[3].classList.add("showcourses");
            // }, 900);
            
        }
        if(document.documentElement.scrollTop > 2200){
            let theTime = 200;
            socialMedia.forEach(ele=>{
                setTimeout(() => {
                    ele.classList.add("showsocial")
                }, theTime);
                theTime+=200;
            })
            
        }
    }
}




let select = document.querySelector("select"),
    enroll = document.querySelectorAll(".course-container a"),
    theSelectNumber;

console.log(select , enroll)
enroll.forEach((ele,i)=>{
    ele.addEventListener("click",function(){
        theSelectNumber = i;
        select.options[theSelectNumber].selected = true;
    })
})




// let cont = document.querySelectorAll(".course-container > div");

// for(let i=0 ; i<cont.length;i++){
//     cont[i].addEventListener("click" , soso)
// }
// function soso(){
//     let theImg = this.children[1].src,
//         theName = this.querySelector("h6").textContent,
//         theText = this.querySelector("p").textContent;
//     console.log(theText)
//     // console.log(theName)
//     document.querySelector(".course-info").classList.toggle("showcourse-info");
//     document.querySelector(".course-info img").src = theImg;
//     document.querySelector(".course-info div:nth-of-type(2) h5").textContent = theName;
//     document.querySelector(".course-info div:nth-of-type(2) p").textContent = theText;
//     document.querySelector(".course-info button").classList.remove("togglebutton");

//     // console.log(this)
// }

// document.querySelector(".btn-danger").onclick = function(){
//     document.querySelector(".course-info").classList.toggle("showcourse-info");
//     document.querySelector(".course-info button").classList.add("togglebutton");
// }