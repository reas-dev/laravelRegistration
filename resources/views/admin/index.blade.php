@extends('layouts.adminLayout')

@section('panel_name', 'List Peserta')

@section('title', 'SPOT IT Admin Panel')

@section('content')
    <div class="center-align pt-3">
        <div class="center">
            <table class="responsive-table centered highlight">
                <thead>
                    <tr>
                        <th>@sortablelink('id', 'No')</th>
                        <th>@sortablelink('upload_id', 'Kode Unik')</th>
                        <th>@sortablelink('name', 'Nama')</th>
                        <th>@sortablelink('instance', 'Instansi')</th>
                        <th>@sortablelink('email', 'Email')</th>
                        <th>@sortablelink('phone', 'Nomor WA')</th>
                        <th>@sortablelink('payment', 'Pembayaran')</th>
                        <th>@sortablelink('paid_status', 'Lunas')</th>
                    </tr>
                </thead>
        
                <tbody>
                    @php
                        $pos = 0;
                        $pos_a = 0;
                        $pos_b = 0;
                    @endphp
                    @foreach ($participants as $key => $participant)
                    @if ($participant->category == 'general')
                        <tr class="pink lighten-4">
                    @else
                        <tr>
                    @endif
                    
                        <td>{{ $participant->id }}</td>
                        <td>{{ $participant->upload_id }}</td>
                        <td>{{ $participant->name }}</td>
                        <td>{{ $participant->instance }}</td>
                        <td>{{ $participant->email }}</td>
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
                    </tr>
                    @php
                        $pos++;
                        if ($participant->category == 'student') {
                            $pos_a++;
                        } elseif ($participant->category == 'general'){
                            $pos_b++;
                        }
                    @endphp
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="left mt-3">
                @php
                    echo 'total peserta udinus : '. $pos_a . '<br>';
                    echo 'total peserta umum : '. $pos_b . '<br>';
                    echo 'total peserta : '. $pos . '<br>';
                @endphp
            </div> --}}
            <div class="mt-3">
                {{$participants->links()}}
            </div>
        </div>
    </div>
@endsection