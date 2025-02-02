let open = true;

const boxes = document.querySelectorAll(".faqs");

boxes.forEach((box, index) => {
    box.addEventListener("click", function () {
        const content = document.querySelectorAll(".faqsinvisible")[index];


        if (open) {
            content.style.animation = 'faqsopen 0.6s ease-in forwards';
            open = false;
        } else {
            content.style.animation = 'faqsclose 0.6s ease-out forwards';
            open = true;
        }
    });
});