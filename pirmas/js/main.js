function patikrinimas() {
    var x = document.forms["forma"]["fname"].value;
    var z = document.forms["forma"]["fname1"].value;
}


function vienas() {
    var fname = $('#ex2').val();
    var fname1 = $('#exampleTextarea').val();
    //console.log("fname" + fname + fname1);
    $.ajax({
        type: "POST",
        url: "validate.php",
        data: { "fname": fname, "fname1": fname1 },
        success: function(html) {
            console.log("atsakymas " + html);
        }
    });
}