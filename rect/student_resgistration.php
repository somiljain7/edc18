<?php
    include 'config.php';
    include 'registration_process.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/resgistration.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<link href="images/flavcon.png" rel="icon">
<body>
<div class="container">
    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="mt-3 text-center">INDIVIDUAL REGISTRATION</h2>
                <hr>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Full Name</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="Full Name" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="college">Branch</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-university"></i></div>
                        <input type="text" name="collegeName" class="form-control" id="email"
                               placeholder="Branch" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="college">Contact Number</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-mobile"></i></div>
                        <input type="text" name="contact" class="form-control" maxlength=10
                               placeholder="Contact Number" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="college">WhatsApp Number</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-whatsapp"></i></div>
                        <input type="text" name="wcontact" class="form-control" maxlength=10
                               placeholder="WhatsApp Number" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-Mail Address</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        
        <p class="text-secondary">Please watch this video before choosing this domain</p>

        
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/ErB5lQZXpSQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Domain (Choose Any Of Two)</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                       
                       
                        <div class="form-check mt-2 mt-2">
                            <input class="form-check-input" type="radio" name="domain1" value="Technical And Designing" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                                    Domain One: (   Technical And Designing   )                                                
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Content Writing" name="domain2" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                                    Domain Two:                 ( Content Writing  )                                                   
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Corporate Relations" name="domain3" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                                     Domain Three:  ( Corporate Relations )
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Creativity" name="domain4" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                                       Domain Four:  ( Creativity )
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Publicity" name="domain5" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                                        Domain Five:  ( Publicity ) 
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Marketing" name="domain6" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                                         Domaim Six: ( Marketing )
                            </label>
                        </div>
                        
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Media Cell" name="domain7" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                                            Domain Seven: ( Media Cell )
                            </label>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>

               <div class="row mt-4">
            <div class="col-md-3 field-label-responsive">
               <label for="ques1">
	 What are the three most important things that you look forward to before joining EDC?
               </label>
            </div>
            <div class="col-md-6">
<div class="form-group">
  <label for="comment">Answer:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
       
       
 <div class="row mt-4">
            <div class="col-md-3 field-label-responsive">
               <label for="ques1">
	 How lucky are you and why?
               </label>
            </div>
            <div class="col-md-6">
<div class="form-group">
  <label for="comment">Answer:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        
 <div class="row mt-4">
            <div class="col-md-3 field-label-responsive">
               <label for="ques1">
	 
	What according to you, is the difference between a group and a team?


               </label>
            </div>
            <div class="col-md-6">
<div class="form-group">
  <label for="comment">Answer:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        
        
 <div class="row mt-4">
            <div class="col-md-3 field-label-responsive">
               <label for="ques1">
            "It’s easy to knock off an innovative product, but an innovative business system is much harder to replicate.".Comment on the above statement within 60 words
               </label>
            </div>
            <div class="col-md-6">
<div class="form-group">
  <label for="comment">Answer:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </div>
        </div>
    </form>
</div>
               
</body>
</html>
