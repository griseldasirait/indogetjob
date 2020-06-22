@extends('layouts.app')
@section('title', 'PROFIL')

@section('content')
<div class="container" style="margin-top:3%;">
    <div class="row">
        <div class="col">
            @include('layouts.app2')
        </div>
        <div class="col" style="margin-left:6%;">
            <h2 align="center" style="color:#001f90; font-weight:bold; margin-bottom:5%;">PROFIL PERUSAHAAN</h2>

            <form action="/profilPerusahaan/simpan" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- FILE UPLOAD: GAMBAR -->
                <div class="file-upload">
                    <img src="img/profilPhoto.svg" height="75" alt="">
                    <input type="file" name="fileToUpload">
                </div>

                <!-- INPUT ALAMAT PERUSAHAAN -->
                <div class="form-group" style="margin-top:5%;">
                    <input type="text" class="form-control" name="alamat_perusahaan" placeholder="Alamat perusahaan">
                </div>

                <div class="form-row" style="margin-top:7.5%;">
                    <!-- INPUT PROVINSI PERUSAHAAN -->
                    <div class="form-group col">
                        <select class="form-control" name="province" id="province">
                            <option value="0" disabled selected>Provinsi</option>
                            @foreach ($provinces as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- INPUT KOTA/KABUPATEN PERUSAHAAN -->
                    <div class="form-group col">
                        <select name="city" id="city" class="form-control">
                            <option value="0" disabled selected>Kota/Kabupaten</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="margin-top:4.8%;">
                    <select class="form-control" name="jenis_perusahaan">
                        <option value="0" disabled selected>Jenis perusahaan</option>
                        <option value="">...</option>
                    </select>
                </div>
                <div class="form-group" style="margin-top:7.5%;">
                    <select class="form-control" name="bidang_perusahaan">
                        <option value="0" disabled selected>Bidang fokus perusahaan</option>
                        <option value="">...</option>
                    </select>
                </div>
                <div class="container" style="margin-top:7.5%;">
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-lg" type="submit" name="simpan" style="border-radius: 10px 10px 10px 10px;">SIMPAN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <img src="img/drawkit-grape-pack-illustration-8(flip).svg" width="25%" alt="" class="leftbottom">
</div>
@endsection

@section('scripts')
<script type="text/javascript">
        $(function() {
            $("#province").on('change', function() {
                axios.post('{{ route('profilPerusahaan.store') }}', {id: $(this).val()})
                    .then(function (response) {
                        // $('#city').empty();
                        $.each(response.data, function(id, name) {
                                $('#city').append(new Option(name, id))
                        })
                    });
            });
        });
    </script>
@endsection