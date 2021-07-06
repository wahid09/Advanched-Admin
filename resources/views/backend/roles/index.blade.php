@extends('layouts.backend.app')
@push('css')
@endpush

@section('content')
    <div class="row">
                    <div class="col-12">
                        <section class="card">
                            <header class="card-header d-flex justify-content-between align-items-center">
                                <h2 class="card-title">Roles</h2>
                                @permission('role-create')
                                <a href="{{ route('app.roles.create') }}" class="modal-with-move-anim btn btn-sm btn-primary modal-basic"><i class="fa fa-plus-circle"></i>&nbsp;Create Role</a>
                                @endpermission
                            </header>
                            <div class="card-body ch-input-wrap">
                                <table class="table table-bordered table-striped mb-0" id="datatable-default">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                <th class="text-center">Name(English)</th>
                                <th class="text-center">Name(Bangle)</th>
                                <th class="text-center">Permission</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $item)
                                        <tr>
                                    <td class="text-center text-muted">{{ $loop->index+1 }}</td>
                                    <td class="text-center">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->name_bn }}</td>
                                    <td class="text-center">
                                        @if($item->permissions->count() >0)
                                            <span class="badge badge-info">{{ $item->permissions->count() }}</span>
                                        @else
                                            <span class="badge badge-warning">No Permission Found</span>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $item->created_at->diffForHumans() }}</td>
                                    <td class="text-center">
                                        @permission('role-update')
                                        <a href="{{ route('app.roles.edit', $item->id)}}" class="btn btn-primary"><i
                                                class="fa fa-edit"></i></a>
                                        @endpermission

                                        @permission('role-delete')
                                        @if($item->deletable == true)
                                            <button onclick="deleteData({{$item->id}})" type="button"
                                                    class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            <form id="delete-{{$item->id}}" method="POST"
                                                  action="{{ route('app.roles.destroy', $item->id) }}"
                                                  style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        @endif
                                        @endpermission
                                    </td>
                                </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>

@endsection
@push('js')
@endpush
