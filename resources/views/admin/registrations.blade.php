@extends('layouts.app')

@section('content')
    <div class="non-skrollr">
        <div class="row" style="height: auto;">
            <br>
            <h4>Registered Teams</h4>
            <p>
                AUT ACM ICPC 2016 Registered Teams.
            </p>
            <table class="highlight bordered centered">
                <thead>
                <tr>
                    <th data-field="name">Team Name</th>
                    <th data-field="institute">Institution</th>
                    <th data-field="country">Country</th>
                    <th data-field="status">Status</th>
                    <th data-field="status">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $team)
                        <tr>
                            <td>{{$team->team_name}}</td>
                            <td>{{$team->institute_name}}</td>
                            <td>{{$team->site}}</td>
                            <td>{{$team->status['status']}}</td>
                            <td>
                                <center>
                                <a href="{{ route('app::admin.registration.edit', $team) }}"
                                   class="secondary-content">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{--@push('styles')--}}
{{--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">--}}
{{--@endpush--}}
{{--@push('scripts')--}}
{{--<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>--}}
{{--<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.material.min.js"></script>--}}
{{--<script>--}}
    {{--$(document).ready(function() {--}}
        {{--var data = [--}}
            {{--[--}}
                {{--"Tiger Nixon",--}}
                {{--"System Architect",--}}
                {{--"Edinburgh",--}}
                {{--"5421",--}}
                {{--"2011/04/25",--}}
                {{--"$3,120"--}}
            {{--],--}}
            {{--[--}}
                {{--"Garrett Winters",--}}
                {{--"Director",--}}
                {{--"Edinburgh",--}}
                {{--"8422",--}}
                {{--"2011/07/25",--}}
                {{--"$5,300"--}}
            {{--]--}}
        {{--]--}}
        {{--$('#onSite').DataTable( {--}}
            {{--data: data--}}
        {{--} );--}}
    {{--} );--}}
{{--</script>--}}
{{--@endpush--}}