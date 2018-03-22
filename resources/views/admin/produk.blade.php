@extends('layouts.dashboardlayout')
@section('content')
<div id="page-content-wrapper">
	<div class="container-fluid">
		@if(session()->has('message'))
		<div class="alert alert-primary" role="alert">
			{{ session()->get('message') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		@endif
		<h2 class="semi-bold">Produk</h2>
		<hr>
		<div class="col-md-8 col-12 tbl-bg">
			<a href="" class="btn btn-primary my-3" data-toggle="modal" data-target="#addmodal"><i class="fas fa-plus"></i>&nbsp;Tambah Produk</a>
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
							<button class="btn btn-sm btn-dark my-1" data-toggle="modal" data-target="#editmodal"
							data-idproduk="{{ $produks->id }}" data-namaproduk="{{ $produks->nama }}" data-hargaproduk="{{ $produks->harga }}" data-stokproduk="{{ $produks->stok }}" data-des="{{ $produks->deskripsi }}">
							<i class="fas fa-edit fa-xs"></i>
							</button>
							<a href="" class="btn btn-sm btn-danger my-1" data-toggle="modal" data-idproduk="{{ $produks->id }}" data-target="#removemodal"><i class="fas fa-trash fa-xs"></i></a>
						</td>
					</tr>
					<?php $i++;} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
{{-- MODAL HAPUS PRODUK--}}
<div class="modal fade" id="removemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Hapus Produk</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{ route('admin.deleteproduk') }}" method="post">
				<div class="modal-body">
					{{ method_field('delete') }}
					{{ csrf_field() }}
					<p>Apakah anda yakin untuk menghapus produk ini?</p>
					<input type="hidden" name="id" id="idproduk" value="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger">Delete</button>
				</div>
			</form>
		</div>
	</div>
</div>

{{-- MODAL TAMBAH PRODUK--}}
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{ route('admin.insertproduk') }}" method="post">
				<div class="modal-body">
					{{ csrf_field() }}
					@include('admin.formeditproduk')
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- MODAL EDIT PRODUK--}}
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ubah Produk</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{ route('admin.updateproduk') }}" method="post">
				<div class="modal-body">
					{{ method_field('patch') }}
					{{ csrf_field() }}
					@include('admin.formeditproduk')
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save Changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	$('.alert').alert();
	$('#editmodal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget);
		var namaproduk = button.data('namaproduk');
		var idproduk = button.data('idproduk');
		var hargaproduk = button.data('hargaproduk');
		var stok = button.data('stokproduk');
		var des = button.data('des');
		var modal = $(this);
		modal.find('.modal-body #namaproduk').val(namaproduk);
		modal.find('.modal-body #idproduk').val(idproduk);
		modal.find('.modal-body #hargaproduk').val(hargaproduk);
		modal.find('.modal-body #stokproduk').val(stok);
		modal.find('.modal-body #des').val(des);
	})
	$('#removemodal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget);
		var idproduk = button.data('idproduk');
		var modal = $(this);
		modal.find('.modal-body #idproduk').val(idproduk);
	})
</script>
@endsection