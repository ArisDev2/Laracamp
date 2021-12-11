@extends('layouts.app')

@section('content')

    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                <table class="table">
                    <tbody>
                        @forelse ($checkout as $check)
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{ $check->Camp->title }}</strong>
                                    </p>
                                    <p>
                                        {{ $check->created_at->format('M d, Y') }}
                                    </p>
                                </td>
                                <td>
                                    <strong> {{ $check->Camp->price }} k</strong>
                                </td>
                                <td>
                                    <strong>
                                        @if ($check->is_paid)
                                            <strong class="text-green">Payment Success</strong>
                                        @else
                                            <strong>Waiting for payment</strong>
                                        @endif
                                    </strong>
                                </td>
                                <td>
                                    <a href="https://wa.me/083135351881?text=Hi kak, saya sudah melakukan pembayaran {{ $check->Camp->title }}"
                                        class="btn btn-primary">
                                        Contact Support
                                    </a>
                                </td>
                            </tr>

                        @empty
                            <tr class="align-middle">
                                <td colspan="5">
                                    NO DATA
                                </td>

                            </tr>

                        @endforelse
                </table>
            </div>
        </div>
    </section>

@endsection
