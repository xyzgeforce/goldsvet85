@extends('backend.layouts.app')

@section('page-title', trans('app.pyour_withdraw'))
@section('page-heading', trans('app.pyour_withdraw'))

@section('content')

<section class="content-header">
    @include('backend.partials.messages')
</section>

<section class="content">
    <div class="tableList">
        <table class="table bg-white text-center">
            <thead>
                <tr>
                    <th scope="col">UserName</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Wallet</th>
                    <!-- <th scope="col">Shop</th> -->
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Confirmed At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($withdraws as $w)
                <tr class="fw-bold">
                    <td>{{ $w->user->username }}</td>
                    <td>{{ $w->amount }} {{ $w->currency }}</td>
                    <td>{{ $w->wallet }}</td>
                    <!-- <td>{{ $w->shop->name }}</td> -->
                    <td>{{ $w->status ? ($w->status == 2 ? 'Approve' : 'Reject') : 'Pending' }}</td>
                    <td>{{ $w->created_at }}</td>
                    <td>{{ $w->confirmed_at ?: '' }}</td>
                    <td>
                        @if($w->status == 'Pending')
                            <a href="{{ route('backend.withdraw.approve', ['id' => $w->id]) }}" class="btn btn-inline btn-success btn-xs">Approve</a>
                            <a href="{{ route('backend.withdraw.reject', ['id' => $w->id]) }}" class="btn btn-inline btn-danger btn-xs" style="margin-left: 10px">Reject</a>
                        @endif
                    </td>
                </tr>
                @endforeach
                @if(count($withdraws) == 0)
                <tr>
                    <td colspan="10">
                        <div class="noData">
                            No diplay data.
                        </div>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</section>
@stop

@section('scripts')

@stop
