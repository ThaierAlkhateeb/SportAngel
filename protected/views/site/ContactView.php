<h1>Contact: Lorem Ipsum</h1>
<p></p>
 
<div class="status" style="display: none;width: 200px;">
    <a id="closeFlash" style="float:right;text-decoration: none;" href="#contact">×</a>
    <p></p>
</div>
<form name="contactform" id="contactform" method="post" action="#contact">
<label for="name">Name:</label>
<input type="text" name="name" id="name" required placeholder="Name" />
<label for="name">Subject:</label>
<input type="text" name="subject" id="subject" required placeholder="Subject" />
<label for="email">Email:</label>
<input type="email" name="email_from" id="email" required placeholder="email@example.com" />
<label for="message">Message:</label>
<textarea name="message" id="message" required></textarea>
<input type="submit" value="Send Message" />
<input type="hidden" name="to" value="<%=contact.get('adminMail')%>" />

</form>
<br />

<div id="social-network"> <a href="#" target="_blank"><img src="images/facebook.png" alt="Facebook" /></a> <a href="#" target="_blank"><img src="images/flickr.png" alt="Flicker" /></a> <a href="#" target="_blank"><img src="images/linkedin.png" alt="Linkedin" /></a> <a href="#" target="_blank"><img src="images/myspace.png" alt="Myspace" /></a> <a href="#" target="_blank"><img src="images/twitter.png" alt="Twitter" /></a> </div>
    
 
<script type="text/javascript">
$('form#contactform').submit(function(){
    var url = "site/ajaxSendMessage";
    $.ajax({
           type: "POST",
           url: url,
           dataType:'json',
           data: $("#contactform").serialize(), // serializes the form's elements.
           cache:false,
           success: function(data)
           {
            if(data.status=='error')
            {
                $('div.status').addClass('flash-error');
                $('div.status p').html(data.message);
                $('div.status').fadeIn('slow');
              
            }
            else
            {
                $('div.status').addClass('flash-success');
                $('div.status p').html(data.message);
                $('div.status').fadeIn('slow');
            }
               
           }
         });
    return false;
})
                $("a#closeFlash").click(function(){
                        $('div.status').fadeOut();
                });
</script>