<script>
	$.validator.addMethod(
        "regex",
        function(value, element, regexp) 
        {
            if( value.length == 0 )
                return true;
            var re = new RegExp(regexp);
            return re.test(value);
        },
        "Invalid Input"
    );

	$.ajaxSetup({
        headers:
        {
            'X-CSRF-Token': '{{ csrf_token() }}'
        }
    });

	$("#profile").validate({
        errorElement:'span',
        errorClass:'error',
        rules: {
            name: {  
                required: true
            },
            username: {  
                required: true,
                remote: {
                    url: "{{ URL::to('admin/check_username') }}",
                    type: "post"
                }
            },
            email: {  
                required: true,
                regex: /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i,
                remote: {
                    url: "{{ URL::to('admin/check_email') }}",
                    type: "post"
                }
            },
            password:{
                minlength: 6
            },
            re_password: {
                equalTo: "#password"
            }
        },
        messages:{
        	name: {
                required: "Plaese input your Name"
            },
            username: {
                required: "Plaese input your Username",
                remote: "Username already taken!"
            },
            email: {
                required: "Plaese input your email address",
                regex: "Plaese input valid email address",
                remote: "Email already in use!"
            },
            password:{
                required: "Please input your password",
                minlength: "Minimun length of your password must be 6 characters"
            },
            re_password: {
                required: "Please type the same password again",
                equalTo: "Please type the same password again"
            }
        }
    });
</script>