$(document).ready(function() {





    $("#imgScale").css("color", "#4ea685");
    $("#c__caption").text($("img.fff").attr("alt"));

    var imagechange = $('img.fff').attr('src');
    $("#c__slide_0011").attr("src", imagechange);


    // $("#c__gallery-img").css("background-image", "url(" + $("img#1").attr("src") + ")");
    // Change image on selection
    $("#c__gallery img").click(function() {
        // Get current image source
        var captionText = $(this).attr("alt")
        var image = $(this).attr("src");

        // Change image
        $("#c__slide_0011").attr("src", image);

        // $("#c__gallery-img").css("background-image", "url(" + image + ")");
        $("#c__caption").text(captionText);
        // Apply link to image

        // Use id for count
        $("#count").text($(this).attr("id"));
    });

    // Get total number of images
    var gallerySize = $(".c__gallery-thumbnails img").length;
    $("#total").text(gallerySize);


    // $("#c__gallery-img").css("background-size", "contain");

});






function liked() {
    var element = document.getElementById("like");
    element.classList.toggle("liked");
}

function wishlist() {
    var element = document.getElementById("wishlist");
    element.classList.toggle("wishlisted");
}

class readMore {
    constructor() {
        this.content = '.--c--content-detail-';
        this.buttonToggle = '.c--readmore__toggle';
    }

    bootstrap() {
        this.setNodes();
        this.init();
        this.addEventListeners();
    }

    setNodes() {
        this.nodes = {
            contentToggle: document.querySelector(this.content)
        };

        this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(this.buttonToggle);
    }

    init() {
        const { contentToggle } = this.nodes;

        this.stateContent = contentToggle.innerHTML;

        contentToggle.innerHTML = `${this.stateContent.substring(0, 500)}...`;
    }

    addEventListeners() {
        this.buttonToggle.addEventListener('click', this.onClick.bind(this))
    }

    onClick(event) {
        const targetEvent = event.currentTarget;
        const { contentToggle } = this.nodes

        if (targetEvent.getAttribute('aria-checked') === 'true') {
            targetEvent.setAttribute('aria-checked', 'false')
            contentToggle.innerHTML = this.stateContent;
            this.buttonToggle.innerHTML = 'Show less'

        } else {
            targetEvent.setAttribute('aria-checked', 'true')
            contentToggle.innerHTML = `${this.stateContent.substring(0, 500)}...`
            this.buttonToggle.innerHTML = 'Show more'
        }
    }
}


const initReadMore = new readMore();
initReadMore.bootstrap()