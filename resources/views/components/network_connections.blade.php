<div class="row justify-content-center mt-5">
    <div class="col-12">
        <div class="card shadow  text-white bg-dark">
            <div class="card-header">Coding Challenge - Network connections</div>
            <div class="card-body">
                <hr>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button onclick="getSuggestions()" class="nav-link active" id="pills-home-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                            aria-controls="pills-home" aria-selected="true">Suggestions
                            ({{ $suggestions->count() }})</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button onclick="getRequests('sent')" class="nav-link" id="pills-profile-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Sent Requests
                            ({{ $sentrequests->count() }})</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button onclick="getRequests('received')" class="nav-link" id="pills-contact-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab"
                            aria-controls="pills-contact" aria-selected="false">Received
                            Requests({{ $recievedrequests->count() }})</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button onclick="getConnections()" class="nav-link" id="pills-contacta-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-contacta" type="button" role="tab"
                            aria-controls="pills-contacta" aria-selected="false">Connections
                            ({{ $connections->count() }})</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <x-suggestion :suggestions="$suggestions" />
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <span class="fw-bold">Sent Request Blade</span>
                        <x-request :mode="'sent'" :requests="$sentrequests" />
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <span class="fw-bold">Received Request Blade</span>
                        <x-request :mode="'received'" :requests="$recievedrequests" />
                    </div>
                    <div class="tab-pane fade" id="pills-contacta" role="tabpanel" aria-labelledby="pills-contacta-tab">
                        <span class="fw-bold">Connection Blade (Click on "Connections in common" to see the connections
                            in
                            common
                            component)</span>
                        <x-connection :connections="$connections" />
                    </div>
                </div>

                {{-- <div id="skeleton" class="d-none">
                    @for ($i = 0; $i < 10; $i++)
                        <x-skeleton />
                    @endfor
                </div> --}}

                {{-- <span class="fw-bold">"Load more"-Button</span> --}}
                {{-- <div class="d-flex justify-content-center mt-2 py-3 d-none" id="load_more_btn_parent"> --}}
                {{-- <button class="btn btn-primary" onclick="" id="load_more_btn">Load more</button> --}}
            </div>
        </div>
    </div>
</div>
</div>

{{-- Remove this when you start working, just to show you the different components --}}

{{-- <div id="connections_in_common_skeleton" class=""> --}}
{{-- <br> --}}
{{-- <span class="fw-bold text-white">Loading Skeletons</span> --}}
{{-- <div class="px-2"> --}}
{{-- @for ($i = 0; $i < 10; $i++) --}}
{{-- <x-skeleton /> --}}
{{-- @endfor --}}
{{-- </div> --}}
{{-- </div> --}}
