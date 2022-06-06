require('./bootstrap');
require("./bootstrap");
const axios = require("axios").default;

scrolltop = document.getElementById("scrolltop");
var rootElement = document.documentElement;
scrolltop.addEventListener("click" ,function(){
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
      });
});

window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

var preloader = document.getElementById("preloader");
window.addEventListener("load", function () {
    preloader.style.display = "none";
});

window.onload = function () {
    var a = document.getElementsByClassName("tech-link");

    const filterImg = document.querySelectorAll(".gallery_link");
    filterImg.forEach((image) => {
        let filterImges = image.getAttribute("data-name"); //getting image data-name value
        //if user selected item data-name value is equal to images data-name value
        //or user selected item data-name value is equal to "all"
  
        if (filterImges == "BACKHOE LOADER") {
            image.parentNode.parentNode.classList.remove("hidden"); //first remove the hide class from the image
            image.parentNode.parentNode.classList.add("show"); //add show class in image
        }
         else {
            image.parentNode.parentNode.classList.add("hidden"); //add hide class in image
            image.parentNode.parentNode.classList.remove("show"); //remove show class from the image
        }
    });
    for (let i = 0; i < a.length; i++) {
        a[i].addEventListener("click", function () {
            for (let i = 0; i < a.length; i++) {
                a[i].parentNode.classList.remove("active");
            }
            this.parentNode.classList.toggle("active");
            let filterName = this.parentNode.getAttribute("data-name");
            filterImg.forEach((image) => {
                let filterImges = image.getAttribute("data-name"); //getting image data-name value
                //if user selected item data-name value is equal to images data-name value
                //or user selected item data-name value is equal to "all"
          
                if (filterImges == filterName) {
                    image.parentNode.parentNode.classList.remove("hidden"); //first remove the hide class from the image
                    image.parentNode.parentNode.classList.add("show"); //add show class in image
                }
                 else {
                    image.parentNode.parentNode.classList.add("hidden"); //add hide class in image
                    image.parentNode.parentNode.classList.remove("show"); //remove show class from the image
                }
            });
        });
    }
};

const images = document.querySelectorAll(".gallery_link");
const modal = document.querySelector(".modal");
let closeIcon = document.querySelector(".close");
var slide = document.getElementById("swiper-wrapper1");
var bottom_slides = document.getElementById("swiper-wrapper2");

closeIcon.addEventListener("click", function () {
    modal.style.display = "none";
    slide.innerHTML = "";
    bottom_slides.innerHTML = "";
});

images.forEach(function (btn) {
    btn.addEventListener("click", function () {
        const id = this.getAttribute("data-id");
        modal.style.display = "block";
    
        
        axios
            .get("/post_details/" + id)
            .then(function (response) {
                document.getElementById("modal-title").innerHTML =
                    response.data.title;
                document.getElementById("modal-desc").innerHTML =
                    response.data.description;
                // console.log(11);
                document.getElementById("catalog-modal").href =
                    response.data.catalog;

                document.getElementById("catalog-modal").href =
                    "/catalog" + "/" + response.data.catalog;
                document.getElementById("catalog-modal").innerHTML =
                    response.data.catalog;

                document.getElementById("bucklet-modal").href =
                    "/bucklet" + "/" + response.data.bucklet;
                document.getElementById("bucklet-modal").innerHTML =
                    response.data.bucklet;
            
                response.data.images.forEach(function (path) {
                  //console.log(path.getAttribute('src'));
                  
                  var div = document.createElement("div");
                  var div2 = document.createElement("div");
                  div.classList.add("swiper-slide");
                  div2.classList.add("swiper-slide");
                  var img = document.createElement("img");
                  var img2 = document.createElement("img");
                  img.setAttribute("src", "/images" + "/" + path.image);
                  img2.setAttribute("src", "/images" + "/" + path.image);
                  
                  div.appendChild(img);
                  div2.appendChild(img2);

                  slide.appendChild(div);
                  bottom_slides.appendChild(div2);
                });

            })
            .catch(function (error) {
                console.log(error);
            })
            .then(function () {
                var slider = new Swiper(".gallery-slider", {
                      zoom: {
    maxRatio: 5,
  },
                    slidesPerView: 1,
                    centeredSlides: true,
                    loop: true,
                    loopedSlides: 6,
      

                    navigation: {
                        nextEl: "#button-next-relacionados",
                        prevEl: "#button-prev-relacionados",
                    },
                });
      
                var thumbs = new Swiper(".gallery-thumbs", {
                
                    slidesPerView: "auto",
                    spaceBetween: 10,
                    centeredSlides: true,
                    loop: true,
                    slideToClickedSlide: true,
                });
      
                slider.controller.control = thumbs;
            
            });
        let pdftButtons = document.getElementsByClassName("pdf");
        let pdfFille = document.querySelectorAll(".contactus .quick-panel");

        for (let i = 0; i < pdftButtons.length; i++) {
            pdftButtons[i].addEventListener("click", function () {
                for (let i = 0; i < pdftButtons.length; i++) {
                    pdftButtons[i].classList.remove("red");
                }
                this.classList.toggle("red");
                let filterpdf = this.getAttribute("data-name");
                pdfFille.forEach((a) => {
                    var pdfFilles = a.getAttribute("data-name");
                    if (pdfFilles == filterpdf) {
                        a.classList.remove("hidden"); //first remove the hide class from the a
                        a.classList.add("show"); //add show class in a
                    } else {
                        a.classList.add("hidden"); //add hide class in a
                        a.classList.remove("show"); //remove show class from the image
                    }
                });
            });
        }


          
   
    });
});

// const input_token = document.getElementsById("token");

const form = document.querySelector(".myForm");
form.addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    axios
        .post("/send-email", formData)
        .then((response) => {
            console.log(response);
            form.reset();
        
        })
        .catch((error) => {
            console.log(error);
        });
});

const swiper = new Swiper(".swiper", {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    autoplay: {
        delay: 3000,
    },

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: "#swip-next",
        prevEl: "#swip-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});
