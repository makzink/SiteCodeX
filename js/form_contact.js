<script type='text/javascript'>
// <![CDATA[
 
    var frmvalidator  = new Validator("form");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");
 
    frmvalidator.addValidation("email","req",
                "Please provide your email address");
 
    frmvalidator.addValidation("email","email",
                "Please provide a valid email address");
 
    frmvalidator.addValidation("message","maxlen=2048",
                "The message is too long!(more than 2KB!)");
 
// ]]>
</script>