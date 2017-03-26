    /**
     * Created by kongdt on 2/26/17.
     */
    var essapi_1;
    jQuery(document).ready(function () {
        essapi_1 = jQuery("#esg-grid-1-1").tpessential({
            gridID: 1,
            layout: "even",
            forceFullWidth: "off",
            lazyLoad: "on",
            lazyLoadColor: "#FFFFFF",
            row: 1,
            loadMoreAjaxToken: "cab2b5e89d",
            loadMoreAjaxUrl: "http://newstarland.com/wp-admin/admin-ajax.php",
            loadMoreAjaxAction: "Essential_Grid_Front_request_ajax",
            ajaxContentTarget: "ess-grid-ajax-container-",
            ajaxScrollToOffset: "0",
            ajaxCloseButton: "off",
            ajaxContentSliding: "on",
            ajaxScrollToOnLoad: "on",
            ajaxNavButton: "off",
            ajaxCloseType: "type1",
            ajaxCloseInner: "false",
            ajaxCloseStyle: "light",
            ajaxClosePosition: "tr",
            space: 30,
            pageAnimation: "fade",
            paginationScrollToTop: "off",
            spinner: "spinner3",
            spinnerColor: "#FFFFFF",
            evenGridMasonrySkinPusher: "off",
            lightBoxMode: "single",
            animSpeed: 300,
            delayBasic: 1,
            mainhoverdelay: 1,
            filterType: "single",
            showDropFilter: "hover",
            filterGroupClass: "esg-fgc-1",
            aspectratio: "4:3",
            responsiveEntries: [
                {width: 1400, amount: 4},
                {width: 1170, amount: 4},
                {width: 1024, amount: 4},
                {width: 960, amount: 3},
                {width: 778, amount: 3},
                {width: 640, amount: 3},
                {width: 480, amount: 1}
            ]
        });
    
    });
    
