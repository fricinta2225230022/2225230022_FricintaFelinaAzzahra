@extends('layout/layout')

@section('content')

<div class="d-flex flex-column gap-1 justify-content-center align-items-center" style="height: 100vh;">
<a href="/warga/create" class="btn btn-outline-info">TAMBAHKAN PENDAFTAR KPPS</a>

<table class="table table-hover"  border="4">
<thead  class="text-center">
    <tr  class="table table-hover" text="text-center">
        <th>Id</th scope="col">
        <th scope="col">Nama</th scope="col">
        <th scope="col">NIK</th scope="col">
        <th scope="col">NO KK</th scope="col">
        <th scope="col">Jenis Kelamin</th scope="col">
        <th scope="col">Alamat</th scope="col">
        <th scope="col">Aksi</th scope="col">
    </tr>
</thead>
<tbody class="table table-hover">
    @foreach($warga as $w)
        <tr>
            <td class="text-center">{{$w->id}}</td>
            <td>{{$w->Nama}}</td>
            <td class="text-center">{{$w->NIK}}</td>
            <td class="text-center">{{$w->No_KK}}</td>
            <td class="text-center">{{$w->Jenis_Kelamin}}</td>
            <td class="text-center">{{$w->Alamat}}</td>
            <td class="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/warga/{{$w->id}}/edit" class="btn btn-outline-warning">Edit</a>
                <form action="/warga/{{$w->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="btn btn-outline-danger" type="submit" value="Delete">
                </form>
            </div>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
</div>

@endsection