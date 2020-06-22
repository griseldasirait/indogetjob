
<?php $__env->startSection('title', 'REKOMENDASI'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 4%;">
    <div class="row">
        <div class="col-3">
            <div class="panel">
                <div class="panel-top">
                    <b><i class="fa fa-pencil-alt"></i> KRITERIA KARYAWAN</b>
                </div>

                <form action="">
                    <div class="panel-middle">
                        <div class="form-custom">
                            <label for="pengalamanKerja">Pengalaman Kerja</label>
                            <input type="hidden" value="" name="">
                            <select class="form-control" required name="" id="">
                                <option selected value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-custom">
                            <label for="pendidikanTerakhir">Pendidikan Terakhir</label>
                            <input type="hidden" value="" name="">
                            <select class="form-control" required name="" id="">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-custom">
                            <label for="ipk">IPK</label>
                            <input type="hidden" value="" name="">
                            <select class="form-control" required name="" id="">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-custom">
                            <label for="usia">Usia</label>
                            <input type="hidden" value="" name="">
                            <select class="form-control" required name="" id="">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-custom">
                            <label for="alamat">Alamat</label>
                            <input type="hidden" value="" name="">
                            <select class="form-control" required name="" id="">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-custom">
                            <label for="status">Status</label>
                            <input type="hidden" value="" name="">
                            <select class="form-control" required name="" id="">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-custom">
                            <label for="jenisKelamin">Jenis Kelamin</label>
                            <input type="hidden" value="" name="">
                            <select class="form-control" required name="" id="">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="panel-bottom">
                        <button type="submit" id="buttonSimpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                        <button type="reset" id="buttonReset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-9">
            <div class="container mb-12 mt-3">
                <table class="table table-bordered table-striped" style="width:100%;" id="dataTablesRekom">
                    <thead>
                        <tr>
                            <th colspan="1" rowspan="2">No.</th>
                            <th colspan="1" rowspan="2">Nama</th>
                            <th colspan="2">HR Information</th>
                            <th colspan="7">Profile</th>
                            <th colspan="1" rowspan="2">...</th>
                        </tr>
                        <tr>
                            <th>Position</th>
                            <th>Job Character</th>
                            <th>Pengalaman Kerja</th>
                            <th>Pendidikan Terakhir</th>
                            <th>IPK</th>
                            <th>Usia</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Halim</td>
                            <td>Position</td>
                            <td>JC</td>
                            <td style="text-align:center">36 bulan</td>
                            <td style="text-align:center">S3</td>
                            <td style="text-align:center">3.75</td>
                            <td style="text-align:center">27</td>
                            <td style="text-align:center">Jakarta</td>
                            <td style="text-align:center">Tidak Menikah</td>
                            <td style="text-align:center">Laki-Laki</td>
                            <td>
                                <a class="btn" data-toggle="modal" data-target="#modalCenter"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Bayu</td>
                            <td>Position</td>
                            <td>JC</td>
                            <td>36 bulan</td>
                            <td>S2</td>
                            <td>3.50</td>
                            <td>30</td>
                            <td>Jakarta</td>
                            <td>Tidak Menikah</td>
                            <td>Laki-Laki</td>
                            <td>
                                <a class="btn" data-toggle="modal" data-target="#modalCenter"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Endang</td>
                            <td>Position</td>
                            <td>JC</td>
                            <td>30 bulan</td>
                            <td>S2</td>
                            <td>3.50</td>
                            <td>28</td>
                            <td>Jakarta</td>
                            <td>Menikah</td>
                            <td>Perempuan</td>
                            <td>
                                <a class="btn" data-toggle="modal" data-target="#modalCenter"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Dinda</td>
                            <td>Position</td>
                            <td>JC</td>
                            <td>24 bulan</td>
                            <td>S1</td>
                            <td>3.75</td>
                            <td>24</td>
                            <td>Malang</td>
                            <td>Tidak Menikah</td>
                            <td>Perempuan</td>
                            <td>
                                <a class="btn" data-toggle="modal" data-target="#modalCenter"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Evan</td>
                            <td>Position</td>
                            <td>JC</td>
                            <td>24 bulan</td>
                            <td>S1</td>
                            <td>3.00</td>
                            <td>27</td>
                            <td>Malang</td>
                            <td>Tidak Menikah</td>
                            <td>Laki-Laki</td>
                            <td>
                                <a class="btn" data-toggle="modal" data-target="#modalCenter"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Fandi</td>
                            <td>Position</td>
                            <td>JC</td>
                            <td>20 bulan</td>
                            <td>S1</td>
                            <td>3.00</td>
                            <td>30</td>
                            <td>Malang</td>
                            <td>Menikah</td>
                            <td>Laki-Laki</td>
                            <td>
                                <a class="btn" data-toggle="modal" data-target="#modalCenter"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Bambang</td>
                            <td>Position</td>
                            <td>JC</td>
                            <td>16 bulan</td>
                            <td>D3</td>
                            <td>3.50</td>
                            <td>28</td>
                            <td>Surabaya</td>
                            <td>Tidak Menikah</td>
                            <td>Laki-Laki</td>
                            <td>
                                <a class="btn" data-toggle="modal" data-target="#modalCenter"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Ayu</td>
                            <td>Position</td>
                            <td>JC</td>
                            <td>12 bulan</td>
                            <td>D2</td>
                            <td>3.25</td>
                            <td>24</td>
                            <td>Surabaya</td>
                            <td>Tidak Menikah</td>
                            <td>Perempuan</td>
                            <td>
                                <a class="btn" data-toggle="modal" data-target="#modalCenter"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Dirga</td>
                            <td>Position</td>
                            <td>JC</td>
                            <td>6 bulan</td>
                            <td>D1</td>
                            <td>3.25</td>
                            <td>28</td>
                            <td>Surabaya</td>
                            <td>Tidak Menikah</td>
                            <td>Laki-Laki</td>
                            <td>
                                <a class="btn" data-toggle="modal" data-target="#modalCenter"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Gunawan</td>
                            <td>Position</td>
                            <td>JC</td>
                            <td>6 bulan</td>
                            <td>D1</td>
                            <td>3.00</td>
                            <td>24</td>
                            <td>Surabaya</td>
                            <td>Tidak Menikah</td>
                            <td>Laki-Laki</td>
                            <td>
                                <a class="btn" data-toggle="modal" data-target="#modalCenter"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NO.</th>
                            <th>Nama</th>
                            <th>Position</th>
                            <th>Job Character</th>
                            <th>Pengalaman Kerja</th>
                            <th>Pendidikan Terakhir</th>
                            <th>IPK</th>
                            <th>Usia</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Jenis Kelamin</th>
                            <th>...</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLongTitle">Detail Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <!-- NAMA -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="width:200px;">NAME</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Disini nama karyawannya!" aria-describedby="basic-addon1" readonly>
                    </div>

                    <!-- IPK -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon6" style="width:200px;">IPK</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Disini ipk karyawannya!" aria-describedby="basic-addon6" readonly>
                    </div>

                    <!-- USIA -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon7" style="width:200px;">USIA</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Disini usia karyawannya!" aria-describedby="basic-addon7" readonly>
                    </div>

                    <!-- ALAMAT -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon8" style="width:200px;">ALAMAT</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Disini alamat karyawannya!" aria-describedby="basic-addon8" readonly>
                    </div>

                    <!-- STATUS -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon9" style="width:200px;">STATUS</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Disini status karyawannya!" aria-describedby="basic-addon9" readonly>
                    </div>

                    <!-- JENIS KELAMIN -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon10" style="width:200px;">JENIS KELAMIN</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Disini jenis kelamin karyawannya!" aria-describedby="basic-addon10" readonly>
                    </div>

                    <!-- POSITION -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2" style="width:200px;">POSITION</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Disini position karyawannya!" aria-describedby="basic-addon2" readonly>
                    </div>

                    <!-- JOB CHARACTER -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3" style="width:200px;">JOB CHARACTER</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Disini job character karyawannya!" aria-describedby="basic-addon3" readonly>
                    </div>

                    <!-- PENGALAMAN KERJA -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon4" style="width:200px;">PENGALAMAN KERJA</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Disini pengalaman kerja karyawannya!" aria-describedby="basic-addon4" readonly>
                    </div>

                    <!-- PENDIDIKAN TERAKHIR -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon5" style="width:200px;">PENDIDIKAN TERAKHIR</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Disini pendidikan terakhir karyawannya!" aria-describedby="basic-addon5" readonly>
                    </div>
                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- DATATABLES JAVASCRIPT -->
<script type="text/javascript">
        $(document).ready(function() {
            $('#dataTablesRekom').DataTable({
                initComplete: function(){
                    this.api().columns().every(function(){
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function(){
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                            .search(val ? '^'+val+'$' : '', true, false)
                            .draw();
                        });

                        column.data().unique().sort().each(function(d, j){
                            select.append('<option value="'+d+'">'+d+'</option>')
                        });
                    })
                },

                "scrollX":true,
                "lengthMenu": [[7, 14, 29, -1], [7, 14, 29, "All"]]
            });
        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\INDOGETJOB\resources\views/hasilRekomendasi.blade.php ENDPATH**/ ?>