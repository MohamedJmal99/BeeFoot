// function slides() {
//     console.log("slides function is running");

//     const elementsRight = document.querySelectorAll('.section2-content-right');
//     const elementsLeft = document.querySelectorAll('.section2-content-left');
    
//     console.log("elementsRight:", elementsRight);
//     console.log("elementsLeft:", elementsLeft);
    
//     function handleScroll() {
//         elementsRight.forEach((el) => {
//             if (isElementInViewport(el)) {
//                 console.log("Adding visible class to right element");
//                 el.classList.add('visible');
//             }
//         });

//         elementsLeft.forEach((el) => {
//             if (isElementInViewport(el)) {
//                 console.log("Adding visible class to left element");
//                 el.classList.add('visible');
//             }
//         });
//     }

//     function isElementInViewport(el) {
//         const rect = el.getBoundingClientRect();
//         return (
//             rect.top >= 0 &&
//             rect.left >= 0 &&
//             rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//             rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//         );
//     }

//     window.addEventListener('scroll', handleScroll);
//     window.addEventListener('resize', handleScroll);
    
//     // Initial check in case elements are already in view on page load
//     handleScroll();
// }

// // Call the slides() function to initiate
// slides();
