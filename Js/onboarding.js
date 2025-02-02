
const boxes = document.querySelectorAll(".interestedtopics");

boxes.forEach(button =>{
    button.addEventListener("click", () =>{
        
            button.classList.toggle("interestedtopicsselected");
            selected = true;
        
    });
});