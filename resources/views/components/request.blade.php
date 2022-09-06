@foreach ($requests as $request)
    <div class="my-2 shadow text-white bg-dark p-1"
        id="{{ $mode == 'sent' ? 'section_' . $request->receiver_name->id : 'section_' . $request->sender_name->id }}">
        <div class="d-flex justify-content-between">
            @if ($mode == 'sent')
                <table class="ms-1">
                    <td class="align-middle">{{ $request->receiver_name->name }}</td>
                    <td class="align-middle"> - </td>
                    <td class="align-middle">{{ $request->receiver_name->email }}</td>
                    <td class="align-middle">
                </table>
            @else
                <table class="ms-1">
                    <td class="align-middle">{{ $request->sender_name->name }}</td>
                    <td class="align-middle"> - </td>
                    <td class="align-middle">{{ $request->sender_name->email }}</td>
                    <td class="align-middle">
                </table>
            @endif

            <div>
                @if ($mode == 'sent')
                    <button id="cancel_request_btn_" class="btn btn-danger me-1"
                        onclick="deleteRequest({{ auth()->user()->id }}, {{ $request->receiver_name->id }})">Withdraw
                        Request</button>
                @else
                    <button id="accept_request_btn_" class="btn btn-primary me-1"
                        onclick="acceptRequest({{ auth()->user()->id }}, {{ $request->sender_name->id }})">Accept</button>
                @endif
            </div>
        </div>
    </div>
@endforeach
