<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>
    <?php include_once ("../include/commonInclude.php"); ?> 
</head>
<body>
    <?php include_once ("../include/header.php"); ?>
    <br><br>
 <div class="jumbotron">
    <div class="container">
    <form id="contact-form" method="post" action="contact.php" role="form">

    <div class="controls">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div> 

            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_need">Please specify your need *</label>
                    <input type="text" name="num" data-validation="number" data-validation-allowing="negative,number" input name="color" data-validation="number" datavalidation-ignore="$" required="required" class="form-control" id="phone_no" placeholder="Phone Number">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Send message">
                <input type="reset" class="btn btn-success btn-send" value="Clear">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> These fields are required.
                    <a href="https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form" target="_blank"></a>.</p>
            </div>
        </div>
    </div>

</form>
</div>
</div>
<div class="container">
    <iframe width="70%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=bangalore+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Draw map route</a>
    </iframe>
    </div><br />


    <?php include_once ("../include/footer.php"); ?>
</body>
</html>