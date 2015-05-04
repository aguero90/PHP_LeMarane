
var MyCarousel = function (element) {
    this.carouselContainer = element;
};

MyCarousel.prototype = {
    carouselContainer: null,
    carouselSlider: null,
    paginationItems: null,
    goToPreviousPageButton: null,
    goToNextPageButton: null,
    currentPaginationItem: null,
    touchStartX: null,
    touchEndX: null,
    init: function () {

        this.carouselSlider = document.getElementById("carouselSlider");
        this.paginationItems = this.carouselContainer.querySelectorAll(".paginationItem");
        this.goToPreviousPageButton = document.getElementById("goToPreviousPage");
        this.goToNextPageButton = document.getElementById("goToNextPage");
        this.currentPaginationItem = this.paginationItems[0];


        for (var i = 0; i < this.paginationItems.length; i++) {

            this.paginationItems[i].addEventListener("click", this.changePage.bind(this));
        }

        this.goToPreviousPageButton.addEventListener("click", this.goToPreviousPage.bind(this));
        this.goToNextPageButton.addEventListener("click", this.goToNextPage.bind(this));

        if (this.isTouchDevice()) {

            this.carouselContainer.addEventListener("touchstart", this.touchStart.bind(this));
            this.carouselContainer.addEventListener("touchend", this.touchEnd.bind(this));
        }

    },
    changePage: function (e) {

        e.preventDefault(); // per evitare l'azione di default del link xD


        if (this.currentPaginationItem.dataset.number === e.currentTarget.dataset.number) {

            // ho cliccato sulla pagina attiva => non faccio nulla
            return;
        }


        this.setTranslate(e.currentTarget.dataset.number);


        this.currentPaginationItem.removeClass("active");
        e.currentTarget.addClass("active");
        this.currentPaginationItem = e.currentTarget;

    },
    goToPreviousPage: function (e) {

        e.preventDefault(); // per evitare l'azione di default del link xD

        if (this.currentPaginationItem.dataset.number <= 1) {
            return;
        }

        this.paginationItems[this.currentPaginationItem.dataset.number - 2].click();
    },
    goToNextPage: function (e) {

        e.preventDefault(); // per evitare l'azione di default del link xD

        if (this.currentPaginationItem.dataset.number >= this.paginationItems.length) {
            return;
        }

        this.paginationItems[this.currentPaginationItem.dataset.number].click();
    },
    setTranslate: function (pageNumber) {

        /* <NOTA: metto -100.2 perchè c'è un problemino di spazi nella lista di post o.O>
         *
         * <SOLUZIONE>
         *
         * La tecnica per allineare orizzontalmente tramite "display: inline-bloc;" e
         * "white-space: nowrap" crea degl spazi bianchi a causa dei new line (/n)
         * presenti nel documento HTML.
         * Quindi per risolvere questo problema basta comprimere il file HTML facendo in
         * modo che non contenga degli spazi bianchi xD
         */
        this.carouselSlider.setAttribute("style", "transform: translate3d(" + -100.2 * (pageNumber - 1) + "%, 0, 0);");

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

MyCarousel.constructor = MyCarousel;


Element.prototype.myCarousel = function () {

    (new MyCarousel(this)).init();
};


if (!Element.addClass) {


    Element.prototype.addClass = function (className) {

        if (this.classList) {
            this.classList.add(className);
        } else if (!this.hasClass(className)) {
            // Explorer <= 9
            this.className += ' ' + className;
        }

    };
}

if (!Element.removeClass) {

    Element.prototype.removeClass = function (className) {

        if (this.classList) {
            this.classList.remove(className);
        } else {
            // Explorer <= 9
            this.className = this.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
        }

    };
}

if (!Element.hasClass) {

    Element.prototype.hasClass = function (className) {

        if (this.classList) {
            return this.classList.contains(className);
        } else {
            // Explorer <= 9
            return (new RegExp('(^| )' + className + '( |$)', 'gi')).test(this.className);
        }
    };

}
