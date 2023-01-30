var placeSearch, autocomplete;
var componentForm = {
    street_number: "short_name",
    route: "long_name",
    locality: "long_name",
    administrative_area_level_1: "short_name",
    country: "long_name",
    postal_code: "short_name"
};

jQuery(document).ready(function(){

    var pays = jQuery('#pays').val();
    var ville = jQuery('#ville').val();

    if(pays == 'Israel' || pays == 'Israël'){
        jQuery('#appartenance_religieuse').html( jQuery('#israel').html() );
    }else{
        jQuery('#appartenance_religieuse').html( jQuery('#monde').html() );
    }

    if( ville.length > 0 && pays.length > 0 ){
        $.ajax({
            url: "/get_chatranes",
            data:{
                ville: ville,
                pays: pays,
                handicap: $('input[name="handicap_choix"]').val()
            },
            type:'GET',
            success:function(response){

                if(response == ''){
                    $('#no-chatrane').show();
                    $('#code_chatrane').html('');
                }else{
                    $('#no-chatrane').hide();
                    $('#code_chatrane').html(response);
                }
            }
        });
    }


})

function initMap() {
    // Create the autocomplete object, restricting the search to geographical
    // location types.
    autocomplete = new google.maps.places.Autocomplete(
        /** @type {!HTMLInputElement} */ (document.getElementById(
            "search-address"
        )),
        { types: ["geocode"] }
    );

    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    autocomplete.addListener("place_changed", fillInAddress);
}

function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();


    // Get each component of the address from the place details
    // and fill the corresponding field on the form.

    var pays = getCountry(place.address_components);
    var ville = getLocality(place.address_components);


    jQuery('#pays').val(pays);
    jQuery('#ville').val(ville);

    if(pays == 'Israel' || pays == 'Israël'){
        jQuery('#appartenance_religieuse').html( jQuery('#israel').html() );
    }else{
        jQuery('#appartenance_religieuse').html( jQuery('#monde').html() );
    }

    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            jQuery("." + addressType).val(val);

        }
    }


    $.ajax({
        url: "/get_chatranes",
        data:{
            ville: $('#ville').val(),
            pays: $('#pays').val(),
            handicap: $('input[name="handicap_choix"]').val()
        },
        type:'GET',
        success:function(response){

            if(response == ''){
                $('#no-chatrane').show();
                $('#code_chatrane').html('');
            }else{
                $('#no-chatrane').hide();
                $('#code_chatrane').html(response);
            }
        }
    });
}

function getCountry(addrComponents) {

    for (var i = 0; i < addrComponents.length; i++) {
        if (addrComponents[i].types[0] == "country") {
            return addrComponents[i].long_name;
        }
        if (addrComponents[i].types.length == 2) {
            if (addrComponents[i].types[0] == "political") {
                return addrComponents[i].long_name;
            }
        }
    }
    return false;
}

function getLocality(addrComponents) {


    for (var i = 0; i < addrComponents.length; i++) {
        if (addrComponents[i].types[0] == "locality") {
            return addrComponents[i].long_name;
        }
        if (addrComponents[i].types.length == 2) {
            if (addrComponents[i].types[0] == "political") {
                return addrComponents[i].long_name;
            }
        }

        if (addrComponents[i].types[0] == "administrative_area_level_1") {
            return addrComponents[i].long_name;
        }


        if (addrComponents[i].types[0] == "administrative_area_level_2") {
            return addrComponents[i].long_name;
        }
    }
    return false;
}


