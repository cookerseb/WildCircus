<?php include("includes/settings.php"); ?>
<?php include("includes/header.php"); ?>
<h1>The Wild Circus animals</h1>
<div class="imgfloatl">  
    <div class="carree"><img src="images/animals/elephants.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #marcelo @ These elephants are impressive on the track by their size but also by their numbers<br><br>
            #nicky @ Beautiful<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/elephants2.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #Greg @ These pachyderms come to do incredible figures<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/dr.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #hihihi @ I had never seen so close<br><br>
            #mike @ Bosses !<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/giraf.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #coucou @ Gorgeous<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/hipo.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #dixy @ I will not believe !! The first time I saw. And in addition they stunts !!!<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/horses.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #CharlHi @ A beautiful horse dance number<br><br>
            #Bob @ I love these white hair. What grace !!!<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/lama.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #djrad @ Warning !! It spits lol<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/zebra.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #marcelo @ Superb<br><br>
            #nicky @ I want one for my garden ...<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/licorne.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #brad @ Incredible and magical<br><br>
            #RickyNick @ I would return just for them<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/licorne2.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #reset @ I was hesitant at first because I was wondering if it was true. Well, yeah !!!<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/lions1.jpeg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #marcelo @ These lions are impressive on the track by their size but also by their numbers<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/lions2.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #stephy @ These lions are impressive on the track by their size but also by their numbers<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/lions3.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #BobLions @ These lions are impressive on the track by their size but also by their numbers<br><br>
            </span></p>
        </div>
    </div>
    <div class="carree"><img src="images/animals/lions4.jpg" alt="">
    	<div>
        	<p><span><strong>Latest tweets</strong><br><br>
            #ScareFace @ These lions are impressive on the track by their size but also by their numbers<br><br>
            </span></p>
        </div>
    </div>
</div>
<p>&nbsp;</p>
<script>
$(document).ready(function () {
    $(".imgfloatl div").mouseenter(function () {
        $(this).find("img").hide();
		$(this).find("div").css({"background":"#999", "display":"inline-block", "height":"295px", "width":"100%",  "overflow":"hidden"}).show();
    }).mouseleave(function () {
        $(this).find("img").show();
		$(this).find("div").hide();
    });
});
</script>
<?php include("includes/footer.php"); ?>
