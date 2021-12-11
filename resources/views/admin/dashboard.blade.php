@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        My Camps
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Camp</th>
                                    <th>Price</th>
                                    <th>Register Data</th>
                                    <th>Paid Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @forelse ($checkouts as $check)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $check->User->name }}</td>
                                        <td>{{ $check->Camp->title }}</td>
                                        <td>Rp.{{ number_format($check->Camp->price) }}</td>
                                        <td>{{ $check->created_at->format('M d Y') }}</td>
                                        <td>
                                            @if ($check->is_paid)
                                                <span class="badge bg-success" style="font-size:17px">
                                                    Is Paid
                                                </span>
                                            @else
                                                <span class="badge bg-warning" style="font-size:17px">
                                                    Waiting
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!$check->is_paid)
                                                <form action="{{ route('admin.checkout.update', $check->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button class="btn btn-primary btn-sm">
                                                        Set to Paid
                                                    </button>
                                                </form>

                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">
                                            <h1>NO DATA</h1>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
