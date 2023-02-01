
    setInterval(function(){

        $.ajax({
            type: "POST",
            url: "re.php",
            dataType: 'html',
            success: function(result){
                $("#response").html(result);
            }
        })

    }, 1000)
