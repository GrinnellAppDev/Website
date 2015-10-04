<?php 
$activeClass = "members";
include('inc/header.php');
$membersContents = file_get_contents("members.json");
$membersArray = json_decode($membersContents, true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<link rel="stylesheet" href="css/foundation-icons/foundation-icons.css" />

 <div class="color">
        <div class="members">
            <div class="container">
                <div class="page-header main-content">
                    <h1 style="padding-top:150px;">The faces behind the apps?!</h1>
                </div>
            </div>
        </div>
    </div>

	<div class="container membersPalette">
		<div class="col-md-12">
        <?php
        $counter = 0;
        
        foreach ($membersArray as $name => $info) {
            $extra_class = "";
            if ($counter % 5 == 0) {
                $extra_class = "col-md-offset-1";
                echo '<div class="row rowCentered">';
            }

            $member_html = 
                '<div class="col-md-2 %s colCentered">
                        <span class="memberName">
                            <p>%s</br>
                            <span class="memberTitle">%s</span></p>
                            <span class="memberLinks">
                                <a href="%s" target="_blank">
                                <i class="fi-social-linkedin"> </i></a>
                    
                                <a href="%s target="_blank">
                                <i class="fi-social-github"> </i></a>
                            </span>
                        </span>
                            <img src="%s" class="memberPic %sPic" />
                    </div>';
            echo sprintf($member_html, $extra_class, $name, 
                $info["title"], $info["link1"], $info["link2"],
                $info["image"], $info["type"]);

            $counter++;
            if ($counter % 5 == 0) {
                echo '</div>';
            }
        }
        ?>
                    </div>
			   	 </div>
			   	 </br>
			   	 </br>
			</div>
  		</div>
  	</div>
</div>


    <script type="text/javascript">
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });
});


</script>

    <?php 
                    include('inc/footer.php'); 
                    ?>
</body>
</html>
