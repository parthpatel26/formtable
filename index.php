<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        body {
            background-color: aqua;
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .error {
            color: red;
        }

        .valid {
            border: 4px solid green;
        }

        .invalid {
            border: 4px solid red;
        }

        .focused {
            background-color: rgba(0, 3, 207, 0.3);
        }
    </style>

</head>

<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px; width: 1000px;">
                        <div class="card-body p-4 p-md-5">

                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" theme="white" name="exampleRadios"
                                            flag="white" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            White </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" theme="blue" name="exampleRadios"
                                            flag="blue" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1" flag="blue">
                                            Blue
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" theme="purple" name="exampleRadios"
                                            flag="purple" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1" flag="purple">
                                            Purple
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" theme="pink" name="exampleRadios"
                                            flag="pink" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1" flag="pink">
                                            Pink
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <br />
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form id="form">

                                <div class="row">
                                    <div class="col-md-4 mb-4 pb-2">

                                        <div class=" form-outline">
                                            <label class="form-label" for="firstname">First Name</label>

                                            <input type="text" id="firstname" name="firstname"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="lastname">Last Name</label>

                                            <input type="text" id="lastname" name="lastname"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="username">User Name</label>

                                            <input type="text" id="username" name="username"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                </div>



                                <div class="row">

                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Email</label>
                                            <input type="tel" id="emailAddress" name="emailAddress"
                                                class="form-control form-control-lg" />

                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="city">City</label>
                                            <input type="text" id="city" name="city"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                            </form>



                        </div>
                        <div class="mt-4 pt-2">
                            <button class="btn btn-primary btn-lg" id="submit">Submit</button>
                        </div>
                        <p id="info"></p>
                        <div class="container" style="margin-top: 100px;">
                            <div class="row">
                                <input type="text" id="search" class="form control mb-3 col-md-4 col-sm-4 col-lg-4"
                                    placeholder="Search">
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">id</th>
                                        <th scope="col" id="name">Name</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">City</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="dataTable">

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
   
</body>

<script>
    $(document).ready(function () {

        /////////////// GETTING RESPONSE FROM API WITH AJAX ///////////////
function loadTable(){
        $.ajax({
            tpye: 'POST',
            url: 'api/load.php',
            success: function (data) {
              $('#dataTable').html(data)
                }
        
        });
    }

loadTable()
$('.del').click(function(){
    alert($(this).attr("data-id"))
})

        /////////////// SEARCH BAR USING FILTER AND TOGGLE ///////////////
        $("#search").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#dataTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        /////////////// GETTING ATTRIBUTE VALUE IN ALERT ///////////////

        $('#attr').click(function () {
            $('p').text($("#text_1").attr("flag"))
        })

        $('input[theme], label.form-check-label').mouseenter(function () {
            if ($(this).attr('flag') == 'blue') {
                $('.card-registration').css('background', 'rgba(57, 57, 155, 0.9)', )
                $('input[theme=blue]').prop('checked', true)
                $('body, table').css('color','white')

                console.log($(this).attr('flag'));

            } else if ($(this).attr('flag') == 'purple') {
                $('.card-registration').css('background', 'rgba(127, 57, 218, 0.9)', )
                $('input[theme=purple]').prop('checked', true)
                $('body, table').css('color','white')
                console.log($(this).attr('flag'));

            } else if ($(this).attr('flag') == 'pink') {
                $('.card-registration').css('background', 'rgba(218, 57, 205, 0.9)', )
                $('input[theme=pink]').prop('checked', true)

                console.log($(this).attr('flag'));
                $('body, table').css('color','white')


            } else {
                $('.card-registration').css('background', 'white', )
                $('input[theme=white]').prop('checked', true)
                $('body, table').css('color','black')

                console.log("Default");
            }
        }).trigger("mouseleave")

        /////////////// VALIDATOR DEFAULT VALUES///////////////////////

        $.validator.setDefaults({
            errorClass: "error",
            errorElement: "span"
        })

        $.validator.addMethod('emailCheck', function (value, element) {
            let emailRegEx =
                /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;
            return (emailRegEx.test(value));

        }, 'Please enter valid email');

        /////////////////////////////////// VALIDATE //////////////////
        $('#form').validate({
                rules: {
                    firstname: {
                        required: true
                    },
                    lastname: {
                        required: true

                    },
                    username: {
                        required: true

                    },
                    emailAddress: {
                        required: true,
                        emailCheck: true

                    },
                    city: {
                        required: true

                    }

                },

                messages: {
                    firstname: {
                        required: "First Name is required."
                    },
                    lastname: {
                        required: "Last Name is required."

                    },
                    username: {
                        required: "Username is required."

                    },
                    emailAddress: {
                        required: "Email is required."

                    },
                    city: {
                        required: "City is required."

                    }

                },
            }),

            /////////////// ADD CLASS FOR ERROR AND SUCCESS ///////////////
            $("#form input").blur(function () {
                if (!$(this).valid()) {
                    $(this).addClass('invalid');
                } else {

                    // If it is not blank.
                    $(this).removeClass('invalid').addClass('valid');
                }
            })


        function capLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        /////////////// SUBMIT ON CLICK ///////////////
        var id = 1;

        $('#submit').click(function () {
            var errorCode = 0
            var input = '#form input'
            
            if (!$('#firstname').valid()) {
                $('#firstname').addClass("invalid");
                errorCode++;

            } else {
                $('#firstname').removeClass("invalid").addClass("valid");
            }
            if (!$('#lastname').valid()) {
                $('#lastname').addClass("invalid");
                errorCode++;

            } else {
                $('#lastname').removeClass("invalid").addClass("valid");

            }
            if (!$('#username').valid()) {
                $('#username').addClass("invalid");
                errorCode++;



            } else {
                $('#username').removeClass("invalid").addClass("valid");

            }
            if (!$('#emailAddress').valid()) {
                $('#emailAddress').addClass("invalid");
                errorCode++;


            } else {
                $('#emailAddress').removeClass("invalid").addClass("valid");

            }
            if (!$('#city').valid()) {
                $('#city').addClass("invalid");
                errorCode++;

            } else {
                $('#city').removeClass("invalid").addClass("valid");

            }
            console.log("You have " + errorCode + " Errors");
        


         /////////////// APPEND DATA IN TABLE IF VALIDATIONS ARE TRUE ///////////////


            if (errorCode == 0) {

                confirm('Do you really want to submit?')
                const firstname = $('#firstname').val();
                const lastname = $('#lastname').val();
                const username = $('#username').val();
                const emailAddress = $('#emailAddress').val();
                const city = $('#city').val();
                
                $.ajax({
                type: 'POST',
                url: 'api/insert.php',
                data: {
                    first_name : firstname,lastname : lastname, username :username,emailAddress:emailAddress,city: city
                   
                },
                success: function (data) {
                    loadTable()
                    $('#form').trigger('reset')
                    $('#form input ').removeClass('valid');

                   }
               });
               

            } else {
                alert("Please Fill The Form Properly");
               console.log("You have an Error");

            }


        })
        ////// POST DATA IN JSON ////
    })
</script>

</html>