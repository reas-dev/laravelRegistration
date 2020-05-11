@extends('layouts.admin2Layout')

@section('panel_name', 'Absen Peserta')

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
                        <th>Status</th>
                        <th>Absen</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($participants as $key => $participant)
                    <tr>
                        <td>{{ $participant->id }}</td>
                        <td>{{ $participant->upload_id }}</td>
                        <td>{{ $participant->name }}</td>
                        <td>{{ $participant->instance }}</td>
                        <td>
                            @php
                                $attendance = App\Attendance::where('participant_id', $participant->id)->first();
                            @endphp
                            @if ($attendance->attend != null)
                                <i class="material-icons green-text">check</i>
                            @else
                                <i class="material-icons red-text">clear</i>
                            @endif
                        </td>
                        <td>
                            <form action="{{ url('admin/the-day/absent/'.$participant->id) }}" method="post" class="d-inline">
                                @csrf
                                <button class="btn waves-effect  amber darken-4 waves-light tooltipped" data-position="top"
                                    data-tooltip="Absent" type="submit" name="action">
                                    <i class="material-icons center">assignment_turned_in</i>
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