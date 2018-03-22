@extends('layouts.dashboardlayout')
@section('content')
<div id="page-content-wrapper">
	<div class="container-fluid">
		<h2 class="semi-bold">Produk</h2>
		<hr>
		<a href="" class="btn btn-primary my-3"><i class="fas fa-plus"></i>&nbsp;Tambah Produk</a>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Id Produk</th>
					<th scope="col">Nama Produk</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php
						$i = 1; 
						foreach ($produk as $produks) {
					?>
					<th scope="row">{{ $i }}</th>
					<td>{{ $produks->id }}</td>
					<td>{{ $produks->nama }}</td>
					<td>
						<a href="" class="btn btn-sm btn-primary my-1"><i class="fas fa-eye fa-xs"></i></a>
						<a href="" class="btn btn-sm btn-dark my-1"><i class="fas fa-edit fa-xs"></i></a>
						<a href="" class="btn btn-sm btn-danger my-1"><i class="fas fa-trash fa-xs"></i></a>
					</td>
				</tr>
					<?php $i++;} ?>
			</tbody>
		</table>
	</div>
</div>
@endsection