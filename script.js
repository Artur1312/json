$(document).ready(function(){

    // submit button click
    $("#submit").click(function(){

        var name = $("#txt_name").val();
        var email = $("#txt_email").val();
        var lang = [];

        // Initializing array with Checkbox checked values
        $("input[name='prolang']:checked").each(function(){
            lang.push(this.value);
        });

        if(email != ''){
            $.ajax({
                url: 'getData.php',
                type: 'post',
                data: {name:name,email:email,lang:lang},
                dataType: 'JSON',
                success: function(response){

                    $('.details').show();

                    // selecting values from response Object
                    var name = response.name;
                    var email = response.email;
                    var lang = response.lang;
                    var foundjquery = response.foundjquery;

                    // setting values
                    $('#name').text(name);
                    $('#email').text(email);
                    $('#lang').text(lang);
                    $('#foundjquery').text(foundjquery);
                }
            });
        }
    });

});