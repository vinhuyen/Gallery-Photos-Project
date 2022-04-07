useEffect(() => {
    if(executeTimer){
        let interval = setInterval(() => {
            let sliderElement = document.getElementById('slider');
            let sliderWidth = sliderElement.clientWidth;

            setCounter(counter + 1);
            if(counter === 100){
                document.getElementById("slider").style.animationPlayState = "running";
            }
            if(sliderWidth >= sliderElement.scrollWidth) {
                setExecuteTimer(false);
                document.getElementById("slider").style.animationPlayState = "paused";
            }

        },10);
        return () => clearInterval(interval);
    }
})

// $(window).scroll(function(){
//     if ($(window).scrollTop() >= 300) {
//         $('header').addClass('u__fixed-header');
//     }
//     else {
//         $('nav').removeClass('u__fixed-header');
//     }
// });
