// Contact Form Scripts

$(function() {

    $("#referUs input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
         
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var businessname = $("input#businessname").val(),
                contactname = $("input#contactname").val(),
                referphone = $("input#referphone").val(),
                referemail = $('input#referemail').val(),
                refermaker = $('input#refermaker').val(),
                referretailer = $('input#referretailer').val(),
                referaddress = $('input#referaddress').val(),
                referwebsite = $('input#referwebsite').val(),
                yourname = $('input#yourname').val(),
                youremail = $('input#youremail').val();

              console.log(businessname,"  :  ",
                    contactname,"  :  ",
                    referphone,"  :  ",
                    referemail,"  :  ",
                    refermaker,"  :  ",
                    referretailer,"  :  ",
                    referaddress,"  :  ",
                    referwebsite,"  :  ",
                    yourname,"  :  ",
                    youremail)
           // var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (businessname.indexOf(' ') >= 0) {
                businessname = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "././mail/refer.php",
                type: "POST",
                data: {
                    businessname:businessname,
                    contactname:contactname,
                    referphone:referphone,
                    referemail:referemail,
                    refermaker:refermaker,
                    referretailer:referretailer,
                    referaddress:referaddress,
                    referwebsite:referwebsite,
                    yourname:yourname,
                    youremail:youremail
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#referus').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
                    // $('#referus').trigger("reset");
                  //  $('#referus').modal('close');
                    // $('button#closerefer').click();
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + businessname + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    // $("a[data-toggle=\"tab\"]").click(function(e) {
    //     e.preventDefault();
    //     $(this).tab("show");
    // });
});


/*When clicking on Full hide fail/success boxes */
// $('#name').focus(function() {
//     $('#success').html('');
// });
