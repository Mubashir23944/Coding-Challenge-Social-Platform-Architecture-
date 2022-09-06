@foreach ($connections as $connection)
    <div class="my-2 shadow text-white bg-dark p-1" id="section_{{ $connection->id }}">
        <div class="d-flex justify-content-between">
            <table class="ms-1">
                <td class="align-middle">
                    {{ $connection->first_connection_name->id == auth()->user()->id ? $connection->second_connection_name->name : $connection->first_connection_name->name }}
                </td>
                <td class="align-middle"> - </td>
                <td class="align-middle">
                    {{ $connection->first_connection_name->id == auth()->user()->id ? $connection->second_connection_name->email : $connection->first_connection_name->email }}
                </td>
                <td class="align-middle">
            </table>
            <div>
                <button style="width: 220px" id="get_connections_in_common_{{$connection->id}}" class="btn btn-primary" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapse_{{$connection->id}}" aria-expanded="false"
                    aria-controls="collapseExample">
                    Connections in common ()
                </button>
                <button onclick="removeConnection({{ $connection->id }})" id="create_request_btn_"
                    class="btn btn-danger me-1">Remove Connection</button>
            </div>

        </div>
        <div class="collapse" id="collapse_{{$connection->id}}">

            <div id="content_" class="p-2">
                {{-- Display data here --}}
                <x-connection_in_common />
            </div>
            <div id="connections_in_common_skeletons_">
                {{-- Paste the loading skeletons here via Jquery before the ajax to get the connections in common --}}
            </div>
            <div class="d-flex justify-content-center w-100 py-2">
                <button class="btn btn-sm btn-primary" id="load_more_connections_in_common_">Load
                    more</button>
            </div>
        </div>
    </div>
@endforeach
