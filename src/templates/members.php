<?php
$activeClass = "members";
$membersContents = file_get_contents("members.json");
$membersArray = json_decode($membersContents, true);

$leads = array_filter($membersArray, function ($member) {
    return $member["type"] == "lead";
});

$devs = array_filter($membersArray, function ($member) {
    return $member["type"] == "dev";
});

$designers = array_filter($membersArray, function ($member) {
    return $member["type"] == "design";
});

$pastMembers = array_filter($membersArray, function ($member) {
    return $member["type"] == "past";
});

function renderMembers($array, $title) {
    echo sprintf(
        '
        <section class="container membersPalette">
            <h1>%s</h1>
            <div class="col-md-12">
        ',
        $title
    );

    $counter = 0;
    foreach ($array as $name => $info) {
        $extra_class = "";

        // Start a new row of 5 columns
        if ($counter % 5 == 0) {
            $extra_class = "col-md-offset-1";
            echo '<div class="row rowCentered">';
        }
        $icons = "";
        $iconTemplate = '
            <a href="%s" target="_blank">
                <i class="fi-%s"></i>
            </a>
        ';
        if ($info["link1"]["url"] != "") {
            $icons .= sprintf($iconTemplate, $info["link1"]["url"], $info["link1"]["type"]);
        }
        if ($info["link2"]["url"] != "") {
            $icons .= sprintf($iconTemplate, $info["link2"]["url"], $info["link2"]["type"]);
        }

        echo sprintf(
            '
            <div class="col-md-2 %s colCentered">
                <span class="memberName">
                    <p>
                        %s</br>
                        <span class="memberTitle">%s</span>
                    </p>
                    <span class="memberLinks">%s</span>
                </span>
                <img src="%s" class="memberPic %sPic" />
            </div>
            ',
            $extra_class,
            $name,
            $info["title"],
            $icons,
            $info["image"],
            $info["type"]
        );

        $counter++;

        // Close out a 5 column row.
        if ($counter % 5 == 0) {
            echo '</div>';
        }
    }

    // Close out the final row, if it doesn't perfectly fit mod 5.
    if ($counter % 5 != 0) {
        echo '</div>';
    }

    echo '
            </div>
        </section>
    ';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    {{> head}}
    <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css" />
</head>

<body>
    {{> navbar}}

    <div class="color">
        <div class="members">
            <div class="container">
                <div class="page-header main-content">
                    <h1 style="padding-top:350px;">The faces behind the apps?!</h1>
                </div>
            </div>
        </div>
    </div>

    <?php renderMembers($leads, "Leadership") ?>
    <?php renderMembers($devs, "Engineers") ?>
    <?php renderMembers($designers, "Designers") ?>
    <?php renderMembers($pastMembers, "Former Members") ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect  : 'none',
                closeEffect : 'none'
            });
        });
    </script>

    {{> footer}}
</body>

</html>
