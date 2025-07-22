var matec = {
    init: function () {
        matec.fancyApps()

        matec.setEqualHeight($(".justify-content-center .box-location"));
        matec.setEqualHeight($(".excitement-image-container .box-img"));

        matec.startCountdown('October 31, 2025 00:00:00');

        $(window).resize(function() {
            /*matec.setEqualHeight($(".justify-content-center .box-location"));*/
            matec.setEqualHeight($(".justify-content-center .box-img"));
        });
    },

    setEqualHeight: function (elements) {
        var maxHeight = 0;

        // Loop through each element to find the maximum height
        elements.each(function() {
            var currentHeight = $(this).height();
            if (currentHeight > maxHeight) {
                maxHeight = currentHeight;
            }
        });

        // Set the maximum height to all div elements
        elements.height(maxHeight);
    },

    fancyApps: function () {
        if (typeof Fancybox !== 'undefined') {
            Fancybox.bind('[data-fancybox]', {});
        }
    }
    ,
    startCountdown: function (target) {
        var $container = $('.countdown');
        if (!$container.length) {
            return;
        }

        var end = new Date(target).getTime();
        function pad(num) {
            return num.toString().padStart(2, '0');
        }

        function update() {
            var now = new Date().getTime();
            var diff = end - now;

            if (diff <= 0) {
                clearInterval(timer);
                diff = 0;
            }

            var days = Math.floor(diff / (1000 * 60 * 60 * 24));
            var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((diff % (1000 * 60)) / 1000);

            var $cols = $container.find('.w-100 > div');
            $cols.eq(0).find('h2').text(pad(days));
            $cols.eq(1).find('h2').text(pad(hours));
            $cols.eq(2).find('h2').text(pad(minutes));
            $cols.eq(3).find('h2').text(pad(seconds));
        }

        update();
        var timer = setInterval(update, 1000);
    }
}


// Wait for the document to be ready
$(document).ready(function () {
    matec.init();
});
