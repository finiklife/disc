<div class="container">
    <div class="add_but">
        <a class="btn bg-button m-2" href="?page=blocks/disc_add">
            Создать обсуждение
        </a>
    </div>
    <?php
    $house = mysqli_query($link, "SELECT * FROM `votes` WHERE `ID_house`='" . $_SESSION['ID_house'] . "'");
  //  for ($i = 0; $i < mysqli_num_rows($house); $i++) {};
    for ($i = 0; $i < mysqli_num_rows($house); $i++) {
        $ID_house = mysqli_fetch_array($house, MYSQLI_ASSOC);
      //  echo '<pre>';
       // echo $ID_house;
      //  echo '</pre>';
        print_r(' <div class="discussion1 mb-3">
        <div class="card text-center">
            <div class="card-header">
                Обсуждение
            </div>
            <div class="card-body">
                <h5 class="card-title">');
        echo '<pre>';
        echo $ID_house['header'];
        echo '</pre>';
        print_r('</h5>
                <p class="card-text">');
        echo $ID_house['text'];
        print_r('</p>
                <a class="btn bg-button" href="#">
                    Перейти к обсуждению
                </a>
            </div>
            <div class="card-footer text-muted">
                Голосование будет закрыто
                <p class="text-success m-0">');
        echo $ID_house['date_over'];
        print_r('</p>
            </div>
        </div>
    </div>');
    }
    ?>
</div>