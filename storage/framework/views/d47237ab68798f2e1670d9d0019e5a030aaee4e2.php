
<?php $__env->startSection('title', 'SUB-KRITERIA'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top:3%;">
    <div class="row">
        <div class="col">
            <?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col" style="margin-left:6%;">
            <h2 align="center" style="color:#001f90; font-weight:bold; margin-bottom:5%;">SUB-KRITERIA PERUSAHAAN</h2>

            <form action="/pilihSubKriteria/simpan" method="POST" id="subKriteriaForm">
                <?php echo e(csrf_field()); ?>

                
                <!-- Circles which indicates the steps of the form -->
                <div style="text-align:center; margin-top:3%">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

                <!-- PENGALAMAN KERJA -->
                <div class="tab" style="">
                    <h4 align="center" style="margin-top:3%">Pengalaman Kerja</h4>
                    <h5 align="center">Pilih 1 atau lebih prioritas</h5>

                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas1PK">
                            <option selected>Prioritas 1</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas2PK">
                            <option selected>Prioritas 2</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas3PK">
                            <option selected>Prioritas 3</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas4PK">
                            <option selected>Prioritas 4</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas5PK">
                            <option selected>Prioritas 5</option>
                            <option value="">...</option>
                        </select>
                    </div>
                </div>

                <!-- PENDIDIKAN TERAKHIR -->
                <div class="tab" style="">
                    <h4 align="center" style="margin-top:3%">Pendidikan Terakhir</h4>
                    <h5 align="center">Pilih 1 atau lebih prioritas</h5>

                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas1PK">
                            <option selected>Prioritas 1</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas2PK">
                            <option selected>Prioritas 2</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas3PK">
                            <option selected>Prioritas 3</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas4PK">
                            <option selected>Prioritas 4</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas5PK">
                            <option selected>Prioritas 5</option>
                            <option value="">...</option>
                        </select>
                    </div>
                </div>

                <!-- IPK -->
                <div class="tab" style="">
                    <h4 align="center" style="margin-top:3%">IPK</h4>
                    <h5 align="center">Pilih 1 atau lebih prioritas</h5>

                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas1PK">
                            <option selected>Prioritas 1</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas2PK">
                            <option selected>Prioritas 2</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas3PK">
                            <option selected>Prioritas 3</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas4PK">
                            <option selected>Prioritas 4</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas5PK">
                            <option selected>Prioritas 5</option>
                            <option value="">...</option>
                        </select>
                    </div>
                </div>

                <!-- USIA -->
                <div class="tab" style="">
                    <h4 align="center" style="margin-top:3%">Usia</h4>
                    <h5 align="center">Pilih 1 atau lebih prioritas</h5>

                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas1PK">
                            <option selected>Prioritas 1</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas2PK">
                            <option selected>Prioritas 2</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas3PK">
                            <option selected>Prioritas 3</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas4PK">
                            <option selected>Prioritas 4</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas5PK">
                            <option selected>Prioritas 5</option>
                            <option value="">...</option>
                        </select>
                    </div>
                </div>

                <!-- ALAMAT -->
                <div class="tab" style="">
                    <h4 align="center" style="margin-top:3%">Alamat</h4>
                    <h5 align="center">Pilih 1 atau lebih prioritas</h5>

                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas1PK">
                            <option selected>Prioritas 1</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas2PK">
                            <option selected>Prioritas 2</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas3PK">
                            <option selected>Prioritas 3</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas4PK">
                            <option selected>Prioritas 4</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas5PK">
                            <option selected>Prioritas 5</option>
                            <option value="">...</option>
                        </select>
                    </div>
                </div>

                <!-- STATUS -->
                <div class="tab" style="">
                    <h4 align="center" style="margin-top:3%">Status</h4>
                    <h5 align="center">Pilih 1 atau lebih prioritas</h5>

                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas1PK">
                            <option selected>Prioritas 1</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas2PK">
                            <option selected>Prioritas 2</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas3PK">
                            <option selected>Prioritas 3</option>
                            <option value="">...</option>
                        </select>
                    </div>
                </div>

                <!-- JENIS KELAMIN -->
                <div class="tab" style="">
                    <h4 align="center" style="margin-top:3%">Jenis Kelamin</h4>
                    <h5 align="center">Pilih 1 atau lebih prioritas</h5>

                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas1PK">
                            <option selected>Prioritas 1</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas2PK">
                            <option selected>Prioritas 2</option>
                            <option value="">...</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:4.8%;">
                        <select class="form-control" oninput="this.className = ''" name="prioritas3PK">
                            <option selected>Prioritas 3</option>
                            <option value="">...</option>
                        </select>
                    </div>
                </div>

                <!-- BUTTON PREV AND NEXT -->
                <div style="overflow:auto; margin-top:7.5%;">
                    <div style="float:right;">
                        <button type="button" class="btn btn-outline-secondary btn-lg" id="prevBtn" name="prevBtn" onclick="nextPrev(-1)" style="border-radius:10px 10px 10px 10px;">SEBELUMNYA</button>
                        <button type="button" class="btn btn-outline-primary btn-lg" id="nextBtn" name="nextBtn" onclick="nextPrev(1)" style="border-radius:10px 10px 10px 10px; width:160.933px;">SELANJUTNYA</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <img src="img/drawkit-grape-pack-illustration-8(flip).svg" width="25%" alt="" class="leftbottom">
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- JAVASCRIPT MULTIPLE STEP FORM by:w3schools -->
<script type="text/javascript">
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "SELESAI";
        } else {
            document.getElementById("nextBtn").innerHTML = "SELANJUTNYA";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("subKriteriaForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("select");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\INDOGETJOB\resources\views/pilihSubKriteria.blade.php ENDPATH**/ ?>