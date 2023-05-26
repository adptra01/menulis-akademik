<x-layout>
    <x-slot name="title">{{ $category->name }}</x-slot>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong>Failed!</strong> You should check in on some of those fields below.
        </div>
    @endif
    <div class="card">
        <div class="card-header mb-4">
            <ul class="nav nav-pills card-header-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-within-card-active" role="tab">lihat</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-within-card-link" role="tab">Edit
                        @if ($errors->any())
                            <sup class="fw-bold text-danger">!</sup>
                        @endif
                    </button>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content p-0">
                <div class="tab-pane fade show active" id="navs-pills-within-card-active" role="tabpanel">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Nama kategori</label>
                                <input class="form-control text-primary border-0 fs-5 fw-bold" readonly type="text"
                                    value="{{ $category->name }}" id="html5-text-input" />
                            </div>
                            <div class="mb-3">
                                <label for="html5-text-input" class="col-md-2 col-form-label">keterangan</label>
                                <textarea class="form-control text-primary border-0 fs-5 fw-bold" readonly rows="3">{{ $category->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border p-4 ">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate placeat quisquam
                                suscipit rem maxime ullam eum, ea optio eos voluptates ipsa cumque quam tempora, totam,
                                qui nostrum quis neque consectetur?
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive pt-5">
                        <h5 class="text-center fw-bold">Daftar Materi dengan kategori {{ $category->name }}</h5>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>judul</th>
                                    <th>kategori</th>
                                    <th>pillihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($arguments as $no => $item)
                                    <tr>
                                        <td>{{ ++$no }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->argumentCategory->name }}</td>
                                        <td>
                                            <div class="d-inline justify-content-center">
                                                <a class="btn btn-info m-1 btn-sm"
                                                    href="{{ Route('argument.show', $item->slug) }}"><i
                                                        class="bx bx-edit-alt me-1"></i>Lihat</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-pills-within-card-link" role="tabpanel">
                    @include('argument_categories.edit')
                </div>
            </div>
        </div>
    </div>
    @section('css')
        @include('datatables.css')
    @endsection

    @section('js')
        @include('datatables.script')
    @endsection
</x-layout>
