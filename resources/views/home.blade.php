@extends('layouts.navbar')

@section('title')
{{ __('Home') }}
@endsection

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-12 col-xl-6">
        <p class="ff-montserrat fw-bold text-dark mb-3 small">
            <svg class="me-2" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect y="0.416016" width="22" height="22" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0" transform="scale(0.0138889)"/>
                </pattern>
                <image id="image0" width="72" height="72" xlink:href="data:image/png;base64,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"/>
                </defs>
            </svg> 
            Hi <span class="ff-montserrat fw-bold text-blue-dark">{{ Auth::user()->fullname }}</span>, welcome back!               
        </p>
        <div class="d-flex justify-content-between flex-column flex-md-row">
            <h1 class="text-dark fs-4 ff-days-one">My Resume</h1>
            <a href="{{ route('resume.view-new-resume') }}" class="align-self-center">
                <button type="button" class="btn btn-dark rounded-pill btn-width text-white ff-montserrat"><small>{{ __('Create New') }}</small></button>
            </a>
        </div>

        {{-- messages/alerts --}}
        @if(session('error'))            
            <div class="fw-bold alert alert-danger ff-montserrat mt-3 small">{{ session('error') }}</div>
        @endif

        @if(session('success'))            
            <div class="fw-bold alert alert-success ff-montserrat mt-3 small">{{ session('success') }}</div>
        @endif

        {{-- resume on dashboard --}}
        @if(count($resumes)>0)
            @foreach($resumes as $no => $resume)
                <div class="main-box mt-4 w-100">
                    <div class="d-flex align-items-center justify-content-between p-3 w-100">
                        <div class="d-flex w-100 justify-content-between">
                            <p class="text-dark ff-days-one mb-0 text-18">
                                {{ $resume->title }}
                                <span class="text-dark fs-6 ff-montserrat d-block">{{ $resume->template->name }}</span>
                                <span class="ff-montserrat d-block mt-4 text-grey-dark text-10">Last updated: {{ date('h:ia d F Y', strtotime($resume->updated_at)) }}</span>
                            </p>
                            
                            <p class="ff-montserrat d-block text-10 text-blue-dark">{{ $resume->status }}</p>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="4" height="16" viewBox="0 0 4 16" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="black"/>
                                    <circle cx="2" cy="8" r="2" fill="black"/>
                                    <circle cx="2" cy="14" r="2" fill="black"/>
                                </svg>                            
                            </button>
                            <ul class="dropdown-menu bg-transparent py-0" aria-labelledby="dropdownMenuButton" style="border: none;">

                                @if($resume->status=='Published')
                                    <li class="w-100">
                                        <a class="dropdown-item dropdown-box" href="{{ route('resume.view-resume', ['username' => Auth::user()->username, 'resume_id' => $resume->id]) }}" target="_blank">
                                            <small>View Resume</small>
                                        </a>
                                    </li>
                                @endif

                                <li class="w-100">
                                    <a class="dropdown-item dropdown-box" href="{{ route('resume.view-edit-resume', $resume->id) }}"><small>Edit Resume</small></a>
                                </li>
                                <li class="w-100">
                                    <button type="button" class="dropdown-item dropdown-box" onclick="triggerDelete({{ $resume->id }},'{{ $resume->title }}')" data-bs-toggle="modal" data-bs-target="#deleteModal"><small>Delete Resume</small></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="main-box mt-4 w-100 text-center py-5 text-grey-dark ff-montserrat small">You have no resume. Please create new resume.</p>
        @endif
    </div>
</div>

{{-- Start delete modal --}}
<form action="{{ route('resume.delete') }}" method="POST">
    @csrf
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body p-5">
                    <input type="hidden" id="deleteId" name="resume_id">
                    <p class="modal-title fw-bold fs-2 text-dark ff-days-one" id="deleteModalLabel">Are you sure to delete <span id="deleteTitle"></span>?</p>
                    <button type="submit" class="btn  btn-dark rounded-pill text-white mt-3 w-100"><small>{{ __('Delete') }}</small></button>
                    <button type="button" class="btn btn-main-blue text-blue-dark mt-3 w-100" data-bs-dismiss="modal"><small>{{ __('Cancel') }}</small></button>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- End delete modal --}}
@endsection

@push('js')
<script>
    // delete resume
    function triggerDelete(id, title) {
        $('#deleteTitle').html(title);
        $('#deleteId').val(id);
    }
</script>
@endpush