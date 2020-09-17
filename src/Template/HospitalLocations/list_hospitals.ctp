<?= $this->Html->css('hospital.css'); ?>
<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet'/>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
<link
        rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
        type="text/css"
/>
<div class="hospitals-container">
    <div class="inner">
        <h1>Find closest Hospitals/Clinics</h1>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="pad-bottom"> Allow us to use your location to find your closest hospital/clinic.</div>
                <a class="btn btn-primary pad-bottom" id="locate_user">Locate Me</a>
                <div class="pad-bottom">Please provide your postcode: <input class="form-control" name="postcode" id="postcode"
                                                          placeholder="Postcode..."/></div>

                <select name="hospital" id="hospital" class="pad-bottom">
                    <option postcode="9999">Please select a hospital to display detail</option>
                    <?php foreach ($hospitalLocations as $hospitalLocation): ?>
                        <option postcode="<?= $hospitalLocation->Postcode ?>"
                                long="<?= $this->Number->format($hospitalLocation->﻿X) ?>"
                                lat="<?= $this->Number->format($hospitalLocation->Y) ?>"
                                labelname="<?= $hospitalLocation->LabelName ?>"
                                address="<?= $hospitalLocation->StreetNum ?> <?= $hospitalLocation->RoadName ?> <?= $hospitalLocation->RoadType ?>, <?= $hospitalLocation->State ?> <?= $hospitalLocation->Postcode ?>"
                                type="<?= $hospitalLocation->Type ?>"><?php echo $hospitalLocation->LabelName ?></option>
                    <?php endforeach; ?>
                </select>

                <div id="hospital-table" class="pad-bottom">
                    <h3>Hospital Detail</h3>
                    <table class="table table-hover">
                        <tr>
                            <td>Hospital/Clinic Name</td>
                            <td id="labelname"></td>
                        </tr>
                        <tr>
                            <td>Hospital/Clinic Address</td>
                            <td id="address"></td>
                        </tr>
                        <tr>
                            <td>Hospital/Clinic Type</td>
                            <td id="type"></td>
                        </tr>
                    </table>
                </div>

            </div>

            <div class="col-lg-6 col-md-6">
                <div id='map'></div>

            </div>


        </div>
    </div>

</div>


<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic2l5YW5nbWFwYm94IiwiYSI6ImNrMjVkb216NDAzYjMzcG9namJxeWxxZ2sifQ.mTmhBKSvYx4It6JOqkIFIQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [144.9631, -37.8136],
        zoom: 10
    });

    map.addControl(
        new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            zoom: 14,
            placeholder: 'Enter Search..',
            mapboxgl: mapboxgl
        })
    );

    var geolocate = new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
        },
        trackUserLocation: true,
    });
    map.addControl(geolocate);

    $("#locate_user").click(function () {
        geolocate.trigger();
    });


    $('#hospital').select2();

    $("#postcode").on('change', function () {
        var postcode = parseInt($("#postcode").val());
        $("#hospital option").each(function () {
            var hospital = $(this);
            var hos_postcode = parseInt(hospital.attr('postcode'));
            var long = parseFloat(hospital.attr('long'));
            var lat = parseFloat(hospital.attr('lat'));
            var labelname = hospital.attr('labelname');
            var address = hospital.attr('address');
            if(hos_postcode!==9999){
                if (hos_postcode > (postcode + 3)) {
                    hospital.remove();
                }
                else if (hos_postcode < (postcode - 3)) {
                    hospital.remove();
                }
                else {
                    var marker = new mapboxgl.Marker()
                        .setLngLat([long, lat])
                        .setPopup(new mapboxgl.Popup().setHTML("<div>Name: " + labelname + "</div><div>Address: " + address + "</div>"))
                        .addTo(map);
                    map.flyTo({center: [long, lat], zoom: 11});
                }
            }
        });


    });

    $(document).ready(function () {
        $('#hospital').on("change", function (e) {
            var hospital = $('#hospital').find(":selected");
            var labelname = hospital.attr("labelname");
            var address = hospital.attr("address");
            var type = hospital.attr("type");
            $("#labelname").text(labelname);
            $("#address").text(address);
            $("#type").text(type);
            $("#hospital-table").show();
        });
    });
</script>