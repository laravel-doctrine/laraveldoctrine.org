function Sidebar(container) {

    var $sidebar;
    var self = this;
    var $container = $(container);

    /**
     * Init sidebar
     */
    this.init = function () {
        $sidebar = $container.scotchPanel({
            containerSelector: 'body',
            direction: 'left',
            duration: 300,
            transition: 'ease',
            distanceX: '70%',
            forceMinHeight: true,
            minHeight: '2500px',
            enableEscapeKey: true
        }).show();
    };

    /**
     * Init listeners
     */
    this.initListeners = function () {
        $('.toggle-slide').click(function () {
            self.toggle();
        });

        $('.overlay').click(function () {
            self.close();
        });
    };

    /**
     * Toggle sidebar
     * @returns {boolean}
     */
    this.toggle = function () {
        $sidebar.css('overflow', 'scroll');
        $sidebar.toggle();
        return false;
    };

    /**
     * Close sidebar
     * @returns {boolean}
     */
    this.close = function () {
        $sidebar.close();
    };

    this.init();
    this.initListeners();
}
