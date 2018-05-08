$(document).ready(function($) {
    $('a[data-rel^=lightcase]').lightcase();

    // Formular

    $("#less_than_year").change(function(){
        if ($('#less_than_year').is(':checked') == true) {
            $('#years').val('').prop('disabled', true);
        } else {
            $('#years').val('').prop('disabled', false);
        }
    });

    $("#other_sports").change(function(){
        if ($('#other_sports').is(':checked') == true) {
            $('#other_sports_field').val('').prop('disabled', false);
        } else {
            $('#other_sports_field').val('').prop('disabled', true);
        }
    });

    $("#no_handicap").change(function(){
        if ($('#no_handicap').is(':checked') == true) {
            $('#handicap').val('').prop('disabled', true);
        } else {
            $('#handicap').val('').prop('disabled', false);
        }
    });

});