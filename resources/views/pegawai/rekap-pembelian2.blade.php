@extends('layouts.admin2')

@section('title', 'Pegawai')

@section('page-title')
    <div class="page-heading">
        <h3>Rekap Pembelian</h3>
    </div>
@endsection

@section('content')

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Member</th>
                        <th>ID Pembelian</th>
                        <th>Jumlah Pembelian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if (is_array($rekapPembelian) || is_object($rekapPembelian))
                        @foreach ($rekapPembelian as $rekap)
                            <tr>
                                <td>{{ $rekap['id_member'] }}</td>
                                <td>
                                    <ul>
                                        @if (is_array($rekap['id_pembelian']) || is_object($rekap['id_pembelian']))
                                            @foreach ($rekap['id_pembelian'] as $idPembelian)
                                                <li>{{ $idPembelian }}</li>
                                            @endforeach
                                        @else
                                            <li>{{ $rekap['id_pembelian'] }}</li>
                                        @endif
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        @if (is_array($rekap['jumlah_pembelian']) || is_object($rekap['jumlah_pembelian']))
                                            @foreach ($rekap['jumlah_pembelian'] as $jumlahPembelian)
                                                <li>{{ $jumlahPembelian }}</li>
                                            @endforeach
                                        @else
                                            <li>{{ $rekap['jumlah_pembelian'] }}</li>
                                        @endif
                                    </ul>
                                </td>
                                <td>
                                    <a href="../detail-pembelian2/{{ $rekap['id_pembelian'] }}" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">Data rekap pembelian tidak valid</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
