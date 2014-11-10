// JavaScript Document


        function resetTextFields()
        {
            $("#postTitle").val("");
            $("#postContent").val("");
        }
 
        function onSuccess(data, status)
        {
            resetTextFields();
            // Notify the user the new post was saved
            $("#notification").fadeIn(2000);
            data = $.trim(data);
            if(data == "SUCCESS")
            {
                $("#notification").css("background-color", "#ffff00");
                $("#notification").text("The post was saved");
            }
            else
            {
                $("#notification").css("background-color", "#ff0000");
                $("#notification").text(data);
            }
            $("#notification").fadeOut(5000);
        }
 
        $(document).ready(function() {
            $("#submit").click(function(){
 
                var formData = $("#newAnnouncementForm").serialize();
 
                $.ajax({
                    type: "POST",
                    url: "newannouncement.php",
                    cache: false,
                    data: formData,
                    success: onSuccess
                });
 
                return false;
            });
 
            $("#cancel").click(function(){
                resetTextFields();
            });
 
        });
 
