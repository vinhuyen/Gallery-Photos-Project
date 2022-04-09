<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous">
    </script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/detailStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <?php include "header.php" ?>
    <div class="c__container_detail">
        <div id="c__gallery" class="c__container">


            <h3 id="c__caption">Image Gallery</h3>



            <div id="c__gallery-box">


                <p id="c__gallery-link" href="">
                    <img id="c__slide_0011" src="">
                <div>
                    <div id="c__gallery-count"><span id="count">1</span> of
                        <span id="total"></span>
                    </div>

                </div>
                <div id="c__gallery-icon">
                    <button id="like" onclick="liked()">
                        <i class="fa fa-thumbs-up"></i>
                        <span class="icon">Like</span>
                    </button>
                    <button id="wishlist" onclick="wishlist()">
                        <i class="fa fa-heart"></i>

                        <span class="icon">Wishlist</span>
                    </button>

                </div>
                </p>

            </div>
            <div class="c__gallery-thumbnails">
                <div class="c__no-pad">

                    <img id="1" class="img-responsive fff" src="../../assets/image/CleaningtheImperialCitadel.jpg" alt="name
                            photo1" />
                    <img id="2" class="img-responsive" src="../../assets/image/AoDai.jpg" alt="name
                            photo2" />
                    <img id="3" class="img-responsive" src="../../assets/image/CleaningtheImperialCitadel.jpg" alt="name
                            photo3" />

                </div>
            </div>


        </div>
        <hr />
        <div class="--c--mytabs">
            <input type="radio" id="tabsilver" name="mytabs" checked="checked">
            <label for="tabsilver">Reviews</label>
            <div class="--c--tab">
                <div class="--c--comment--content">
                    <p class="--c--content--user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p class="--c--content--user" name="nameuser">Vinhliet</p>
                    <p class="--c--conten--date" name="date">12/02/2021</p>
                    <br>
                    <br>
                    <p class="--c--content--detail" name="content-user">Hang moi
                    </p>
                    </p>

                    <br>
                    <hr>
                </div>
                <div class="--c--comment--content">
                    <p class="--c--content--user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p class="--c--content--user" name="nameuser">congkpl</p>
                    <p class="--c--conten--date" name="date">12/02/2021</p>
                    <br>
                    <br>
                    <p class="--c--content--detail" name="content-user">Hang trung quoc</p>
                    </p>

                    <br>
                    <hr>
                </div>
                <div class="--c--comment--content">
                    <p class="--c--content--user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p class="--c--content--user" name="nameuser">thanhmillo</p>
                    <p class="--c--conten--date" name="date">12/02/2021</p>
                    <br>
                    <br>
                    <p class="--c--content--detail" name="content-user">Hang trung quoc</p>
                    </p>

                    <br>
                    <hr>
                </div>
                <br>
                <div class="--c--form--comment">
                    <form action="" method="POST">
                        <textarea name="Newcomment" class="--c--comment" id="prolackkd"
                            placeholder="Enter here...!"></textarea>
                        <br>
                        <button type="submit" class="--c--btn" name="sendComment" value="Post your
                                    comment">Post your comment</button>
                    </form>
                </div>
            </div>
            <input type="radio" id="--c--tabdescription" name="mytabs">
            <label for="--c--tabdescription">Description</label>
            <div class="--c--tab">

                <div class="c--content--product--detail">

                    <p class="--c--content-detail-" name="description">
                        In Hue, two days before the new year means busy markets and lots of colors. Tet Holiday has been
                        quiet the past few years because of Covid-19 concerns, but the markets, when they are allowed to
                        In Hue, two days before the new year means busy markets and
                        lots of colors. Tet Holiday has been quiet the past few years because of Covid-19 concerns, but
                        the markets, when they are allowed to open, are always packed. In Hue, two days before the new
                        year means busy markets and lots of
                        colors. Tet Holiday has been quiet the past few years because of Covid-19 concerns, but the
                        markets, when they are allowed to open, are always packed. In Hue, two days before the new year
                        means busy markets and lots of colors.
                        Tet Holiday has been


                    </p>
                    <button class="c--readmore__toggle --c--btn" role="switch" aria-checked="true">
                        Show more
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="../../assets/js/detailjs.js"></script>
</body>

</html>

</html>