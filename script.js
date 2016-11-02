
  $(document).ready(function(){ 
            $("#getJSON").click(function(){
                var url = "json_data.php";
                url = url + "?reference=" + $('#reference').val();
                
                $.getJSON(url,function(json){
                    $("#msg").empty();
                    $("#msg").append("getJSON");
                    $("#firstname").val(json.members[0].firstname);
                    $("#lastname").val(json.members[0].lastname);
                    $("#carmake").val(json.members[0].carmake);
                    $("#carmodel").val(json.members[0].carmodel);
                    $("#year").val(json.members[0].year);
                    $("#miles").val(json.members[0].miles);
                    $("#registration").val(json.members[0].registration);
                    $("#annualprice").val(json.members[0].annualprice);
                    $("#monthlyprice").val(json.members[0].monthlyprice);
                
                    
                });
            });
         });