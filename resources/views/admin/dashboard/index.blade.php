@extends('admin.template')

@push('css')
    <style>
        .width100{
            width: 100%;
        }
    </style>
@endpush

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-note2 icon-gradient bg-happy-fisher">
                        </i>
                    </div>
                    <div>Dashboard
                        <div class="page-title-subheading">Dashboard | Home
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">

                </div>
            </div>
        </div>
        @include('pesan')
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade" id="tab-content-0" role="tabpanel">
            </div>
            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        dashboard
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
