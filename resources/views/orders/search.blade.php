@extends('layouts.app')

@section('content')

<div class="container">
    <ais-index
    app-id="{{ config('scout.algolia.id') }}"
    api-key="{{ config('scout.algolia.key') }}"
    index-name="orders"
    query="{{ request('q') }}"
    >
        <ais-search-box></ais-search-box>
        <ais-results>
            <template slot-scope="{ result }">
                {{-- <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">
                                Id
                                <a href="/orders?id=0">↑</a>
                                <a href="/orders?id=1">↓</a>
                            <th scope="col">
                                Spalva
                                <a href="/orders?color=0">↑</a>
                                <a href="/orders?color=1">↓</a>
                            </th>
                            <th scope="col">
                                Baterija
                                <a href="/orders?battery=0">↑</a>
                                <a href="/orders?battery=1">↓</a>
                            </th>
                            <th scope="col">
                                Kiekis
                                <a href="/orders?quantity=0">↑</a>
                                <a href="/orders?quantity=1">↓</a>
                            </th>
                            <th scope="col">
                                Kaina(€)
                                <a href="/orders?price=0">↑</a>
                                <a href="/orders?price=1">↓</a>
                            </th>
                            <th scope="col">
                                Vardas
                                <a href="/orders?firstname=0">↑</a>
                                <a href="/orders?firstname=1">↓</a>
                            </th>
                            <th scope="col">
                                Vardas
                                <a href="/orders?lastname=0">↑</a>
                                <a href="/orders?lastname=1">↓</a>
                            </th>
                            <th scope="col">
                                El. pašto adresas
                                <a href="/orders?email=0">↑</a>
                                <a href="/orders?email=1">↓</a>
                            </th>
                            <th scope="col">
                                Miestas
                                <a href="/orders?city=0">↑</a>
                                <a href="/orders?city=1">↓</a>
                            </th>
                            <th scope="col">
                                Adresas
                                <a href="/orders?address=0">↑</a>
                                <a href="/orders?address=1">↓</a>
                            </th>
                            <th scope="col">
                                Pašto kodas
                                <a href="/orders?postalcode=0">↑</a>
                                <a href="/orders?postalcode=1">↓</a>
                            </th>
                            <th scope="col">
                                Tel. nr.
                                <a href="/orders?phonenumber=0">↑</a>
                                <a href="/orders?phonenumber=1">↓</a>
                            <th scope="col">
                                Data
                                <a href="/orders?created_at=0">↑</a>
                                <a href="/orders?created_at=1">↓</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td>{{ $order->color }}</td>
                                <td>{{ $order->battery }} GB</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->price }}</td>
                                <td>{{ $order->firstname }}</td>
                                <td>{{ $order->lastname }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->city }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->postalcode }}</td>
                                <td>{{ $order->phonenumber }}</td>
                                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
                <li v-text="result.firstname">
                    <ais-highlight :result="result" attribute-name="title"></ais-highlight>
                </li>
            </template>
        </ais-results>
    </ais-index>
</div>
{{-- <div class="pagination">
    {{ $orders->links() }}
</div> --}}

@endsection