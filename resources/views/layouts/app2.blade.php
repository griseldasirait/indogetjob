<div class="sidebar">
    <?php
        // mengambil current URL path
        $url = url()->current();

        if ($url == url('/pilihKriteria')) {?>
            <a href="" class="beforeAfter">
                <span class="f-circle checkmark">✔</span>
                &nbsp;Profil Perusahaan
            </a>
            <br>
            <a href="" class="join">
                <span class="f-circle"><i class="fa-alph">2</i></span>
                &nbsp;Pilih Kriteria
            </a>
            <br>
            <a href="" class="beforeAfter">
                <span class="f-circle beforeJoinNumber"><i class="fa-alph">3</i></span>
                &nbsp;Pilih Sub-Kriteria
            </a>
        <?php }elseif ($url == url('/pilihSubKriteria')) { ?>
            <a href="" class="beforeAfter">
                <span class="f-circle checkmark">✔</span>
                &nbsp;Profil Perusahaan
            </a>
            <br>
            <a href="" class="beforeAfter">
                <span class="f-circle checkmark">✔</span>
                &nbsp;Pilih Kriteria
            </a>
            <br>
            <a href="" class="join">
                <span class="f-circle beforeJoinNumber"><i class="fa-alph">3</i></span>
                &nbsp;Pilih Sub-Kriteria
            </a>
        <?php }else { ?>
            <a href="" class="join">
                <span class="f-circle"><i class="fa-alph">1</i></span>
                &nbsp;Profil Perusahaan
            </a>
            <br>
            <a href="" class="beforeAfter">
                <span class="f-circle beforeJoinNumber"><i class="fa-alph">2</i></span>
                &nbsp;Pilih Kriteria
            </a>
            <br>
            <a href="" class="beforeAfter">
                <span class="f-circle beforeJoinNumber"><i class="fa-alph">3</i></span>
                &nbsp;Pilih Sub-Kriteria
            </a>
        <?php } ?>
</div>