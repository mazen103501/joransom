let aboutUsBoxes = document.querySelectorAll(".about-us .thecont .about-box .box"),
    textBoxParag = document.querySelectorAll(".about-us .thecont .text-box p");


function showAboutUsText(){
    aboutUsBoxes.forEach((e)=>{
        e.classList.remove("selected-box")
    });
    textBoxParag.forEach((e)=>{
        e.classList.remove("show-text")
    })
    if(Array.from(this.parentNode.children).indexOf(this) == 0){
        this.classList.add("selected-box");
        textBoxParag[0].classList.add("show-text")
    }else if(Array.from(this.parentNode.children).indexOf(this) == 1){
        this.classList.add("selected-box");
        textBoxParag[1].classList.add("show-text")
    }else if(Array.from(this.parentNode.children).indexOf(this) == 2){
        this.classList.add("selected-box");
        textBoxParag[2].classList.add("show-text")
    }

}

aboutUsBoxes.forEach((e)=>{
    e.addEventListener("click" , showAboutUsText);
});




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
        console.log(document.documentElement.scrollTop)
        if(document.documentElement.scrollTop > (homeCourses[0].parentElement.offsetTop -350)){
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
        // if(document.documentElement.scrollTop > 2200){
        //     let theTime = 200;
        //     socialMedia.forEach(ele=>{
        //         setTimeout(() => {
        //             ele.classList.add("showsocial")
        //         }, theTime);
        //         theTime+=200;
        //     })
        //
        // }

}

}


let select = document.querySelector("select"),
    enroll = document.querySelectorAll(".course-container a"),
    theSelectNumber;

// console.log(select , enroll)
enroll.forEach((ele,i)=>{
    ele.addEventListener("click",function(){
        theSelectNumber = i;
        select.options[theSelectNumber].selected = true;
    })
});




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