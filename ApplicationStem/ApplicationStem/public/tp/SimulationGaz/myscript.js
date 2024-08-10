$(document).ready(function(){

    var boxWidth = 268
    var boxHeight = 416

    var particleSpeed = 100;

    var gasA = true;
    var gasB = false;
    $("#gasA").addClass('pressed');
    $("#gasB .gasImg-c").hide();
    var first = true;

    var unlocked = 'P';
    var molPerPump = 30;
    var vMin = 150;

    var n = 0;
    var T = 325;
    var V = 800;
    var R = 0.08206;
    var P = 0;

$('img').bind('dragstart', function(event) { event.preventDefault(); });
$('a').bind('dragstart', function(event) { event.preventDefault(); });

addOnStart()
spaceWaves($('.heat'));
spaceWaves($('.cool'));


// ^^^^  MISC AREA  ^^^^
//  ******************    TIME INTERVAL   ***************
    setInterval(updateImage,50);


//  ******************    VOLUME CONVERSIONS   ***************
    function getVolume(){
        return (parseFloat($("#top").css('top'))+10)/-360*1000;
    }

    function getPixelVolume(volume){
        return volume/1000*-360-10;
    }

//  ******************    POSITION HEAT/COOL WAVES   ***************
    function spaceWaves(div){
        var space = 40;
        div.each(function(){
            $(this).css({'left': space+'px'});
            space=space+100;
        });
    }

//  ******************    STOP LINKS   *********************
    $("a").click(function(){
        return false;
    });

//  ******************    ADD INITIAL PARTICLES   ***************
function addOnStart(){
    addParticles(10,'particleA.png');
    n=molPerPump;
    $("#amount").text(n);
    updatePressure();
    updateRMS();
    updateKE();
}

var countsHeld = 0;
var i=0;
//  ******************    UPDATE IMAGE   *********************
    function updateImage(){
        bounce();
        if(heatClicked || coolClicked){
            changeHeat();
        }

        // allows hold as well as click for changing volume
        if(upDownPressed=="down"){
            countsHeld++;
            if(countsHeld>5){
                moveTop(-1);
            }
        }
        if(upDownPressed=="up"){
            countsHeld++;
            if(countsHeld>5){
                moveTop(1);
            }
        }

        if (i > 5){ // animate the temp waves
        i=0;
        }
        $('.wave').css({'backgroundPosition' : i * -60 + 'px' + " 0px"});
          i++;
    }


// ^^^^  BUTTON AREA   ^^^^

//  ******************    CLICK PUMP  *********************
    $("#pumpTop").click(function(){
        if((gasA || gasB) && n<300){
            $("#pumpTop").animate({'top': '-60'}).animate({'top': '-140'}); // pump motion

            // only reinflate if a gas is selected
            if(n==0 && (gasA || gasB)){
                V = molPerPump*R*T // find volume for 1 atm

                if(V<vMin){ // keep within bounds
                    V=vMin;
                }
                if(V>1000){
                    V=1000;
                }
                var topPos = getPixelVolume(V);
                $("#top").animate({"top":topPos+"px"});
                setTimeout(clickPumpAddParts,100); // delay so no particles get stuck in bottom

                $("#top").draggable("option", "disabled", false); //re-enable drag

            }else{ // What happens normally

                clickPumpAddParts(); 
            }
        }else{
            if(!gasA && !gasB){
                $("#noGas").text("Pas de gaz sélectionné").fadeIn().delay(300).fadeOut(300);
            }else{
                $("#noGas").text("Limite de particules").fadeIn().delay(300).fadeOut(300);
            }
        }
    });

    function clickPumpAddParts(){ // add particles
        if(gasA){
            addParticles(10,'particleA.png');
            n+=molPerPump;
        }
        if(gasB){
            addParticles(10,'particleB.png');
            n+=molPerPump;
        }
        $("#amount").text(n);
        updatePressure();
        updateRMS();
        updateKE();
    }


//  ******************    CLICK LEVER  *********************
    $("#clickValve").click(function(){
        $("#lever").fadeOut(30).delay(400).fadeIn(30); // toggle images
        $("#leverF").fadeIn(30).delay(400).fadeOut(30);

        if(n==molPerPump){ // if all particles released
            $("#top").animate({"top":"-5px"});
            V=0;
            lockUnclick("#vLock");
        }

        if(n>molPerPump/2){ // don't subtract if it's already 0
            n-=molPerPump;
        }

        releaseParticles(10);
        updatePressure();
        updateRMS();
        updateKE();
    });

var dh = 0;
changeHeat();
var heatClicked = false;
var coolClicked = false;
//  ******************   TEMP BUTTONS   *********************
    $("a#hot").click(function(){
        // unclick other
        if(coolClicked){
            $(".cool").hide();
            $("#cold").css({color: 'black'});
            coolClicked=false;
        }

        // toggle button clicked
        if(!heatClicked){
            dh=5;
            $(".heat").fadeIn();
            $(this).css({color: '#E21717'})
            heatClicked=true;
        }else{
            $(".heat").fadeOut();
            $(this).css({color: 'black'})
            heatClicked=false;
        }
        clickButtons()
    });
    $("a#cold").click(function(){
        // unclick other
        if(heatClicked){
            $(".heat").hide();
            $("#hot").css({color: 'black'})
            heatClicked=false;
        }

        // toggle button clicked
        if(!coolClicked){
            dh=-5;
            $(".cool").fadeIn();
            $(this).css({color: '#00B3C6'});
            coolClicked=true;
        }else{

            $(".cool").fadeOut();
            $("a#cold:link").css({color: 'black'});
            coolClicked=false;
        }
        clickButtons()
    });
    $("a#off").click(function(){
        dh=0;
        $(".cool").hide();
        $(".heat").hide();
        $("a#cold").css({color: 'black'});
        $("a#hot").css({color: 'black'});
        coolClicked=false;
        heatClicked=false;
        clickButtons()
        /*$("#off .buttonT-c").show();
        setTimeout(function(){
            $("#off .buttonT-c").hide();
        },200);*/
    });

    function clickButtons(){
        if(coolClicked){
            $("#cold .buttonT-c").show();
        }else{
            $("#cold .buttonT-c").hide();
        }
        if(heatClicked){
            $("#hot .buttonT-c").show();
        }else{
            $("#hot .buttonT-c").hide();
        }
    }


//  ******************   LOCK BUTTON   *********************
    $("#vLock").click(function(){
        if($(this).hasClass('pressed')){
            lockUnclick("#vLock");
        }else{
            lockClick("#vLock");
        }
    });

    function lockClick(lockID){
        if($(lockID).hasClass('pressed')==false){
            $(lockID).addClass('pressed');
            //$("#lockedBubble").show();
            //$("#unlockedBubble").hide();
            $(lockID+" .lock").show();
            $(lockID+" .unlock").hide();
        }
    }
    function lockUnclick(lockID){
        if($(lockID).hasClass('pressed')){
            $(lockID).removeClass('pressed');
            //$("#lockedBubble").hide();
            //$("#unlockedBubble").show();
            $(lockID+" .lock").hide();
            $(lockID+" .unlock").show();
        }
    }

    $("#lockPT").click(function(){
        if($(this).hasClass('pressed')){
            $(this).removeClass('pressed');
        }else{
            $(this).addClass('pressed');

        }
    });


//  ******************    GASS A B BUTTONS   ********************
    $("#gasA").click(function(){
        if(gasA==true){
            gasA=false;
            $("#gasA").removeClass('pressed');
            $("#gasA .gasImg-c").hide();
        }else{
            gasA=true;
            $("#gasA").addClass('pressed');
            $("#gasA .gasImg-c").show();
        }
    });

    $("#gasB").click(function(){
        if(gasB==true){
            gasB=false;
            $("#gasB").removeClass('pressed');
            $("#gasB .gasImg-c").hide();
        }else{
            gasB=true;
            $("#gasB").addClass('pressed');
            $("#gasB .gasImg-c").show();
        }
    });


var volumeChange = false;
    
//  ******************    CLICK MOVE TOP   *********************
    $("#container").click(function(e){
        if(V!=0){
            topPos = e.pageY - this.offsetTop;
            topPos = topPos-423;
            V = topPos/-360*1000
            display = V.toFixed(0);
            if(V>vMin && V<1000){
                $(".volume").text(display);
                $('#top').css({'top':topPos+'px'})
                volumeChange = true;
                updatePressure();
            }
        }
    });


//  ******************    CLICK UP DOWN VOLUME   *********************
    $("#up").click(function(e){
        if(upDownPressed=="up"){
            upDownPressed="none";
            $("#up .arrowClicked").hide();
        }else{
            upDownPressed="up";
            $("#down .arrowClicked").hide();
            $("#up .arrowClicked").show();
        }
    });

    $("#down").click(function(e){
        if(upDownPressed=="down"){
            upDownPressed="none";
            $("#down .arrowClicked").hide();
        }else{
            upDownPressed="down";
            $("#up .arrowClicked").hide();
            $("#down .arrowClicked").show();
        }
    });

    function moveTop(posNeg){
        tempV=parseInt(V+10*posNeg);
        if(tempV>=141 && tempV<=1009){
            if(tempV>1000){
                tempV = 1000;
            }
            if(tempV<vMin){
                tempV=vMin;
            }
            V = tempV;
            volumeChange = true;

            topPos = getPixelVolume(V);

            display = V.toFixed(0);
            $(".volume").text(display);

            $('#top').css({'top':topPos+'px'});
            updatePressure();
        }else{
            
        }
    }


var upDownPressed = "none";
    /*$("#down").mousedown(function(e){
        upDownPressed = "down"
    });
    $("#down").mouseup(function(e){
        upDownPressed = "none"
        countsHeld = 0;
    });

    $("#up").mousedown(function(e){
        upDownPressed = "up"
    });
    $("#up").mouseup(function(e){
        upDownPressed = "none"
        countsHeld = 0;
    });*/

// ^^^^ UPDATE AREA ^^^^

var oldN = 30;
//  ******************    UPDATE PRESSURE   *********************
    function updatePressure(){
        $(".volume").text(V.toFixed(0));


        // Change Pressure
        if($("#vLock").hasClass('pressed') || volumeChange || first || P==0){ 
            P = (n*R*T)/V;
            if(V==0){
                P=0;
            }
            var display = P
            if(display<100){
                display = display.toFixed(2)
            }else{
                display = display.toFixed(1)
            }
            $(".pressure").text(display);

            var rotation = P/50*300
            if(rotation>320){
                rotation=320;
            }
//			$("#spinner").rotate({
//      			animateTo:rotation
//			});



$("#spinner").css({transform: 'rotate('+rotation+'deg)'});	



        }

        // Change Volume
        if(!$("#vLock").hasClass('pressed') && volumeChange==false && P>0){
            V = n*R*T/P

            if(V>1000 || V<vMin){
                if(V>1000){
                    V=1000;
                }else if(V==0){
                    // Don't reset to bounds if container is empty
                }else{
                    V=vMin;
                }
                
                //lockClick("#vLock");
                volumeChange = true;
                updatePressure();
            }

            var display = V.toFixed(0);
            $(".volume").text(display);
            var topPos = getPixelVolume(V);

            if(oldN!=n){ // if moles have changed
                $("#top").animate({'top': +topPos+'px'},'fast');


            }else{ // if temperature has changed
                $("#top").css({'top': +topPos+'px'});

            }
            oldN = n;
        }
        volumeChange = false;
        first = false;
    }

//  ******************    UPDATE RMS   *********************
    function updateRMS(){
        var M = .003;
        var R = 8.3145;
        var RMS = Math.sqrt((3*R*T)/M);
        RMS = RMS.toFixed(0);
        if($(".A").length>0){
            $("#rmsA").text(RMS);
        }else{
            $("#rmsA").text(" -- ");
        }
        M = .032;
        RMS = Math.sqrt(3*R*T/M);
        RMS = RMS.toFixed(0);

        if($(".B").length>0){
            $("#rmsB").text(RMS);
        }else{
            $("#rmsB").text(" -- ");
        }
    }


//  ******************    UPDATE KE   *********************
    function updateKE(){
        var R = 8.3145
        var KE = (3/2)*T*R*.001

        KE = KE.toFixed(2);
        var numRelease = $(".released").length
        //alert($(".A.released").length);
        if($(".A").length>0){
            $("#keA").text(KE);
        }else{
            $("#keA").text(" -- ");
        }
        if($(".B").length>0){
            $("#keB").text(KE);
        }else{
            $("#keB").text(" -- ");
        }
    }


//  ******************   CHANGE HEAT   *********************
// called only from temp buttons unlike set heat
    function changeHeat(){
        topHeight = 147;
        T+=dh;
        if(T>600){
            T=600;
        }
        if(T<10){
            T=10;
        }

        setHeat();
        updatePressure();
        updateRMS();
        updateKE();
    }

//  ******************   SET HEAT   *********************
    function setHeat(){
        if(T>600){
            T=600;
        }
        if(T<10){
            T=10;
        }
        
        percentHeat= T/600;
        h = percentHeat*150;
        display = T.toFixed(0)
        $(".temperature").text(display);
        $("#redLine").css({'height':h+'px'});

        particleSpeed = percentHeat * 7
    }


// ^^^^   PARTICLE AREA  ^^^^

//  ******************    ADD PARTICLES   *********************
    function addParticles(num, img){
        for(i=0;i<num;i++){
            if(img=='particleB.png'){
                var speed = Math.random()*2+1;
                $('#container').append('<img src="img/'+img+'" class="electron B" angle=-10 speed='+speed+' xPixel=0 yPixel=0 alt="">');
            }else{
                var speed = Math.random()*2+2;
                $('#container').append('<img src="img/'+img+'" class="electron A" angle=-10 speed='+speed+' xPixel=0 yPixel=0 alt="">');
            }

        }

    }



var idIntRel;
//  ******************    RELEASE PARTICLES  *********************
    function releaseParticles(num){
        var releasedCount=0;
        var numA = 0;
        var numB = 0;
        var trappedA = $(".A").length-$(".A.released").length;
        var trappedB = $(".B").length-$(".B.released").length;
        var trappedTotal = trappedA + trappedB;
        if(trappedA>0){
            numA = parseInt((trappedA/trappedTotal)*num);
        }if(trappedB>0){
            numB = num-numA;
        }

        $(".A").each(function(index){
            if($(this).hasClass('released')){
                releasedCount++;
            }
            if(index<numA+releasedCount){
                $(this).addClass('released');
            }
        });

        releasedCount=0;
        $(".B").each(function(index){
            if($(this).hasClass('released')){
                releasedCount++;
            }
            if(index<numB+releasedCount){
                $(this).addClass('released');
            }
        });


        var moles = parseFloat($("#amount").text());
        if(moles>0){
            $("#amount").text(moles-molPerPump);
            removeParticles();
        }
    }


//  ******************    REMOVE PARTICLES   *********************
    function removeParticles(){
        $(".electron").each(function(){
            if($(this).hasClass("released")){
                $(this).css({'left': '350px', 'top': '413px'});
                //rebound($(this));
                $(this).stop();
                var pos = $(this).position();
                var angle = parseFloat($(this).attr('angle'));
                angle = angle/10

                                    // KEEP ANGLE WITHIN 360
                if(angle<0){
                    angle=angle*-1;
                }
                if(angle>45){
                    angle = angle%45;
                }

                angle -= 22;

                if(particleSpeed/speed<1500){
                    buffer=(1500-particleSpeed/speed)/50;
                }

                var speed = parseFloat($(this).attr('speed'));
                radius = 100;
                x = pos.left + Math.cos(angle*deg2rad)*radius;
                y = pos.top + Math.sin(angle*deg2rad)*radius;
                $(this).animate({'opacity': 0, 'left': x, 'top': y},1000/speed,'linear', function(){
                    $(this).remove();
                    updateRMS();
                    updateKE();
                });
            }
        });
    }


var deg2rad = Math.PI/180;
//  ******************    REBOUND   *********************
    function rebound(object){
        object.stop();
        var pos = object.position();
        var angle = parseFloat(object.attr('angle'));
        var speed = parseFloat(object.attr('speed'));
        radius = 450;
        x = pos.left + Math.cos(angle*deg2rad)*radius;
        y = pos.top + Math.sin(angle*deg2rad)*radius;
        object.animate({'left': x, 'top': y},particleSpeed/speed,'linear');
    }



//  ******************    BOUNCE   *********************
    function bounce(){
        $(".electron").each(function(){
            if(!$(this).hasClass('released')){
                var topPos = parseInt($("#top").css('top'))+371;
                var ballSize = 10;
                if($(this).hasClass('B')){
                    ballSize = 20;
                }

                var angle = parseFloat($(this).attr('angle'));
                var speed = parseFloat($(this).attr('speed'))*particleSpeed;

                // SET ANGLE FIRST TIME AROUND
                if(angle==-10){
                    angle = Math.random()*90+180;
                    //angle = 210;
                    $(this).attr('angle', angle);
                    $(this).addClass('new');
                    setTimeout(function(){
                        $(".electron").removeClass('new');
                    },300);
                }


                var xVel = Math.cos(angle*deg2rad)*speed;
                var yVel = Math.sin(angle*deg2rad)*speed;
                
                /*if($(this).hasClass("new")){
                    xVel = Math.cos(angle*deg2rad)*8;
                    yVel = Math.sin(angle*deg2rad)*8;
                }*/

                if(speed<5){
                    xPixel = parseFloat($(this).attr('xPixel'));
                    yPixel = parseFloat($(this).attr('yPixel'));
                    var tempVar = 0;

                    tempVar = xVel+xPixel; // add remainder
                    xVel = Math.round(tempVar);
                    xPixel = tempVar - xVel; // get rounded off remainder

                    $(this).attr('xPixel',xPixel); // store for next time

                    tempVar = yVel+yPixel; // add remainder
                    yVel = Math.round(tempVar);
                    yPixel = tempVar - yVel; // get rounded off remainder
                    
                    $(this).attr('yPixel',yPixel); // store for next time
                }

                var pos = $(this).position();
                xPos = pos.left + xVel;
                yPos = pos.top + yVel;


                if(xPos>(boxWidth-ballSize) || xPos<0){
                    xPos = pos.left - xVel*2;
                    angle=180+angle*-1;
                    $(this).attr('angle',angle);
                }
                if(yPos>(boxHeight-ballSize-20) || yPos<topPos+20){
                    yPos = pos.top - yVel*2;
                    angle=angle*-1;
                    $(this).attr('angle',angle);
                }

                if(yPos<topPos+20){
                    yPos=topPos+25;
                }

                
                $(this).css({'left': xPos+'px', 'top': yPos+'px'});
            }
        });
      
    }


});