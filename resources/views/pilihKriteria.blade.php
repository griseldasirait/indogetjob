@extends('layouts.app')
@section('title', 'KRITERIA')

@section('content')
<div class="container" style="margin-top:3%;">
    <div class="row">
        <div class="col">
            @include('layouts.app2')
        </div>
        <div class="col" style="margin-left:6%;">
            <h2 align="center" style="color:#001f90; font-weight:bold; margin-bottom:5%;">KRITERIA PERUSAHAAN</h2>

            <form action="/pilihKriteria/simpan" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="form-group" style="margin-top:4.5%;">
					<select class="form-control" oninput="this.className = ''" name="kriteria1KP">
						<option selected>Kriteria 1</option>
						<option value="">...</option>
					</select>
				</div>
				<div class="form-group" style="margin-top:2%;">
					<select class="form-control" oninput="this.className = ''" name="kriteria2KP">
						<option selected>Kriteria 2</option>
						<option value="">...</option>
					</select>
				</div>
				<div class="form-group" style="margin-top:2%;">
					<select class="form-control" oninput="this.className = ''" name="kriteria3KP">
						<option selected>Kriteria 3</option>
						<option value="">...</option>
					</select>
				</div>
				<div class="form-group" style="margin-top:2%;">
					<select class="form-control" oninput="this.className = ''" name="kriteria4KP">
						<option selected>Kriteria 4</option>
						<option value="">...</option>
					</select>
				</div>
				<div class="form-group" style="margin-top:2%;">
					<select class="form-control" oninput="this.className = ''" name="kriteria5KP">
						<option selected>Kriteria 5</option>
						<option value="">...</option>
					</select>
				</div>
				<div class="form-group" style="margin-top:2%;">
					<select class="form-control" oninput="this.className = ''" name="kriteria6KP">
						<option selected>Kriteria 6</option>
						<option value="">...</option>
					</select>
				</div>
				<div class="form-group" style="margin-top:2%;">
					<select class="form-control" oninput="this.className = ''" name="kriteria7KP">
						<option selected>Kriteria 7</option>
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