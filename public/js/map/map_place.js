
function initialize() {
    //Map parametrs
    var mapOptions_place = {
        zoom: 10,
        center: new google.maps.LatLng( 9.959612, 126.054661),
        mapTypeId: google.maps.MapTypeId.ROADMAP,

        mapTypeControl: false,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            position: google.maps.ControlPosition.BOTTOM_CENTER
        },
        panControl: false,
        panControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT
        },
        zoomControl: false,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE,
            position: google.maps.ControlPosition.TOP_RIGHT
        },
        scaleControl: false,
        scaleControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT
        },
        streetViewControl: false,
        streetViewControlOptions: {
            position: google.maps.ControlPosition.LEFT_TOP
        },
        scrollwheel: false
    }

    //map
    var map_place = new google.maps.Map(document.getElementById("map_place"), mapOptions_place);

    //category
    var Bank_place = 'images/icon/Bank.png';
    var Cafe_place = 'images/icon/Cafe.png';
    var Cinema_place = 'images/icon/Cinema.png';
    var Club_place = 'images/icon/Club.png';
    var Park_place = 'images/icon/Park.png';
    var Port_place = 'images/icon/Port.png';
    var Post_place = 'images/icon/Post.png';
    var Shop_place = 'images/icon/Shop.png';
    var Showplace_place = 'images/icon/Showplace.png';
    var Sport_place = 'images/icon/Sport.png';

    //positions
    var point_place = new google.maps.LatLng(9.959612,  126.054661);

    //markers
    var marker_place = className = 'Cafe';
    var marker_place = new google.maps.Marker({
        position: point_place,
        map: map_place,
        category: Cafe_place,
        icon: Showplace_place,
        title: "point_place"
    });
};
