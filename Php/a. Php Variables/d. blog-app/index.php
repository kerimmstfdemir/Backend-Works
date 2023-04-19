<?php

    $category1 = "Macera";
    $category2 = "Dram";
    $category3 = "Komedi";
    $category4 = "Korku";

    $film1_header = "Paper Lives";
    $film1_summary = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
    $film1_date = "03.12.2021";
    $film1_img = "1.jpeg";
    $film1_numberOfComment = "23";
    $film1_numberOfLike = "106";
    $film1_onVision = "Evet";

    $film2_header = "Walking Dead";
    $film2_summary = "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
    $film2_date = "31.10.2010";
    $film2_img = "2.jpeg";
    $film2_numberOfComment = "236";
    $film2_numberOfLike = "1023";
    $film2_onVision = "Hayır";
    
    $film1_summary = ucfirst(strtolower($film1_summary));
    $film2_summary = ucfirst(strtolower($film2_summary));

    $film1_summary = substr($film1_summary,0,200)."...";
    $film2_summary = substr($film2_summary,0,200)."...";

    $film1_url = strtolower(str_replace([" ","ç","ü","ğ"],["-","c","u","g"],$film1_header));
    $film2_url = strtolower(str_replace([" ","ç","ü","ğ"],["-","c","u","g"],$film2_header));

    const header = "Popular Films";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Blog App</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $category1?></li>
                    <li class="list-group-item"><?php echo $category2?></li>
                    <li class="list-group-item"><?php echo $category3?></li>
                    <li class="list-group-item"><?php echo $category4?></li>
                </ul>
            </div>
            <div class="col-9">
                <h1 class="mb-4"><?php echo header ?></h1>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo "<img class=\"img-fluid\" src=\"./img/{$film1_img}\" alt=\"img1\">"?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$film1_url}\">{$film1_header}</a>"?></h5>
                                <p class="card-text">
                                    <?php echo $film1_summary ?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $film1_numberOfComment?> Comment</span>
                                    <span class="badge bg-primary"><?php echo $film1_numberOfLike?> Like</span>
                                    <span class="badge bg-warning">In the Vision : <?php echo $film1_onVision?></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo "<img class=\"img-fluid\" src=\"./img/{$film2_img}\" alt=\"img2\">"?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "<a href=\"{$film2_url}\">{$film2_header}</a>"?></h5>
                                <p class="card-text">
                                    <?php echo $film2_summary ?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $film2_numberOfComment?> Comment</span>
                                    <span class="badge bg-primary"><?php echo $film2_numberOfLike?> Like</span>
                                    <span class="badge bg-warning">In the Vision : <?php echo $film2_onVision?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>