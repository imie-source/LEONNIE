   $(document).ready(function(){
        $('#send_message').click(function(e){
										  
            e.preventDefault();

            var error = false;
            var name = $('#name').val();
            var email = $('#email').val();
            var subject = $('#subject').val();
            var message = $('#message').val();
            
            if(name.length == 0){
                var error = true;
                $('#name_error').fadeIn(1000);
            }else{
                $('#name_error').fadeOut(1000);
            }
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email_error').fadeIn(1000);
            }else{
                $('#email_error').fadeOut(1000);
            }
            if(subject.length == 0){
                var error = true;
                $('#subject_error').fadeIn(1000);
            }else{
                $('#subject_error').fadeOut(1000);
            }
            if(message.length == 0){
                var error = true;
                $('#message_error').fadeIn(1000);
            }else{
                $('#message_error').fadeOut(1000);
            }
            
            if(error == false){

                $('#send_message').attr({'disabled' : 'true', 'value' : 'Envoi en cours...' });

                $.post("send.php", $("#contact_form").serialize(),function(result){

                    if(result == 'sent'){

                         $('#cf_submit_p').remove();

                        $('#mail_success').fadeIn(1000);
                    }else{
						
                        $('#mail_fail').fadeIn(1000);
                        
                        $('#send_message').removeAttr('disabled').attr('value', 'Message envoyé');
                    }
                });
            }
        });    
    });