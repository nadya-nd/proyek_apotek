@extends('layouts.admin2')

@section('title', 'Admin')

@section('page-title')
    <div class="page-heading">
        <h3>Daftar Member</h3>

    </div>
@endsection

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>

                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>
                                <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                        Edit</a></button>
                                <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-info"><i data-feather="info"></i> Detail</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Dale</td>
                            <td>0500 527693</td>
                            <td>New Quay</td>
                            <td>
                                <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                        Edit</a></button> <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-info"><i data-feather="info"></i> Detail</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Nathaniel</td>
                            <td>(012165) 76278</td>
                            <td>Grumo Appula</td>
                            <td>
                                <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                        Edit</a></button> <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-info"><i data-feather="info"></i> Detail</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Darius</td>
                            <td>0309 690 7871</td>
                            <td>Ways</td>
                            <td>
                                <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                        Edit</a></button> <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-info"><i data-feather="info"></i> Detail</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Oleg</td>
                            <td>0500 441046</td>
                            <td>Rossignol</td>
                            <td>
                                <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                        Edit</a></button> <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-info"><i data-feather="info"></i> Detail</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kermit</td>
                            <td>(01653) 27844</td>
                            <td>Patna</td>
                            <td>
                                <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                        Edit</a></button>
                                <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-info"><i data-feather="info"></i> Detail</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jermaine</td>
                            <td>0800 528324</td>
                            <td>Mold</td>
                            <td>
                                <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                        Edit</a></button> <button style="border-color: transparent"> <a href="#"
                                        class="btn icon icon-left btn-info"><i data-feather="info"></i> Detail</a></button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
