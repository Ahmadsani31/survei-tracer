@extends('administrator.layouts.app')
@push('admin-css')

@endpush
@section('content')
<div class="container-fluid mt-n22 px-6">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h3 class="mb-0  text-white">Projects</h3>
                    </div>
                    <div>
                        <a href="#" class="btn btn-white modal-cre" id="survei">Create New Project</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- row  -->
    <div class="row mt-6">
        <div class="col-md-12 col-12">
            <!-- card  -->
            <div class="card">
                <!-- card header  -->
                <div class="card-header bg-white  py-4">
                    <h4 class="mb-0">Active Projects</h4>
                </div>
                <!-- table  -->
                <div class="table-responsive p-4">
                    <!-- table head options -->
                    <table class="table" id="Dtable">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal Mulai</th>
                                <th scope="col">Tanggal Selesai</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- row  -->

</div>
@endsection
@push('admin-js')
<script>
    const DTable = $('#Dtable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('admin.datatable') }}",
            method: 'POST',
            data: function(d) {
                d.tabel = 'survei'
            },
        },
        columnDefs: [{
            className: "align-middle text-center",
            targets: ['_all'],
        }, {
            searchable: false,
            orderable: false,
            targets: 0,
        }],
        columns: [{
                data: 'survei_id',
            },{
                data: 'nama',
            },{
                data: 'tanggal_mulai',
            },{
                data: 'tanggal_selesai',
            },{
                data: 'action',
                orderable: false
            },
        ],
        order: [
            [0, 'desc']
        ]
    });

</script>
@endpush