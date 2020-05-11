@extends('layouts.adminLayout')

@section('panel_name', 'Lunasin Peserta')

@section('title', 'SPOT IT Admin Panel')

@section('content')
    <div class="center-align pt-3">
        <div class="center">
            <table class="responsive-table centered highlight">
                <thead>
                    <tr>
                        <th>@sortablelink('id', 'No')</th>
                        <th>@sortablelink('name', 'Nama')</th>
                        <th>@sortablelink('instance', 'Instansi')</th>
                        <th>@sortablelink('phone', 'Nomor WA')</th>
                        <th>@sortablelink('payment', 'Pembayaran')</th>
                        <th>@sortablelink('paid_status', 'Lunas')</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($participants as $key => $participant)
                    @if ($participant->category == 'general')
                        <tr class="pink lighten-4">
                    @else
                        <tr>
                    @endif
                        <td>{{ $participant->id }}</td>
                        <td>{{ $participant->name }}</td>
                        <td>{{ $participant->instance }}</td>
                        <td>{{ $participant->phone }}</td>
                        <td>
                            <img src="{{ asset($participant->payment) }}" alt="" width="50px">
                        </td>
                        <td>
                            @if ($participant->paid_status != null)
                                <i class="material-icons green-text">check</i>
                            @else
                                <i class="material-icons red-text">clear</i>
                            @endif
                        </td>
                        <td>
                            <form action="{{ url('admin/paidChecked/'.$participant->id) }}" method="post" class="d-inline">
                                @csrf
                                <button class="btn waves-effect green accent-3 waves-light tooltipped" data-position="top"
                                    data-tooltip="Lunasin" type="submit" name="action">
                                    <i class="material-icons center">monetization_on</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-3">
                {{$participants->links()}}
            </div>
        </div>
    </div>
@endsection