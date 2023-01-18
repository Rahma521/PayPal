@extends('main')

@section('content')
<h3 class='text-center p-5'>Data Table</h3>
<div class='m-auto w-75'>
            <table class="table my-5 py-3 " id="table">
                <thead>
                    <tr>
                        <th class="text-center">payment_id </th>
                        <th class="text-center">amount </th>
                        <th class="text-center">currency</th>
                        <th class="text-center">created at</th>
                        <th class="text-center">status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr class="item {{ $item->id }}">
                            <td class="text-center">{{ $item->id }}</td>
                            <td class="text-center">{{ $item->amount }}</td>
                            <td class="text-center">{{ $item->currency }}</td>
                            <td class="text-center">{{ $item->created_at }}</td>
                            <td class="text-center">{{ $item->status }}</td>
                            <td>
                                <button type="button" class="delete delete-modal btn btn-danger " 
                                    value ="{{ $item->id }}">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection