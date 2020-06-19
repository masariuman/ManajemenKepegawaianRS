<script>
    $(document).ready(function(){
        $("#strB").click(function(){
            $("#str").show();
            $('#strB').addClass('active');
            $("#sikp").hide();
            $('#sikpB').removeClass('active');
            $("#spk").hide();
            $('#spkB').removeClass('active');
            $("#rkk").hide();
            $('#rkkB').removeClass('active');
            $('html, body').animate({
                scrollTop: $("#str").offset().top
            }, 2000);
        });
        $("#sikpB").click(function(){
            $("#str").hide();
            $('#strB').removeClass('active');
            $("#sikp").show();
            $('#sikpB').addClass('active');
            $("#spk").hide();
            $('#spkB').removeClass('active');
            $("#rkk").hide();
            $('#rkkB').removeClass('active');
            $('html, body').animate({
                scrollTop: $("#sikp").offset().top
            }, 2000);
        });
        $("#spkB").click(function(){
            $("#str").hide();
            $('#strB').removeClass('active');
            $("#sikp").hide();
            $('#sikpB').removeClass('active');
            $("#spk").show();
            $('#spkB').addClass('active');
            $("#rkk").hide();
            $('#rkkB').removeClass('active');
            $('html, body').animate({
                scrollTop: $("#spk").offset().top
            }, 2000);
        });
        $("#rkkB").click(function(){
            $("#str").hide();
            $('#strB').removeClass('active');
            $("#sikp").hide();
            $('#sikpB').removeClass('active');
            $("#spk").hide();
            $('#spkB').removeClass('active');
            $("#rkk").show();
            $('#rkkB').addClass('active');
            $('html, body').animate({
                scrollTop: $("#rkk").offset().top
            }, 2000);
        });
        $("#str_alert").click(function(){
            $("#str").show();
            $('#strB').addClass('active');
            $("#sikp").hide();
            $('#sikpB').removeClass('active');
            $("#spk").hide();
            $('#spkB').removeClass('active');
            $("#rkk").hide();
            $('#rkkB').removeClass('active');
            $('html, body').animate({
                scrollTop: $("#str").offset().top
            }, 2000);
        });
        $("#sikp_alert").click(function(){
            $("#str").hide();
            $('#strB').removeClass('active');
            $("#sikp").show();
            $('#sikpB').addClass('active');
            $("#spk").hide();
            $('#spkB').removeClass('active');
            $("#rkk").hide();
            $('#rkkB').removeClass('active');
            $('html, body').animate({
                scrollTop: $("#sikp").offset().top
            }, 2000);
        });
        $("#spk_alert").click(function(){
            $("#str").hide();
            $('#strB').removeClass('active');
            $("#sikp").hide();
            $('#sikpB').removeClass('active');
            $("#spk").show();
            $('#spkB').addClass('active');
            $("#rkk").hide();
            $('#rkkB').removeClass('active');
            $('html, body').animate({
                scrollTop: $("#spk").offset().top
            }, 2000);
        });
        $("#rkk_alert").click(function(){
            $("#str").hide();
            $('#strB').removeClass('active');
            $("#sikp").hide();
            $('#sikpB').removeClass('active');
            $("#spk").hide();
            $('#spkB').removeClass('active');
            $("#rkk").show();
            $('#rkkB').addClass('active');
            $('html, body').animate({
                scrollTop: $("#rkk").offset().top
            }, 2000);
        });
    });
</script>
