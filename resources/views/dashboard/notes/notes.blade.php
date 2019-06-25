@extends('layouts.dashboard')
@section('title','Notes')
@section('content')
<!-- Horizontal navigation-->
@include('layouts.inc.success')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5>Customer note Notes <a
                        href="{{Route('add_notes')}}"
                        class="btn btn-primary btn-sm rounded">
                    Add new                </a></h5>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">

                <table id="notes_c" class="table table-striped table-bordered zero-configuration">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Title #</th>
                        <th>Note</th>
                        <th>Create Date</th>
                        <th class="no-sort">Settings</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    @foreach($notes as $note)

                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$note->title}}</td>
                                    <td>{{$note->details}}</td>
                                    <td>{{$note->created_at}}</td>
                                    <td>
                                        
                                    <a href="{{Route('view_notes',$note->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
                                <a class="btn btn-danger btn-sm delete-object" href="#" data-object-id="1"> <i class="fa fa-trash"></i> </a>
                                <div id="delete_model" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h4 class="modal-title">Delete Product</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete this product?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form method="POST" action="{{Route('delete_note',$note->id)}}">
                                                @csrf
                                                @method('delete')
                                            <button type="submit"  class="btn btn-danger "><i class='fa fa-trash'></i>Delete</button>
                                            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                    </td>
                                </tr>
                                @endforeach
                    </tbody>

                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>


    </div>
    <div id="delete_model" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Delete Order</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this order?</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="object-id" value="">
                    <input type="hidden" id="action-url" value="stockreturn/delete_i">
                    <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete-confirm">Delete
                    </button>
                    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            var table = $('#notes_c').DataTable({
                "processing": true,
                "serverSide": true,
                responsive: true,
                "order": [],
                "ajax": {
                    "url": " stockreturn/ajax_list?t=2",
                    "type": "POST",
                    'data': {'g_ea0d': crsf_hash}
                },
                "columnDefs": [
                    {
                        "targets": [0],
                        "orderable": false,
                    },
                ],
                dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        footer: true,
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5]
                        }
                    }
                ],

            });

        });
    </script></div>
</div>
</div>
@endsection