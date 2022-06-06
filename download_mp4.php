<?php require './fun.php';
$error = ""; ?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Download From YouTube </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            max-width: 100%;
            margin: 20px auto;
            background: #e0ebeb;

        }

        .btn1 {
            background-color: green;
            border: none;
            color: white;
            padding: 5px 5px;
            cursor: pointer;
            font-size: 15px;
            border-radius: 8px;

        }

        .btn1:hover {
            background-color: MediumSeaGreen;
        }

        .btn {
            background-color: RoyalBlue;
            margin-left: 8px;
            color: white;

        }
    </style>

</head>

<body>

    <div class="container">
        <form method="post" action="" class="formSmall">
            <div class="row" style="margin-bottom:10px">

                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" class="form-control" name="video_link" id="video_link" <?php if
                            (isset($_POST['video_link'])) echo "value='" . $_POST['video_link'] . "'" ; ?>>
                        <span class="input-group-btn">
                            <button type="submit" name="submit" id="submit" class="btn"> Click here </button>
                        </span>
                    </div>
                </div>
            </div>
        </form>

        <?php if ($error) : ?>
        <div style="color:red;font-weight: bold;text-align: center">
            <?php print $error ?>
        </div>
        <?php endif; ?>

        <?php if (isset($_POST['submit'])) : ?>


        <?php
            $video_link = $_POST['video_link'];
            parse_str(parse_url($video_link, PHP_URL_QUERY), $parse_url);
            $video_id =  $parse_url['v'];
            $video = json_decode(getVideoInfo($video_id));
            $formats = $video->streamingData->formats;
            $adaptiveFormats = $video->streamingData->adaptiveFormats;
            $thumbnails = $video->videoDetails->thumbnail->thumbnails;
            $title = $video->videoDetails->title;
            $short_description = $video->videoDetails->shortDescription;
            $thumbnail = end($thumbnails)->url;
            ?>


<div class="row" style="justify-content: center;">
    <div class="col-6">
        <div class="col-lg-3" style="margin-left:70px;margin-right:70px;">
            <img src="<?php echo $thumbnail; ?>" style="height: 50%;
    width: 100vh;">
        </div>
        <div class="col-lg-9" style="margin-left:80px;margin-right:80px;">
            <h2>
                <?php echo $title; ?>
            </h2>
        </div>
    </div>
</div>
   
   



        <div class="row" style="justify-content: center;">
            <div class="col-6">
                <div class="card formSmall">
                    <div class="card-header">
                        <strong>Download</strong>
                    </div>

                    <div class="card-body">
                        <table class="table ">
                            <tr>
                                <td>Type</td>
                                <td>Download</td>
                            </tr>

                            <tr>
                                <td>
                                    mp4 </td>
                                <td>
                                    <a href="<?php echo getVideoDownloadLink($video_id," mp4");?>">
                                        <button class="btn1"><i class="fa fa-download"></i> Download</button>

                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    mp3 </td>
                                <td>
                                    <a href="<?php echo getVideoDownloadLink($video_id," mp3");?>">
                                        <button class="btn1"><i class="fa fa-download"></i>Download</button>

                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>


            <?php endif; ?>

        </div>

    </div>
    <script>
        document.getElementById('video_link').value = "<?php echo $_GET['video_link']; ?>";
    </script>
</body>

</html>