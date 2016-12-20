<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LoL Informatics - Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/MyCSS.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87011525-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
    <!-- YOUR CONTENT HERE -->
    <div class="Pwrap2" style="background-color:powderblue;">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                    <a class="navbar-brand" href="index.php">LoL Informatics</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">About Us</a></li>
                        <li><a href="index.php#Introduction">Introduction <span class="sr-only">(current)</span></a></li>
                        <li><a href="index.php#ChampionSpotlight">Champion Spotlight</a></li>
                        <li><a href="index.php#Champions">Champions</a></li>
                        <li><a href="index.php#Users">Users</a></li>
                        <li><a href="form.php">Form</a></li>
                        <li><a href="plots.php">Plots</a>
                            <li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <form id="demoform" class="form-horizontal" method="post" action="form.php">

                <div class="form-group">
                    <label for="summoner" class="col-sm-2 control-label">Summoner Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="summoner" name="summoner" placeholder="Summoner Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email Address</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="passwrd" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="passwrd" name="passwrd" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Dropdown" class="col-sm-2 control-label">Rank</label>
                    <div class="col-sm-5">
                        <select class="form-control" type="Dropdown" id="Dropdown" name="Dropdown">
                <option value="" selected disabled>Please select</option>
                <option>Unranked</option>
                <option>Bronze</option>
                <option>Silver</option>
                <option>Gold</option>
                <option>Platinum</option>
                <option>Diamond</option>
                <option>Master</option>
                <option>Challenger</option>
              </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="checkbox" class="col-sm-2 control-label">Preferred Roles</label>
                    <div class="col-sm-5">
                        <div class="checkbox">
                            <label>
                <input type="checkbox" id="checkbox1" name="checkbox[]" value="Top">Top&nbsp;
              </label>
                            <label>
                <input type="checkbox" id="checkbox2" name="checkbox[]" value="Jungle">Jungle&nbsp;
              </label>
                            <label>
                <input type="checkbox" id="checkbox3" name="checkbox[]" value="Mid">Mid&nbsp;
              </label>
                            <label>
                <input type="checkbox" id="checkbox4" name="checkbox[]" value="Bot">Bot&nbsp;
              </label>
                            <label>
                <input type="checkbox" id="checkbox5" name="checkbox[]" value="Support">Support
              </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="availability" class="col-sm-2 control-label">Receive Emails</label>
                    <div class="col-sm-5">
                        <div class="radio">
                            <label><input type="radio" id="availability1" name="availability" value=1 /> Yes &nbsp;</label>
                            <label><input type="radio" id="availability2" name="availability" value=0 /> No</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" placeholder="Your favourite champions" rows="3" id="description" name="description"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-5">
                        <button type="submit" class="btn btn-default">Submit</button>
                        <br/>
                        <br/>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
        </div>
        </form>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/formValidation.min.js"></script>
    <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>

    ?
    <script>
        //validation script
        $(document).ready(function() {
            $('#demoform').formValidation({
                framework: 'bootstrap',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    summoner: {
                        validators: {
                            notEmpty: {
                                message: 'Please enter your summoner name.'
                            },
                            stringLength: {
                                min: 4,
                                max: 19,
                                message: 'Your name must be more than 3 and less than 20 characters long.'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: 'The name can only consist of alphabetical and numberic characters, as well as the underscore.'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Your email address is requierd.'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address.'
                            }
                        }
                    },
                    passwrd: {
                        validators: {
                            notEmpty: {
                                message: 'A password is required.'
                            },
                            different: {
                                field: 'summoner',
                                message: 'Your password cannot be the same as your summoner name.'
                            },
                            stringLength: {
                                min: 7,
                                max: 19,
                                message: 'The password must be more than 6 characters long and less than 20 characters long.'
                            }
                        }
                    },
                    Dropdown: {
                        validators: {
                            notEmpty: {
                                message: 'Your rank is required.'
                            }
                        }
                    },
                    "checkbox[]": {
                        validators: {
                            notEmpty: {
                                message: 'You must select at least one role.'
                            }
                        }
                    },
                    availability: {
                        validators: {
                            notEmpty: {
                                message: 'You must select whether or not you wish to receive emails.'
                            }
                        }
                    },
                    description: {
                        validators: {
                            notEmpty: {
                                message: 'You must enter some preferred champions.'
                            }
                        }
                    }
                }
            });
        });
    </script>

    <?php
    //checking if user and email already exists
    $checkDB = new mysqli('localhost','root','','lab');
    $check = $checkDB->query("SELECT summoner,email FROM lab ");
    $checkName = $_POST["summoner"];
    $checkEmail = $_POST["email"];
    while ($row = $check->fetch_assoc()) {
      if ($checkName == $row['summoner'])
      {
        echo '<script type="text/javascript">alert("This Summoner name is already taken, please enter another one.");</script>';
        return;
      }
      if ($checkEmail == $row['email'])
      {
        echo '<script type="text/javascript">alert("This email address is already registered with us, please use antoehr one.");</script>';
        return;
      }
    }
   $check->free();
   $checkDB->close();
//end
    $db = new mysqli('localhost', 'root', '', 'lab');

    // Insert sample data into the database
    $sql = $db->prepare("INSERT INTO lab(summoner, email, passwrd, Dropdown, checkbox, " .
                        "availability, description) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // These should be retrieved from POST variables
    $name = $_POST["summoner"];
    $email = $_POST["email"];
    $insecure_pass = $_POST["passwrd"]; // This password needs to be securely hashed
    $dropdown = $_POST["Dropdown"]; // This is one of the dropdown selection options
    $checkbox = implode(', ', $_POST["checkbox"]);  // This is a boolean value 0 or 1
    $radio = $_POST["availability"];   // This is an integer value
    $message = $_POST["description"]; // The text area content

    // Securely hash the password
    $password = password_hash($insecure_pass, PASSWORD_DEFAULT);

    // Bind the parameters to the SQL query above, s is a string i is an integer
    $sql->bind_param("sssssis", $name, $email, $password, $dropdown, $checkbox, $radio, $message);

    // Execute the query, inserting the data
    $sql->execute();

    // Close the connection
    $sql->close();
    $db->close();

    ?>



</body>

</html>
