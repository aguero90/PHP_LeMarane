

/* <NOTA:> LA MAGGIOR PARTE DELLE ANIMAZIONI È PRESA DA <animate.css> */


var MySlider = function (element) {

    this.wrapper = element;
};

MySlider.prototype = {
    previous: null,
    next: null,
    navigationItems: null,
    images: null,
    currentImageNumber: null,
    transitions: null,
    touchStartX: null,
    touchEndX: null,
    timer: null,
    progressBar: null,
    progressBarTimer: null,
    init: function () {

        this.previous = document.getElementById("previousImage");
        this.next = document.getElementById("nextImage");
        this.progressBar = document.getElementById("progressBar");

        this.navigationItems = this.wrapper.querySelectorAll(".navigationItem");
        this.images = this.wrapper.querySelectorAll(".page");

        this.transitions = [
            "blur",
            "grayScale",
            "sepia",
            "brightness",
            "brightnessReverse",
            "bounceIn",
            "bounceInDown",
            "bounceInLeft",
            "bounceInRight",
            "bounceInUp",
            "fadeIn",
            "fadeInDown",
            "fadeInDownBig",
            "fadeInLeft",
            "fadeInLeftBig",
            "fadeInRight",
            "fadeInRightBig",
            "fadeInUp",
            "fadeInUpBig",
            "flipInX",
            "flipInY",
            "rotateIn",
            "rotateInDownLeft",
            "rotateInDownRight",
            "rotateInUpLeft",
            "rotateInUpRight",
            "slideInDown",
            "slideInLeft",
            "slideInRight",
            "slideInUp",
            "zoomIn",
            "zoomInDown",
            "zoomInLeft",
            "zoomInRight",
            "zoomInUp",
            "rollIn"
        ];

        for (var i = 0; i < this.navigationItems.length; i++) {

            this.navigationItems[i].addEventListener("click", this.showImage.bind(this, i));
        }

        this.previous.addEventListener("click", this.showPreviousImage.bind(this));
        this.next.addEventListener("click", this.showNextImage.bind(this));


        if (this.isTouchDevice()) {

            this.wrapper.addEventListener("touchstart", this.touchStart.bind(this));
            this.wrapper.addEventListener("touchend", this.touchEnd.bind(this));
        }

        // rimuoviamo lo spinner
        this.wrapper.removeChild(document.getElementById("waitingSpinner"));


        this.randomStart();

    },
    showImage: function (imageNumber, e) {

        this.images[this.currentImageNumber].setAttribute("class", "page");
        this.images[imageNumber].setAttribute("class", "page animated " + this.selectRandomTransition());

        this.currentImageNumber = imageNumber;

        this.startTimer();
    },
    showPreviousImage: function (e) {

        if (this.currentImageNumber <= 0) {

            // se ho cliccato su "precedente" quando mi trovavo alla
            // prima immagine => mostro l'ultima
            this.showImage(this.images.length - 1);
        } else {

            this.showImage(this.currentImageNumber - 1);
        }
    },
    showNextImage: function (e) {

        if (this.currentImageNumber >= this.images.length - 1) {

            // se ho cliccato su "successiva" quando mi trovavo all'ultima
            // immagine => mostro l'ultima
            this.showImage(0);
        } else {

            this.showImage(this.currentImageNumber + 1);
        }
    },
    randomStart: function () {

        this.currentImageNumber = Math.floor(Math.random() * this.images.length);
        this.images[this.currentImageNumber].setAttribute("class", "page animated " + this.selectRandomTransition());

        this.startTimer();

    },
    startTimer: function () {

        // dopo 15 secondi passiamo automaticamente all'immagine successiva
        if (this.timer) {

            clearTimeout(this.timer);
            this.progressBar.removeClass("start");
        }

        if (this.progressBarTimer) {

            clearTimeout(this.progressBarTimer);
            this.progressBar.removeClass("start");
        }

        this.timer = setTimeout(this.showNextImage.bind(this), 15000);
        this.progressBarTimer = setTimeout(this.startProgressBar.bind(this), 100);
    },
    startProgressBar: function () {
        this.progressBar.addClass("start");
    },
    selectRandomTransition: function () {

        return this.transitions[Math.floor(Math.random() * this.transitions.length)];
    },
    isTouchDevice: function () {

        return 'ontouchstart' in window // works on most browsers
                || 'onmsgesturechange' in window; // works on ie10
    },
    touchStart: function (e) {

        this.touchStartX = e.touches[0].clientX;
    },
    touchEnd: function (e) {

        this.touchEndX = e.changedTouches[0].clientX;

        if (this.touchStartX - this.touchEndX <= -200) {

            // ha mosso verso destra, quindi
            // vuole andare a sinistra
            this.goToPreviousPageButton.click();

        } else if (this.touchStartX - this.touchEndX >= 200) {

            // ha mosso verso sinistra, quindi
            // vuole andare a destra
            this.goToNextPageButton.click();
        }
    }
};

MySlider.constructor = MySlider;

Element.prototype.mySlider = function () {

    (new MySlider(this)).init();
};
